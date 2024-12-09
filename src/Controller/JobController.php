<?php

namespace App\Controller;

use App\Entity\Job;
use App\Form\JobSearchType;
use App\Repository\JobRepository;
use App\Repository\CategoryRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

#[Route('job')]
class JobController extends AbstractController
{
    private JobRepository $jobRepository;
    private CategoryRepository $categoryRepository;

    public function __construct(JobRepository $jobRepository, CategoryRepository $categoryRepository)
    {
        $this->jobRepository = $jobRepository;
        $this->categoryRepository = $categoryRepository;
    }
    #[Route('/', name: 'job.index', methods: 'GET')]
public function index(Request $request): Response
{
    // Créer le formulaire de recherche
    $form = $this->createForm(JobSearchType::class);
    $form->handleRequest($request);

    // Initialiser la variable des résultats de recherche
    $jobs = [];

    // Si le formulaire est soumis et valide, effectuer la recherche
    if ($form->isSubmitted() && $form->isValid()) {
        $data = $form->getData();
        $jobs = $this->jobRepository->findBySearchCriteria($data);
    }

    // Récupérer toutes les catégories et autres données
    $categories = $this->categoryRepository->findAll();
    $locations = $this->jobRepository->findUniqueLocations();
    $types = $this->jobRepository->findUniqueTypes();

    // Renvoyer la vue avec le formulaire de recherche et les résultats
    return $this->render('job/index.html.twig', [
        'categories' => $categories,
        'locations' => $locations,
        'types' => $types,
        'searchForm' => $form->createView(), // Passer le formulaire à la vue
        'jobs' => $jobs,  // Passer les résultats de recherche à la vue
    ]);
}



    #[Route('/list', name: 'job.list', methods: 'GET')]
    public function list(Request $request): Response
    {
        // Retrieve selected category from query parameters
        $selectedCategory = $request->query->get('category', null);
        // Fetch all jobs
        $jobs = $this->jobRepository->findAll();
        // Fetch all categories
        $categories = $this->categoryRepository->findAll();

        return $this->render('job/list.html.twig', [
            'jobs' => $jobs,
            'categories' => $categories,
            'selectedCategory' => $selectedCategory,
        ]);
    }

    #[Route('/jobs/{category}', name: 'jobs_by_category', methods: 'GET')]
    public function listByCategory(string $category): Response
    {
        // Trouver la catégorie
        $categoryEntity = $this->categoryRepository->findOneBy(['name' => $category]);

        // Si la catégorie n'existe pas, redirigez ou affichez un message d'erreur
        if (!$categoryEntity) {
            throw $this->createNotFoundException('La catégorie n\'existe pas.');
        }

        // Récupérer les jobs de cette catégorie
        $jobs = $this->jobRepository->findBy(['category' => $categoryEntity]);

        $categories = $this->categoryRepository->findAll();

        return $this->render('job/list.html.twig', [
            'jobs' => $jobs,
            'categories' => $categories,
            'selectedCategory' => $categoryEntity->getName(),
        ]);
    }

    #[Route('/{id}', name: 'job.show', methods: 'GET')]
    public function show(?Job $job): Response
    {
        if (!$job) {
        // You can redirect, throw an exception, or show a custom error message
        throw $this->createNotFoundException('Job not found.');
    }
        return $this->render('job/show.html.twig', [
            'job' => $job,
        ]);
    }

    #[Route('list/apply/{id}', name: 'job.apply', methods: 'GET')]
    public function apply(Job $job, Request $request): Response
    {
        // Vérifiez si la date de fin de l'offre d'emploi est dépassée
        if ($job->getExpiresAt() < new \DateTime()) {
            $this->addFlash('error', 'Cette offre d\'emploi a expiré. Vous ne pouvez pas postuler.');

            // Redirigez vers la liste des offres d'emploi
            return $this->redirectToRoute('job.list'); 
        }

        // Si l'utilisateur n'est pas connecté, afficher le formulaire de candidature
        if (!$this->getUser()) {
            return $this->render('job/apply.html.twig', [
                'job' => $job,
            ]);
        }

        // Gérer la session si l'utilisateur est connecté
        $session = $request->getSession();
        $session->set('job_id', $job->getId());

        // Rediriger vers le formulaire de CV
        return $this->redirectToRoute('app_cv', ['id' => $job->getId()]);
    }

    #[Route('/search', name: 'app_job_search')]
    public function search(Request $request, JobRepository $jobRepository): Response
    {
        $form = $this->createForm(JobSearchType::class);
        $form->handleRequest($request);

        $jobs = [];

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            dd($data);
            $jobs = $jobRepository->findBySearchCriteria($data);
        }

        if (empty($jobs)) {
            $this->addFlash('warning', 'Aucun résultat trouvé.');
        }
                

        

        return $this->render('job/search.html.twig', [
            'searchForm' => $form->createView(),
            'jobs' => $jobs,
        ]);
    }



}
