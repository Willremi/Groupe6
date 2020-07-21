<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Entity\Lunettes;
use App\Form\ContactType;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(Request $request, \Swift_Mailer $mailer, PaginatorInterface $paginator)
    {   
        $contact = new Contact();
        $form = $this->createForm(ContactType::class, $contact);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($contact);
            $entityManager->flush();

            $prenom = $contact->getPrenomContact();
            $nom = $contact->getNomContact();
            $sujet = $contact->getSujet();
            $email = $contact->getEmail();
            $content = $contact->getContenuMessage();

            $textBody = "<h3>".$email."</h3><p>Le sujet : ".$sujet."</p><p>Votre message : </p><p>".$content."</p><p>De la part : ".$prenom." ".$nom;

            $message = (new \Swift_Message($sujet))
                ->setFrom($email)
                ->setTo('willremi@gmail.com')
                ->setSubject($sujet)
                ->setBody($textBody, 'text/html', 'utf-8');

            $mailer->send($message);
            $this->addFlash('message', 'Votre message a été transmis, nous vous répondrons dans les meilleurs délais.'); 
        }

        $donnees = $this->getDoctrine()->getRepository(Lunettes::class)->findBy(
            [], 
            ['id' => 'DESC']
        );

        $apgination = $paginator->paginate(
            $donnees, 
            $request->query->getInt('page', 1), 
            3
        );

        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'form' => $form->createView(), 
            'pagination' => $apgination, 
        ]);
    }
}
