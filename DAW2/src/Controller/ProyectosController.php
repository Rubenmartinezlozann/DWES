<?php

namespace App\Controller;

use App\Entity\Categoria;
use App\Entity\Proyecto;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;


class ProyectosController extends AbstractController
{
    /**
     * @Route("/proyectos/{categoria<categoria1|categoria2|categoria3>?categoria1}/{currentPage?1}", name="proyectos")
     */
    public function index(SessionInterface $session, $currentPage, $categoria)
    {
        $categoria = $this->getDoctrine()->getRepository(Categoria::class)->findOneBy(['nombre' => $categoria]);

        $proyectos = $categoria->getProyectos();

        $nomUsuario = $session->get('nombre_usuario');
        return $this->render('proyectos1.html.twig', [
            'nombre_usuario' => 'Hola ' . $nomUsuario,
            'titulo' => 'Proyectos',
            'data' => $proyectos,
            'currentPage' => $currentPage,
            'itemsPerPage' => 4,
        ]);
    }
    /*private $proyectos = [
        'categoria1' => [
            [
                'img' => 'services-1.jpg',
                'nombre' => 'Proyecto 1',
                'descripcion' => 'Proyecto 1',
                'id' => 1,
            ],
            [
                'img' => 'services-2.jpg',
                'nombre' => 'Proyecto 2',
                'descripcion' => 'Proyecto 2',
                'id' => 2,
            ],
            [
                'img' => 'services-3.jpg',
                'nombre' => 'Proyecto 3',
                'descripcion' => 'Proyecto 3',
                'id' => 3,
            ],
            [
                'img' => 'services-4.jpg',
                'nombre' => 'Proyecto 4',
                'descripcion' => 'Proyecto 4',
                'id' => 4,
            ],
            [
                'img' => 'services-1.jpg',
                'nombre' => 'Proyecto 5',
                'descripcion' => 'Proyecto 5',
                'id' => 5,
            ],
        ],
        'categoria2' => [
            [
                'img' => 'services-2.jpg',
                'nombre' => 'Proyecto 6',
                'descripcion' => 'Proyecto 6',
                'id' => 6,
            ],
            [
                'img' => 'services-3.jpg',
                'nombre' => 'Proyecto 7',
                'descripcion' => 'Proyecto 7',
                'id' => 7,
            ],
            [
                'img' => 'services-4.jpg',
                'nombre' => 'Proyecto 8',
                'descripcion' => 'Proyecto 8',
                'id' => 8,
            ],
            [
                'img' => 'services-1.jpg',
                'nombre' => 'Proyecto 9',
                'descripcion' => 'Proyecto 9',
                'id' => 9,
            ],
            [
                'img' => 'services-2.jpg',
                'nombre' => 'Proyecto 10',
                'descripcion' => 'Proyecto 10',
                'id' => 10,
            ],
            [
                'img' => 'services-3.jpgg',
                'nombre' => 'Proyecto 11',
                'descripcion' => 'Proyecto 11',
                'id' => 11,
            ],
        ],
        'categoria3' => [
            [
                'img' => 'services-1.jpg',
                'nombre' => 'Proyecto 9',
                'descripcion' => 'Proyecto 9',
                'id' => 9,
            ],
            [
                'img' => 'services-2.jpg',
                'nombre' => 'Proyecto 10',
                'descripcion' => 'Proyecto 10',
                'id' => 10,
            ],
            [
                'img' => 'services-3.jpgg',
                'nombre' => 'Proyecto 11',
                'descripcion' => 'Proyecto 11',
                'id' => 11,
            ],
            [
                'img' => 'services-2.jpg',
                'nombre' => 'Proyecto 6',
                'descripcion' => 'Proyecto 6',
                'id' => 6,
            ],
            [
                'img' => 'services-3.jpg',
                'nombre' => 'Proyecto 7',
                'descripcion' => 'Proyecto 7',
                'id' => 7,
            ],
            [
                'img' => 'services-4.jpg',
                'nombre' => 'Proyecto 8',
                'descripcion' => 'Proyecto 8',
                'id' => 8,
            ],
        ]
    ];*/
}
