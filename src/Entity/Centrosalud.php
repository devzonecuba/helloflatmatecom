<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CentrosaludRepository")
 */
class Centrosalud
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
    private $nombrecentro;

      /**
     * @ORM\OneToMany(targetEntity="Piso", mappedBy="Centrosalud")
     */
    protected $Piso;
      /**
     * @ORM\OneToMany(targetEntity="Casavacacional", mappedBy="Centrosalud")
     */
    protected $Casavacacional;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombrecentro(): ?string
    {
        return $this->nombrecentro;
    }

    public function setNombrecentro(string $nombrecentro): self
    {
        $this->nombrecentro = $nombrecentro;

        return $this;
    }

    public function __toString()
    {
        return $this->nombrecentro;
    }
}
