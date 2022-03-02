<?php

namespace App\Controller;

use App\Entity\Publication;
use App\Form\PublicationType;
use App\Entity\Comment;
use App\Entity\User;
use App\Repository\PublicationRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Dompdf\Dompdf;
use Dompdf\Options;
use PHPMailer\PHPMailer\PHPMailer;
use App\Notifications\NouveauPublicationNotification;
use Swift_SmtpTransport;
use Swift_Message;
use Swift_Mailer;

require_once 'C:\Users\Admin\Desktop\pii\pidev\vendor\autoload.php';
/**
 * @Route("/publication")
 */
class PublicationController extends AbstractController
{
    /**
     * @Route("/listo", name="listo")
     */
    public function listo(PublicationRepository $publicationRepository)
    {
        // Configure Dompdf according to your needs
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');
        
        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);
        
        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('publication/mypdf.html.twig', [
            'publications' => $publicationRepository->findAll()
        ]);
        
        // Load HTML to Dompdf
        $dompdf->loadHtml($html);
        
        // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
        $dompdf->setPaper('A4', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser (inline view)
        $dompdf->stream("mypdf.pdf", [
            "Attachment" => false
        ]);
    }
    /**
     * @Route("/", name="publication_index", methods={"GET"})
     */
    public function index(PublicationRepository $publicationRepository): Response
    {
        return $this->render('publication/index.html.twig', [
            'publications' => $publicationRepository->findAll(),
        ]);
    }


    /**
     * @Route("/pubs", name="pubs", methods={"GET"})
     */
    public function lespub(PublicationRepository $publicationRepository): Response
    {
        return $this->render('publication/lespub.html.twig', [
            'publications' => $publicationRepository->findAll(),
        ]);
    }
    /**
     * @Route("/new", name="publication_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager,UserRepository $userrepo): Response
    {
        $user = new User();

        //$value = $userrepo->find(1);
        $publication = new Publication();
        $form = $this->createForm(PublicationType::class, $publication);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $uploadedFile = $form['image']->getData();
            $filename = md5(uniqid()).'.'.$uploadedFile->guessExtension();
            $uploadedFile->move($this->getParameter('upload_directory'),$filename);
            $publication->setImage($filename);
            //$publication->setIduser($value) ;
            $entityManager->persist($publication);
            $entityManager->flush();

            $this->notify_creation->notify();
            return $this->redirectToRoute('pubs', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('publication/new.html.twig', [
            'publication' => $publication,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="publication_show", methods={"GET"})
     */
    public function show(Publication $publication): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $value = $publication->getAbn();
        $value = $value + 1 ;
        $publication->setAbn($value);
        $entityManager->flush();
        return $this->render('publication/show.html.twig', [
            'publication' => $publication,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="publication_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Publication $publication, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(PublicationType::class, $publication);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('pubs');
        }

        return $this->render('publication/edit.html.twig', [
            'publication' => $publication,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="publication_delete", methods={"POST"})
     */
    public function delete(Request $request, Publication $publication, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$publication->getId(), $request->request->get('_token'))) {
            $entityManager->remove($publication);
            $entityManager->flush();
        }

        return $this->redirectToRoute('publication_index', [], Response::HTTP_SEE_OTHER);
    }
        /**
     * @Route("/publication_delete_user/{id}", name="publication_delete_user", methods={"POST"})
     */
    public function deleteuser(Request $request, Publication $publication, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$publication->getId(), $request->request->get('_token'))) {
            $entityManager->remove($publication);
            $entityManager->flush();
        }

        return $this->redirectToRoute('pubs', [], Response::HTTP_SEE_OTHER);
    }


    /**
 * @var NouveauPublicationNotification
 */
private $notify_creation;

/**
 * PublicationController constructor.
 * @param NouveauPublicationNotification $notify_creation
 */
public function __construct(NouveauPublicationNotification $notify_creation)
{
    $this->notify_creation = $notify_creation;
    
}
}