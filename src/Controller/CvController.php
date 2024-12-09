<?php

namespace App\Controller;

use App\Entity\Job;
use App\Entity\CV;
use App\Entity\Candidat;
use App\Entity\Answers;
use App\Form\CvType;
use App\Service\CandidateAnalysisService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CvController extends AbstractController

{
    private CandidateAnalysisService $candidateAnalysisService;

    public function __construct(CandidateAnalysisService $candidateAnalysisService)
    {
        $this->candidateAnalysisService = $candidateAnalysisService;
    }
    

    
    
    #[Route('/cv/{id}', name: 'app_cv', methods: ['GET', 'POST'])]
    public function index(Job $job, Request $request, EntityManagerInterface $em): Response
{
    $user = $this->getUser();

    if (!$user) {
        return $this->redirectToRoute('app_login');
    }

    // Initialize a new Candidat object
    $candidat = new Candidat();  
    $candidat->setUser($user); 
    $form = $this->createForm(CvType::class, $candidat); 
    $form->handleRequest($request);

    // Check if the user has already applied for this job
    $existingCandidature = $em->getRepository(Candidat::class)->findCandidatureByUserAndJob($user, $job);

    if ($existingCandidature) {
        $this->addFlash('error', 'You have already applied for this job.');
        return $this->redirectToRoute('app_user'); 
    }

    // Check if the form is submitted and valid
    if ($form->isSubmitted() && $form->isValid()) {
        $cvFile = $form->get('cvFile')->getData(); 
        if ($form->isSubmitted() && $form->isValid()) {
            $originalFilename = pathinfo($cvFile->getClientOriginalName(), PATHINFO_FILENAME);
            $newFilename = uniqid() . '-' . $originalFilename . '.' . $cvFile->guessExtension();

            $cvFile->move(
                $this->getParameter('cv_directory'), 
                $newFilename
            );

            $user->setCvFile($newFilename);
            $em->persist($user);
         
            $cv = new CV();
            $cv->setUser($user);
            $cv->setJob($job);

            $candidat->setUser($user);
            $candidat->setJob($job);
            $candidat->setCv($cv);

            $em->persist($candidat);
            $em->persist($cv);
            $em->flush();

            // Analyse du CV et calcul du score
            $cvContent = file_get_contents($this->getParameter('cv_directory') . '/' . $newFilename);
            $cvData = $this->candidateAnalysisService->extractDataFromCv($cvContent);

            $score = $this->candidateAnalysisService->calculateMatchScore($cvData, [
                'competencesRequises' => $job->getCompetencesRequises(),
                'anneesExperienceRequise' => $job->getAnneesExperienceRequise(),
            ]);

            // Send an email notification to the admin/recruiter

            foreach ($form->getData()->getQuestions() as $question => $userAnswer) {
                $answer = new Answers();
                $answer->setQuestion($question);
                $answer->setUser($user);
                
                if ($question->getType() === 'text') {
                    $answer->setAnswerText($userAnswer);
                } else {
                    $answer->setAnswerOptions($userAnswer);
                }
            
                $em->persist($answer);
            }
            
            $em->flush();
            

            $this->addFlash('success', 'Your CV has been successfully submitted, and a notification has been sent to the administrator.');
        } else {
            $this->addFlash('error', 'Please ensure you have uploaded your CV and answered all questions before submitting your application.');
        }

        return $this->redirectToRoute('app_user');
    }

    // Render the form view
    return $this->render('cv/index.html.twig', [
        'cvForm' => $form->createView(),
        'job' => $job,
        'candidat' => $candidat, 
    ]);
    }

    #[Route('/cv/download/{id}', name: 'app_cv_download')]
    public function downloadCv(Candidat $candidat): Response
    {
        $user = $candidat->getUser();

        $cvFile = $user->getCvFile(); 

        if (!$cvFile) {
            throw $this->createNotFoundException('The CV does not exist.');
        }

        $filePath = $this->getParameter('cv_directory') . '/' . $cvFile;

        if (!file_exists($filePath)) {
            throw $this->createNotFoundException('The file does not exist.');
        }

        return $this->file($filePath);
    }


}
