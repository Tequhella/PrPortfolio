<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UploadPortfolioType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProfilController extends AbstractController
{
    #[Route('{name}/profil', name: 'app_profil')]
    public function index(Request $request, EntityManagerInterface $manager): Response
    {
        if ($this->getUser())
        {
            $user = $manager->getRepository(User::class)->findBy(['email' => $this->getUser()->getUserIdentifier()]);
            $name = $user[0]->getNom();
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
                
                $user->setPortfolio($file->getClientOriginalName());
                $manager->persist($user);
                $manager->flush();
                return $this->render('{name}/index.html.twig', ['name' => $name]);
            }
            return $this->render('{name}/profil/index.html.twig', [
                'controller_name' => 'ProfilController',
                'form' => $form->createView(),
            ]);
        }
        else
        {
            return $this->redirectToRoute('app_login');
        }
        
    }
}

