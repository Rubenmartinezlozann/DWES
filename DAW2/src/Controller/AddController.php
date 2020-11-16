<?php

namespace App\Controller;

use App\Entity\Categoria;
use App\Entity\Proyecto;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AddController extends AbstractController
{
    /**
     * @Route("/add", name="add")
     */
    public function index(EntityManagerInterface $entityManager)
    {
        $id=0;
        foreach ($this->proyectos as $key => $value) {
            $categoria = new Categoria();
            $categoria->setNombre($key);
            $entityManager->persist($categoria);
            foreach ($value as $proyecto) {
                $proyect = new Proyecto();
                $proyect->setNombre($proyecto['nombre']);
                $proyect->setDescripcion($proyecto['descripcion']);
                $proyect->setImagen($proyecto['img']);
                $entityManager->persist($proyect);
            }
            $id++;
        }
        $entityManager->flush();

        return $this->redirectToRoute('index');
    }

    private $proyectos = [
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
    ];
}
