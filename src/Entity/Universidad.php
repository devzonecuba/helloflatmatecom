<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UniversidadRepository")
 */
class Universidad
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
    private $nombreuniversidad;

      /**
     * @ORM\OneToMany(targetEntity="Piso", mappedBy="Universidad")
     */
    protected $Piso;
      /**
     * @ORM\OneToMany(targetEntity="Casavacacional", mappedBy="Universidad")
     */
    protected $Casavacacional;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombreuniversidad(): ?string
    {
        return $this->nombreuniversidad;
    }

    public function setNombreuniversidad(string $nombreuniversidad): self
    {
        $this->nombreuniversidad = $nombreuniversidad;

        return $this;
    }

    public function __toString()
    {
        return $this->nombreuniversidad;
    }
}
