<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;


class ContactoRespuestaController extends AbstractController
{
    /**
     * @Route("/contacto/respuesta", name="contacto_respuesta")
     */
    public function index(SessionInterface $session ,Request $request)
    {
        $nomUsuario = $session->get('nombre_usuario');
        $nombreContacto = $request->request->get('contact_name');
        $emailContacto = $request->request->get('contact_email');
        $mensajeContacto = $request->request->get('contact_message');

        return $this->render('contacto_respuesta.html.twig', [
            'nombre_usuario' => 'Hola '.$nomUsuario,
            'nombre_contacto' => $nombreContacto,
            'email_contacto' => $emailContacto,
            'mensaje_contacto' => $mensajeContacto,
            'titulo' => 'Contact',
        ]);
    }
}
