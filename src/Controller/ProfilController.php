<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UploadPortfolioType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProfilController extends AbstractController
{
    #[Route('/profil', name: 'app_profil')]
    public function index(Request $request, EntityManagerInterface $entityManager): Response
    {
        if ($this->getUser())
        {
            // système d'upload de portfolio
            $form = $this->createForm(UploadPortfolioType::class);
            $form->handleRequest($request);
            
            if ($form->isSubmitted() && $form->isValid()) {
                $data = $form->getData();
                // path to upload
                $path = $this->getParameter('kernel.project_dir').'/public/uploads/';
                // upload file
                $file = $data['portfolio'];
                $file->move($path, $file->getClientOriginalName());
                // save file name in database
                $user = $this->getUser();
                $user->setPortfolio($file->getClientOriginalName());
                $entityManager->persist($user);
                $entityManager->flush();
            }
            return $this->render('profil/index.html.twig');
        }
        
        
        
        

        return $this->render('profil/index.html.twig', [
            'controller_name' => 'ProfilController',
        ]);
    }
}

