<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ServicioadicionalRepository")
 */
class Servicioadicional
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nombreservicio;

    /**
     * @ORM\Column(type="integer")
     */
    private $precio;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombreservicio(): ?string
    {
        return $this->nombreservicio;
    }

    public function setNombreservicio(string $nombreservicio): self
    {
        $this->nombreservicio = $nombreservicio;

        return $this;
    }

    public function getPrecio(): ?int
    {
        return $this->precio;
    }

    public function setPrecio(int $precio): self
    {
        $this->precio = $precio;

        return $this;
    }
}
