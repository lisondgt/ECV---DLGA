<?php
// src/Controller/ExpertiseController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ExpertiseController extends AbstractController
{
    /**
     * @Route("/expertise/competences", name="expertise_competences")
     */
    public function competences(){
        return $this->render('expertise/competences.html.twig');
    }

    /**
     * @Route("/expertise/secteur-intervention", name="expertise_secteur_intervention")
     */
    public function secteurActivites(){
        return $this->render('expertise/secteur-intervention.html.twig');
    }
}