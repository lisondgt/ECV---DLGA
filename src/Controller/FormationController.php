<?php

namespace App\Controller;

use App\Entity\Formation;
use App\Form\Type\FormationType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;


class FormationController extends AbstractController
{
    /**
     * @Route("/formation/new", name="new_formation")
     *
     */
    public function new(Request $request, EntityManagerInterface $em): Response
    {
        $formation = new Formation();
        $formation->setDate(new \DateTime('tomorrow'));

        $form = $this->createForm(FormationType::class, $formation);

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){

            $formation = $form->getData();
            $em->persist($formation);
            $em->flush();

            return $this->redirectToRoute('home');
        }

        return $this->renderForm('formation/new.html.twig', [
            'form' => $form
        ]);
    }
}