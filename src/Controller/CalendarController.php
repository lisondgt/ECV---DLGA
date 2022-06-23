<?php

namespace App\Controller;

use App\Entity\Formation;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CalendarController extends AbstractController
{
    /**
     * @Route("/calendar/show", name="show_calendar")
     *
     */
    public function show(EntityManagerInterface $em): Response
    {
        $formations = $em->getRepository(Formation::class)->findAll();

            $jsonData = array();
            $idx = 0;

            foreach ($formations as $formation) {
                $temp = array(
                    'title' => $formation->getTitre(),
                    'dateStart' => $formation->getDateDebut(),
                    'dateEnd' => $formation->getDateFin(),
                    'avocat' => $formation->getAvocats()
                );
                $jsonData[$idx++] = $temp;
            }
            return new JsonResponse($jsonData);
    }
}