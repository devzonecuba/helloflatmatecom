<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ZonaRepository")
 */
class Zona
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
    private $nombrezona;

      /**
     * @ORM\OneToMany(targetEntity="Piso", mappedBy="Zona")
     */
    protected $Piso;
      /**
     * @ORM\OneToMany(targetEntity="Casavacacional", mappedBy="Zona")
     */
    protected $Casavacacional;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombrezona(): ?string
    {
        return $this->nombrezona;
    }

    public function setNombrezona(string $nombrezona): self
    {
        $this->nombrezona = $nombrezona;

        return $this;
    }

    public function __toString()
    {
        return $this->nombrezona;
    }

  
}
