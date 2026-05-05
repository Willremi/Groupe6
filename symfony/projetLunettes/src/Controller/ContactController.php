<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Form\ContactType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ContactController extends AbstractController
{
    #[Route('/contact', name: 'contact')]
    public function index(
        Request $request,
        \Swift_Mailer $mailer,
        EntityManagerInterface $em
    ): Response {
        $contact = new Contact();
        $form = $this->createForm(ContactType::class, $contact);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            // Enregistrement en base
            $em->persist($contact);
            $em->flush();

            // Récupération des données
            $prenom = $contact->getPrenomContact();
            $nom = $contact->getNomContact();
            $sujet = $contact->getSujet();
            $email = $contact->getEmail();
            $content = $contact->getContenuMessage();

            // Construction du message
            $textBody = "
                <h3>$email</h3>
                <p>Le sujet : $sujet</p>
                <p>Votre message :</p>
                <p>$content</p>
                <p>De la part : $prenom $nom</p>
            ";

            $message = (new \Swift_Message($sujet))
                ->setFrom($email)
                ->setTo('willremi@gmail.com')
                ->setSubject($sujet)
                ->setBody($textBody, 'text/html', 'utf-8');

            $mailer->send($message);

            $this->addFlash('message', 'Votre message a été transmis, nous vous répondrons dans les meilleurs délais.');
        }

        return $this->render('contact/index.html.twig', [
            'controller_name' => 'ContactController',
            'form' => $form->createView(),
        ]);
    }
}
