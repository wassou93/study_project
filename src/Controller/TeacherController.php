<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TeacherController extends AbstractController
{
    #[Route('/teacher', name: 'index_teacher')]
    public function index(): Response
    {
        return $this->render('teacher/index.html.twig', [
            'controller_name' => 'TeacherController',
        ]);
    }

    #[Route('/show_teacher/{name}', name: 'show_teacher')]
    public function showTeacher($name): Response
    {
        return $this->render('teacher/index.html.twig', [
            'controller_name' => 'TeacherController',
            'teacher_name' => $name,
        ]);
    }
    #[Route('/goto_student_index', name: 'goto_student_index')]
    public function goToIndex(): Response
    {
        return $this->redirectToRoute('index_student');
    }

}
