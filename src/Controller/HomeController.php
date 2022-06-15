<?php
// src/Controller/HomeController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Spatie\CalendarLinks\Link;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function home(){
        return $this->render('home.html.twig');
    }
}