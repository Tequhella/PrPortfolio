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
    public function user(EntityManagerInterface $manager, string $name) : Response
    {
        $user = $manager->getRepository(User::class)->findOneBy(['name' => $name]);
        return $this->render('user/index.html.twig', [
            'user' => $user,
        ]);
    }

    #[Route('{name}/profil', name: 'app_profil')]
    public function index(Request $request, EntityManagerInterface $manager, string $name): Response
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
                $user = $manager->getRepository(User::class)->findBy(['name' => $name]);
                $user->setPortfolio($file->getClientOriginalName());
                $manager->persist($user);
                $manager->flush();
                return $this->render('{name}/index.html.twig');
            }
            return $this->render('profil/index.html.twig', [
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

