<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;


class CompanyController extends AbstractController
{
    /**
     * @Route("/nosotros", name="company")
     */
    public function index(SessionInterface $session)
    {
        $nomUsuario = $session->get('nombre_usuario');

        return $this->render('company.html.twig', [
            'nombre_usuario' => 'Hola '.$nomUsuario,
            'titulo' => 'Company',
        ]);
    }

}
