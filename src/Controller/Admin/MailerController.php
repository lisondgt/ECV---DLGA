<?php

namespace App\Controller\Admin;

use App\Entity\Formation;
use App\Entity\Mail;
use App\Form\Type\MailType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;
use App\Controller\Admin\DashboardController;

class MailerController extends AbstractController
{
    /**
     * @Route("/send/mail/{id}", name="send_mail")
     *
     */
    public function sendMail(Request $request, EntityManagerInterface $em, $id, MailerInterface $mailer): Response
    {
        $formation = $em->getRepository(Formation::class)->findOneBy(['id'=>$id]);
        $mail = new Mail();

        $form = $this->createForm(MailType::class, $mail);

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {
            $mail = $form->getData();
            foreach ($formation->getUsers() as $users) {
                $message = (new Email())
                    ->from($users->getEmail())
                    ->to('gbauvin@gmail.com')
                    ->subject('test')
                    ->text('test');

                $mailer->send($message);

                $this->addFlash('success', 'Vore message a été envoyé');

                return $this->redirectToRoute('home');
            }
        }

        return $this->renderForm('admin/mail_formation.html.twig', [
            'form' => $form
        ]);
    }
}