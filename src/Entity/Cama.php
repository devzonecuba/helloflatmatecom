<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CamaRepository")
 */
class Cama
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
    private $tipocama;

       /**
     * @ORM\OneToMany(targetEntity="Habitaciones", mappedBy="Cama")
     */
    protected $Cama;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTipocama(): ?string
    {
        return $this->tipocama;
    }

    public function setTipocama(string $tipocama): self
    {
        $this->tipocama = $tipocama;

        return $this;
    }

    public function __toString()
    {
        return $this->tipocama;
    }
}
