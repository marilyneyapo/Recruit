<?php

namespace App\Controller;

use App\Entity\Category;
use App\Repository\CategoryRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class CategoryController extends AbstractController
{
    #[Route('/category/{id}/questions', name: 'category_questions', methods: ['GET'])]
    public function getQuestions(Category $category): JsonResponse
    {
        $questions = [];
        foreach ($category->getQuestions() as $question) {
            $questions[] = [
                'id' => $question->getId(),
                'question' => $question->getQuestion(),
                'type' => $question->getType(),
                'options' => $question->getOptions(),
            ];
        }

        return new JsonResponse($questions);
    }
}
