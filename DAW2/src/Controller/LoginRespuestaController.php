<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class LoginRespuestaController extends AbstractController
{
    /**
     * @Route("/login/respuesta", name="login_respuesta")
     */
    public function index(Request $request, SessionInterface $session)
    {
        $nombreUsuario = $request->request->get('nombre');
        $session->set('nombre_usuario',$nombreUsuario);
        
        return $this->redirectToRoute('index');
    }
}
