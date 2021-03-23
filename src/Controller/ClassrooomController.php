<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Controller\classrooom;
use App\Entity\Classroom;

class ClassrooomController extends AbstractController
{
    /**
     * @Route("/classrooom", name="classrooom")
     */
    public function index()
    {
        return $this->render('classrooom/index.html.twig', [
            'controller_name' => 'ClassrooomController',
        ]);
    }

    /**
     * @Route("/list",name="list")
     */
    public function afficher()
    {
        $listClassroom=$this->getDoctrine()
            ->getRepository(Classroom::class)
            ->findAll();
        return $this->render('classrooom/afficher.html.twig',['list'=>$listClassroom]);

    }
}
