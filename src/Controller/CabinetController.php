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
}