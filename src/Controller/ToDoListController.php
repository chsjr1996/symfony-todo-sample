<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ToDoListController extends AbstractController
{
    #[Route('/', name: 'todo_index')]
    public function index(): Response
    {
        $todoListItems = [
            ['id' => 1, 'title' => 'Study lua programming language', 'status' => 'undone'],
            ['id' => 2, 'title' => 'Start study Symfony Framework', 'status' => 'done'],
        ];

        return $this->render('index.html.twig', [
            'todoListItems' => $todoListItems
        ]);
    }

    #[Route('/store', name: 'todo_store', methods: ['POST'])]
    public function store(): Response
    {
        return $this->json([
            'message' => 'Store todo... WIP',
        ]);
    }

    #[Route('/delete/{id}', name: 'todo_delete', methods: ['GET'])]
    public function delete($id): Response
    {
        return $this->json([
            'message' => "Delete todo ({$id})... WIP",
        ]);
    }

    #[Route('/switch-status/{id}', name: 'todo_switch_status', methods: ['GET'])]
    public function switchStatus($id): Response
    {
        return $this->json([
            'message' => "Switch todo ({$id}) status... WIP",
        ]);
    }
}
