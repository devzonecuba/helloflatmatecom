<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\HabitacionesRepository")
 */
class Habitaciones
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

     /**
     * @ORM\Column(type="integer")
     */
    private $cantcamas;

     /**
     * @ORM\Column(type="string", length=255)
     */
    private $nombrepromocion;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $descripcion;

    /**
     * @ORM\Column(type="boolean")
     */
    private $disponible;

     /**
     * @ORM\OneToMany(targetEntity="Piso", mappedBy="Habitaciones")
     */
    protected $Piso;

     /**
     *
     * @ORM\ManyToOne(targetEntity="Cama" , inversedBy="Habitaciones")
     *
     */
    protected $Cama;

      /**
     *
     * @ORM\ManyToOne(targetEntity="Servicios" , inversedBy="Habitaciones")
     *
     */
    protected $Servicios;

        /**
     * @ORM\OneToMany(targetEntity="Reserva", mappedBy="Habitaciones")
     */
    protected $Reserva;

    

    public function getId(): ?int
    {
        return $this->id;
    }

 
    public function getCantcamas(): ?int
    {
        return $this->cantcamas;
    }

    public function setCantcamas(int $cantcamas): self
    {
        $this->cantcamas = $cantcamas;

        return $this;
    }

    public function getDescripcion(): ?string
    {
        return $this->descripcion;
    }

    public function setDescripcion(string $descripcion): self
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    public function getNombrepromocion(): ?string
    {
        return $this->nombrepromocion;
    }

    public function setNombrepromocion(string $nombrepromocion): self
    {
        $this->nombrepromocion = $nombrepromocion;

        return $this;
    }

    public function getDisponible(): ?bool
    {
        return $this->disponible;
    }

    public function setDisponible(bool $disponible): self
    {
        $this->disponible = $disponible;

        return $this;
    }

    public function setCama( $cama ) {
        $this->Cama = $cama;

        return $this;
    }

    /**
     * Get Cama
     *
     * @return App\Entity\Cama
     */
    public function getCama() {
        return $this->Cama;
    }

    public function setServicios( $servicios ) {
        $this->Servicios = $servicios;

        return $this;
    }

    /**
     * Get Servicios
     *
     * @return App\Entity\Servicios
     */
    public function getServicios() {
        return $this->Servicios;
    }
    public function __toString()
    {
        return $this->nombrepromocion;
    }

}
