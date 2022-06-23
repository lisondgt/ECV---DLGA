<?php
// src/Controller/CabinetController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CabinetController extends AbstractController
{
    /**
     * @Route("/cabinet/presentation", name="cabinet_presentation")
     */
    public function presentation(){
        return $this->render('cabinet/presentation.html.twig');
    }

    /**
     * @Route("/cabinet/equipe", name="cabinet_equipe")
     */
    public function equipe(){
        return $this->render('cabinet/equipe.html.twig');
    }

    /**
     * @Route("/cabinet/reseau", name="cabinet_reseau")
     */
    public function reseau(){
        return $this->render('cabinet/reseau.html.twig');
    }
}