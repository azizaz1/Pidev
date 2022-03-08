<?php

namespace App\Controller;

// ...
use App\Entity\PropertySearch;
use App\Entity\Events;
use App\Form\EventFormType;
use App\Entity\TriParPrix;
use App\Form\TriPrixFormType;

use App\Form\PropertySearchType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Dompdf\Dompdf;
use Dompdf\Options;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

class EventController extends AbstractController
{
    
    
   
   
    /**
     * @Route("/eventstri", name="eventstri")
     */
public function eventstri(Request $request): Response
{
    $triParPrix = new TriParPrix();
    $form = $this->createForm(TriPrixFormType::class,$triParPrix);
    

    

    $form->handleRequest($request);

   //initialement le tableau des articles est vide, 
   //c.a.d on affiche les articles que lorsque l'utilisateur clique sur le bouton rechercher
    $events= [];
    $price = $triParPrix->getPrice();   
    $events= $this->getDoctrine()->getRepository(Events::class)->findBy(array(),array('price' => 'ASC'));

   if($form->isSubmitted() && $form->isValid()) {
    
   $price = $triParPrix->getPrice();   

   //on récupère le nom d'article tapé dans le formulaire
      //si on a fourni un nom d'article on affiche tous les articles ayant ce nom
       
      //si si aucun nom n'est fourni on affiche tous les articles
   }
    return  $this->render('back-office/event/eventsTri.html.twig',[ 'form' =>$form->createView(), 'events' => $events]);  
}

