<?php

namespace App\Controller;

use App\Entity\Task;
use App\Repository\TaskRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ToDoListController extends AbstractController
{
    public function __construct(private TaskRepository $taskRepository)
    {
    }

    #[Route('/', name: 'todo_index')]
    public function index(): Response
    {
        $todoListItems = $this->taskRepository->findBy([], ['id' => 'DESC']);

        return $this->render('index.html.twig', [
            'todoListItems' => $todoListItems
        ]);
    }

    #[Route('/store', name: 'todo_store', methods: ['POST'])]
    public function store(Request $request): Response
    {
        if (!$title = trim($request->request->get('title'))) {
            return $this->redirectToRoute('todo_index');
        }

        $task = (new Task())
            ->setTitle($title);

        $this->taskRepository->add($task);

        return $this->redirectToRoute('todo_index');
    }

    #[Route('/delete/{id}', name: 'todo_delete', methods: ['GET'])]
    public function delete(Task $task): Response
    {
        $this->taskRepository->remove($task);

        return $this->redirectToRoute('todo_index');
    }

    #[Route('/switch-status/{id}', name: 'todo_switch_status', methods: ['GET'])]
    public function switchStatus(Task $task): Response
    {
        $this->taskRepository->toggleStatus($task);

        return $this->redirectToRoute('todo_index');
    }
}
