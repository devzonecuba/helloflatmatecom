<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ServiciosRepository")
 */
class Servicios
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
    private $servicio;

      /**
     * @ORM\OneToMany(targetEntity="Habitaciones", mappedBy="Servicios")
     */
    protected $Servicios;

      /**
     * @ORM\OneToMany(targetEntity="Habitaciones", mappedBy="Servicios")
     */
    protected $Habitaciones;
      /**
     * @ORM\OneToMany(targetEntity="Casavacacional", mappedBy="Servicios")
     */
    protected $Casavacacional;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getServicio(): ?string
    {
        return $this->servicio;
    }

    public function setServicio(string $servicio): self
    {
        $this->servicio = $servicio;

        return $this;
    }

    public function __toString()
    {
        return $this->servicio;
    }

    
}
