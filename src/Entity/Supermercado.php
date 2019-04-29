<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SupermercadoRepository")
 */
class Supermercado
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
    private $nombresuper;

      /**
     * @ORM\OneToMany(targetEntity="Piso", mappedBy="Supermercado")
     */
    protected $Piso;
      /**
     * @ORM\OneToMany(targetEntity="Casavacacional", mappedBy="Supermercado")
     */
    protected $Casavacacional;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombresuper(): ?string
    {
        return $this->nombresuper;
    }

    public function setNombresuper(string $nombresuper): self
    {
        $this->nombresuper = $nombresuper;

        return $this;
    }

    public function __toString()
    {
        return $this->nombresuper;
    }
}
