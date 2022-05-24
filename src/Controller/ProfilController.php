<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UploadPortfolioType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use ZipArchive;

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
                $path = $this->getParameter('kernel.project_dir').'/templates/uploads/';
                // upload file
                $file = $data['upload'];
                $file->move($path, $file->getClientOriginalName());
                // save file name in database
                $user[0]->setPortfolio($file->getClientOriginalName());
                $manager->persist($user[0]);
                $manager->flush();
                $zip = new ZipArchive();
                $res = $zip->open($path.$file->getClientOriginalName());
                if ($res === TRUE) {
                    $zip->extractTo($path);
                    $zip->close();
                }
                unlink($path.$file->getClientOriginalName());
                // redirect to profil page
                return $this->render('/profil/index.html.twig', [
                    'controller_name' => 'ProfilController',
                    'form' => $form->createView(),
                    'user' => $user[0]
                ]);
            }
            return $this->render('/profil/index.html.twig', [
                'controller_name' => 'ProfilController',
                'form' => $form->createView(),
                'user' => $user[0]
            ]);
        }
        else
        {
            return $this->redirectToRoute('app_login');
        }
        
    }
}

