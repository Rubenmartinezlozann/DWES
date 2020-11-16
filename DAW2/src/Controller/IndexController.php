<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;


class IndexController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(SessionInterface $session)
    {
        $nomUsuario = $session->get('nombre_usuario');

        return $this->render('index.html.twig', [
            'nombre_usuario' => 'Hola '.$nomUsuario,
            'titulo' => 'Home',
        ]);
    }
}
