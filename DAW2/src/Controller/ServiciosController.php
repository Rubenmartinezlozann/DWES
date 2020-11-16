<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class ServiciosController extends AbstractController
{
    /**
     * @Route("/servicios", name="services")
     */
    public function index(SessionInterface $session)
    {
        $nomUsuario = $session->get('nombre_usuario');

        return $this->render('servicios.html.twig', [
            'nombre_usuario' => 'Hola '.$nomUsuario,
            'titulo' => 'Servicios',
        ]);
    }
}
