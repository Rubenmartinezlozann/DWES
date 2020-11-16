<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class LoginController extends AbstractController
{
    /**
     * @Route("/login", name="login")
     */
    public function index(SessionInterface $session)
    {
        $nomUsuario = $session->get('nombre_usuario');

        return $this->render('login.html.twig', [
            'nombre_usuario' => 'Hola '.$nomUsuario,
            'titulo' => 'Login',
        ]);
    }
}
