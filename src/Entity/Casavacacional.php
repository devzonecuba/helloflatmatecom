<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CasavacacionalRepository")
 */
class Casavacacional
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
    private $casadireccion;

     /**
     * @ORM\Column(type="string", length=255)
     */
    private $nombrepromocion;

    /**
     * @ORM\Column(type="integer")
     */
    private $casaprecio;

    /**
     * @ORM\Column(type="integer")
     */
    private $cantbannos;

    /**
     * @ORM\Column(type="integer")
     */
    private $canthabitaciones;

    /**
     * @ORM\Column(type="boolean")
     */
    private $patio;

    /**
     * @ORM\Column(type="boolean")
     */
    private $balcon;

    /**
     * @ORM\Column(type="integer")
     */
    private $canthuesped;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $descripcion;

       /**
     *
     * @ORM\ManyToOne(targetEntity="Zona" , inversedBy="Casavacacional")
     *
     */
    protected $Zona;

    /**
     *
     * @ORM\ManyToOne(targetEntity="Centrosalud" , inversedBy="Casavacacional")
     *
     */
    protected $Centrosalud;

     /**
     *
     * @ORM\ManyToOne(targetEntity="Supermercado" , inversedBy="Casavacacional")
     *
     */
    protected $Supermercado;

     /**
     *
     * @ORM\ManyToOne(targetEntity="Universidad" , inversedBy="Casavacacional")
     *
     */
    protected $Universidad;

      /**
     *
     * @ORM\ManyToOne(targetEntity="Servicios" , inversedBy="Casavacacional")
     *
     */
    protected $Servicios;

         /**
     * @ORM\OneToMany(targetEntity="Reserva", mappedBy="Casavacacional")
     */
    protected $Reserva;

   


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCasadireccion(): ?string
    {
        return $this->casadireccion;
    }

    public function setCasadireccion(string $casadireccion): self
    {
        $this->casadireccion = $casadireccion;

        return $this;
    }

    public function getCasaprecio(): ?int
    {
        return $this->casaprecio;
    }

    public function setCasaprecio(int $casaprecio): self
    {
        $this->casaprecio = $casaprecio;

        return $this;
    }

    public function getCantbannos(): ?int
    {
        return $this->cantbannos;
    }

    public function setCantbannos(int $cantbannos): self
    {
        $this->cantbannos = $cantbannos;

        return $this;
    }

    public function getCanthabitaciones(): ?int
    {
        return $this->canthabitaciones;
    }

    public function setCanthabitaciones(int $canthabitaciones): self
    {
        $this->canthabitaciones = $canthabitaciones;

        return $this;
    }

    public function getPatio(): ?bool
    {
        return $this->patio;
    }

    public function setPatio(bool $patio): self
    {
        $this->patio = $patio;

        return $this;
    }

    public function getBalcon(): ?bool
    {
        return $this->balcon;
    }

    public function setBalcon(bool $balcon): self
    {
        $this->balcon = $balcon;

        return $this;
    }

    public function getCanthuesped(): ?int
    {
        return $this->canthuesped;
    }

    public function setCanthuesped(int $canthuesped): self
    {
        $this->canthuesped = $canthuesped;

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

    public function setZona( $zona ) {
        $this->Zona = $zona;

        return $this;
    }

    /**
     * Get zona
     *
     * @return App\Entity\Zona
     */
    public function getZona() {
        return $this->Zona;
    }

    public function setSupermercado( $supermercado ) {
        $this->Supermercado = $supermercado;

        return $this;
    }

    /**
     * Get Supermercado
     *
     * @return App\Entity\Supermercado
     */
    public function getSupermercado() {
        return $this->Supermercado;
    }

    public function setCentrosalud( $centrosalud ) {
        $this->Centrosalud = $centrosalud;

        return $this;
    }

    /**
     * Get Centrosalud
     *
     * @return App\Entity\Centrosalud
     */
    public function getCentrosalud() {
        return $this->Centrosalud;
    }

    public function setUniversidad( $universidad ) {
        $this->Universidad = $universidad;

        return $this;
    }

    /**
     * Get Universidad
     *
     * @return App\Entity\Universidad
     */
    public function getUniversidad() {
        return $this->Universidad;
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
