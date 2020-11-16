<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;


class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="contact")
     */
    public function index(SessionInterface $session)
    {
        $nomUsuario = $session->get('nombre_usuario');


        return $this->render('contact.html.twig', [
            'nombre_usuario' => 'Hola '.$nomUsuario,
            'titulo' => 'Contacto',
        ]);
    }
}
