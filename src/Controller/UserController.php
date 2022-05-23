<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/* C'est un contrôleur qui gère les requêtes à l'URL `/user` */
class UserController extends AbstractController
{
    /**
     * La fonction `index()` est une fonction de contrôleur qui renvoie un objet de réponse
     * 
     * @return Response Un objet Response
     */
    #[Route('/{name}', name: 'app_user')]
    public function index(Request $request, EntityManagerInterface $manager): Response
    {
        $user = $manager->getRepository(User::class)->findBy(['email' => $this->getUser()->getUserIdentifier()]);
        $name = $user[0]->getNom();
        return $this->render('/uploads/Chardon/public/index.php', [
            'controller_name' => 'UserController',
            'name' => $name,
        ]);
    }
}
