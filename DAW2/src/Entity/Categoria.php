<?php

namespace App\Entity;

use App\Repository\CategoriaRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CategoriaRepository::class)
 */
class Categoria
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nombre;

    /**
     * @ORM\OneToMany(targetEntity=Proyecto::class, mappedBy="categoria")
     */
    private $proyectos;

    public function __construct()
    {
        $this->proyectos = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * @return Collection|Proyecto[]
     */
    public function getProyectos(): Collection
    {
        return $this->proyectos;
    }

    public function addProyecto(Proyecto $proyecto): self
    {
        if (!$this->proyectos->contains($proyecto)) {
            $this->proyectos[] = $proyecto;
            $proyecto->setCategoria($this);
        }

        return $this;
    }

    public function removeProyecto(Proyecto $proyecto): self
    {
        if ($this->proyectos->contains($proyecto)) {
            $this->proyectos->removeElement($proyecto);
            // set the owning side to null (unless already changed)
            if ($proyecto->getCategoria() === $this) {
                $proyecto->setCategoria(null);
            }
        }

        return $this;
    }
}