    /**
     * @Route("/eventstri2", name="eventstri2")
     */
    public function eventstri2(Request $request): Response
    {
        $triParPrix = new TriParPrix();
        $form = $this->createForm(TriPrixFormType::class,$triParPrix);
        
    
        
    
        $form->handleRequest($request);
    
       //initialement le tableau des articles est vide, 
       //c.a.d on affiche les articles que lorsque l'utilisateur clique sur le bouton rechercher
        $events= [];
        $price = $triParPrix->getPrice();   
        $events= $this->getDoctrine()->getRepository(Events::class)->findBy(array(),array('price' => 'ASC'));
    
       if($form->isSubmitted() && $form->isValid()) {
        
       $price = $triParPrix->getPrice();   
    
       //on récupère le nom d'article tapé dans le formulaire
          //si on a fourni un nom d'article on affiche tous les articles ayant ce nom
           
          //si si aucun nom n'est fourni on affiche tous les articles
       }
        return  $this->render('back-office/event/eventsTri2.html.twig',[ 'form' =>$form->createView(), 'events' => $events]);  
    }
    /**
     * @Route("/add-events", name="add_events")
     */
    public function addEvents(Request $request): Response
    {
        $events = new Events();

        $form = $this->createForm(EventFormType::class , $events);
       
        $form = $form->handleRequest($request);

        if ($form->isSubmitted()){
            $events = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($events);
            $em->flush();
        }
        // $mailMessage=$events->getNom().''.$events->getPlace().''.$events->getPrice().''.$events->getIdeven().''.$message;
        // $this->addFlash('succes',$events->getNom().$message);
        // $mailer->sendEmail($mailMessage);

        return $this->render("back-office/event/event-form.html.twig", [
            "form_title" => "Ajouter un event",
            "form_event" => $form->createView(),
        ]);
    }

/**
 * @Route("/events", name="events")
 */
public function events(Request $request): Response
{
    $propertySearch = new PropertySearch();
    $form = $this->createForm(PropertySearchType::class,$propertySearch);

    

    $form->handleRequest($request);

   //initialement le tableau des articles est vide, 
   //c.a.d on affiche les articles que lorsque l'utilisateur clique sur le bouton rechercher
    $events= [];
    $events= $this->getDoctrine()->getRepository(Events::class)->findAll();

   if($form->isSubmitted() && $form->isValid()) {
    

   //on récupère le nom d'article tapé dans le formulaire
    $price = $propertySearch->getPrice();   
    if ($price!="") 
      //si on a fourni un nom d'article on affiche tous les articles ayant ce nom
      $events= $this->getDoctrine()->getRepository(Events::class)->findBy(array(),array('price' => 'ASC'));
    else   
      //si si aucun nom n'est fourni on affiche tous les articles
      $events= $this->getDoctrine()->getRepository(Events::class)->findBy(array(),array('price' => 'ASC'));
   }
   
   if($form->isSubmitted() && $form->isValid()) {
    

    //on récupère le nom d'article tapé dans le formulaire
     $nom = $propertySearch->getNom();   
     if ($nom!="") 
       //si on a fourni un nom d'article on affiche tous les articles ayant ce nom
       $events= $this->getDoctrine()->getRepository(Events::class)->findBy(['nom' => $nom] );
     else   
       //si si aucun nom n'est fourni on affiche tous les articles
       $events= $this->getDoctrine()->getRepository(Events::class)->findAll();
    }
    return  $this->render('back-office/event/events.html.twig',[ 'form' =>$form->createView(), 'events' => $events]);  
    
}



/**
 * @Route("/eventspdf", name="eventspdf")
 */
public function eventspdf(): Response
{
    


    // Configure Dompdf according to your needs
    $pdfOptions = new Options();
    $pdfOptions->set('defaultFont', 'Arial');
    $pdfOptions->set('isJavascriptEnabled', TRUE);

    $pdfOptions->set('isRemoteEnabled', TRUE);
    // Instantiate Dompdf with our options
    $dompdf = new Dompdf($pdfOptions);

    $events = $this->getDoctrine()->getRepository(Events::class)->findAll();

    

    
   
    // Retrieve the HTML generated in our twig file
    $html = $this->renderView('back-office/event/eventspdf.html.twig', [
        "events" => $events,
        'title' => "Welcome to our PDF Test",
        'url' => "https://www.w3schools.com/images/w3schools_green.jpg",

    ]);
    $HTML="<img src='../../public/img/about.jpg>";

    // Load HTML to Dompdf
    $dompdf->loadHtml($html);
    
    // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
    $dompdf->setPaper('A4', 'portrait');

    // Render the HTML as PDF
    $dompdf->render('A4');

    // Output the generated PDF to Browser (force download)
    $dompdf->stream("Events.pdf", [
        "Attachment" => true
    ]);
}
   




/**
 * @Route("/events1", name="events1")
 */
public function events1(Request $request): Response
{
    $propertySearch = new PropertySearch();
    $form = $this->createForm(PropertySearchType::class,$propertySearch);

    

    $form->handleRequest($request);

   //initialement le tableau des articles est vide, 
   //c.a.d on affiche les articles que lorsque l'utilisateur clique sur le bouton rechercher
    $events= [];
    $events= $this->getDoctrine()->getRepository(Events::class)->findAll();

   if($form->isSubmitted() && $form->isValid()) {
    

   //on récupère le nom d'article tapé dans le formulaire
    $price = $propertySearch->getPrice();   
    if ($price!="") 
      //si on a fourni un nom d'article on affiche tous les articles ayant ce nom
      $events= $this->getDoctrine()->getRepository(Events::class)->findBy(array(),array('price' => 'ASC'));
    else   
      //si si aucun nom n'est fourni on affiche tous les articles
      $events= $this->getDoctrine()->getRepository(Events::class)->findBy(array(),array('price' => 'ASC'));
   }
   
   if($form->isSubmitted() && $form->isValid()) {
    

    //on récupère le nom d'article tapé dans le formulaire
     $nom = $propertySearch->getNom();   
     if ($nom!="") 
       //si on a fourni un nom d'article on affiche tous les articles ayant ce nom
       $events= $this->getDoctrine()->getRepository(Events::class)->findBy(['nom' => $nom] );
     else   
       //si si aucun nom n'est fourni on affiche tous les articles
       $events= $this->getDoctrine()->getRepository(Events::class)->findAll();
    }
    return  $this->render('back-office/event/monfront.html.twig',[ 'form' =>$form->createView(), 'events' => $events]);  
    
}
/**
 * @Route("/eventss/{id}", name="eventss")
 */
public function eventss(int $id): Response
{
    $events = $this->getDoctrine()->getRepository(events::class)->find($id);

    return $this->render("back-office/event/eventid.html.twig", [
        "events" => $events,
    ]);
}
/**
 * @Route("/modify-events/{id}", name="modify_events")
 */
public function modifyEvent(Request $request, int $id): Response
{
    $entityManager = $this->getDoctrine()->getManager();

    $events = $entityManager->getRepository(events::class)->find($id);
    $form = $this->createForm(EventFormType::class, $events);
    $form->handleRequest($request);

    if($form->isSubmitted() && $form->isValid())
    {
        $entityManager->flush();
    }

    return $this->render("back-office/event/event-form2.html.twig", [
        "form_title" => "Modifier un event",
        "form_event" => $form->createView(),
    ]);
}
/**
 * @Route("/delete-events/{id}", name="delete_events")
 */
public function deleteEvent(int $id): Response
{
    $entityManager = $this->getDoctrine()->getManager();
    $events = $entityManager->getRepository(events::class)->find($id);
    $entityManager->remove($events);
    $entityManager->flush();

    return $this->redirectToRoute("events");
}
}