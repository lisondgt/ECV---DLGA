<?php
// src/Controller/ActualitesController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ActualitesController extends AbstractController
{
    /**
     * @Route("/actualites/press", name="actualites_press")
     */
    public function press(){
        return $this->render('actualites/press.html.twig');
    }
}