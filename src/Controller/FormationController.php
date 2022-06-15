<?php

namespace App\Controller;

use App\Entity\Formation;
use App\Entity\User;
use App\Form\Type\FormationType;
use App\Form\Type\UserType;
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

    /**
     * @Route("/formation/show", name="show_formation")
     *
     */
    public function show(EntityManagerInterface $em)
    {
        $formations = $em->getRepository(Formation::class)->findAll();
        return $this->render('formation/show.html.twig', [
            'formations' => $formations
        ]);
    }

    /**
     * @Route("/formation/inscription/{id}", name="inscription_formation")
     *
     */
    public function inscription(Request $request, EntityManagerInterface $em, $id): Response
    {
        $user = new User();

        $form = $this->createForm(UserType::class, $user);

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $formation = $em->getRepository(Formation::class)->findOneBy(['id' => $id]);
            $user->setFormationId($formation);

            $user = $form->getData();
            $em->persist($user);
            $em->flush();

            return $this->redirectToRoute('homepage');
        }

        return $this->renderForm('inscription/new.html.twig', [
            'form' => $form
        ]);
    }
}