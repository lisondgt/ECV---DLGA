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
use Yectep\PhpSpreadsheetBundle\Factory;


class FormationController extends AbstractController
{
    /**
     * @Route("/formation/new", name="new_formation")
     *
     */
    public function new(Request $request, EntityManagerInterface $em): Response
    {
        $formation = new Formation();
        $formation->setDateDebut(new \DateTime('tomorrow'));

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
            $user->addFormation($formation);

            $user = $form->getData();
            $em->persist($user);
            $em->flush();

            return $this->redirectToRoute('homepage');
        }

        return $this->renderForm('inscription/new.html.twig', [
            'form' => $form
        ]);
    }

    /**
     * @Route("/formation/export/utilisateur/{id}", name="formation_export_utilisateur")
     *
     */
    public function exportUtilisateurs($id, EntityManagerInterface $em, Factory $factory): Response
    {
        $formation = $em->getRepository(Formation::class)->findOneBy(['id'=>$id]);
        $spreadsheet = $factory->createSpreadsheet();

        $spreadsheet->getProperties()->setCreator('Test')
            ->setLastModifiedBy('Test')
            ->setTitle('Utilisateurs')
            ->setSubject('Office 2007 XLSX Test Document')
            ->setDescription('Export de tous les utilisateurs qui participent qui à la formation')
            ->setKeywords('office 2007 openxml php')
            ->setCategory('Test result file');

        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setTitle('Liste des participants');
        $count = 2;
        foreach ($formation->getUsers() as $users){
            $sheet->setCellValue('A1', "Prénom");
            $sheet->setCellValue('B1', "Nom");
            $sheet->setCellValue('C1', "Téléphone");
            $sheet->setCellValue('D1', "Email");
            $sheet->setCellValue('E1', "Société");
            $sheet->setCellValue('F1', "Fonction");
        $sheet->setCellValue('A'.$count, $users->getFirstname());
        $sheet->setCellValue('B'.$count, $users->getLastname());
        $sheet->setCellValue('C'.$count, $users->getPhone());
        $sheet->setCellValue('D'.$count, $users->getEmail());
        $sheet->setCellValue('E'.$count, $users->getSociety());
        $sheet->setCellValue('F'.$count, $users->getOffice());
        $count = $count + 1;
        }

        $response = $factory->createStreamedResponse($spreadsheet, 'Xls');

        // Redirect output to a client’s web browser (Xls)
        $response->headers->set('Content-Type', 'application/vnd.ms-excel');
        $response->headers->set('Content-Disposition', 'attachment;filename="participants_"'.$formation->getTitre().'".xls"');
        $response->headers->set('Cache-Control','max-age=0');

        return $response;
    }
}