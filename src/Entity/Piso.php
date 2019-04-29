<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PisoRepository")
 */
class Piso
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
    private $direccion;

    /**
     * @ORM\Column(type="integer")
     */
    private $precio;

    /**
     * @ORM\Column(type="integer")
     */
    private $canthabitaciones;

    /**
     * @ORM\Column(type="integer")
     */
    private $cantbannos;

    /**
     * @ORM\Column(type="boolean")
     */
    private $pisopatio;

    /**
     * @ORM\Column(type="boolean")
     */
    private $pisobalcon;

    /**
     * @ORM\Column(type="boolean")
     */
    private $chicas;

    /**
     * @ORM\Column(type="integer")
     */
    private $pisocanthuesped;

     /**
     *
     * @ORM\ManyToOne(targetEntity="Zona" , inversedBy="Piso")
     *
     */
    protected $Zona;

     /**
     *
     * @ORM\ManyToOne(targetEntity="Habitaciones" , inversedBy="Piso")
     *
     */
    protected $Habitaciones;

     /**
     *
     * @ORM\ManyToOne(targetEntity="Centrosalud" , inversedBy="Piso")
     *
     */
    protected $Centrosalud;

     /**
     *
     * @ORM\ManyToOne(targetEntity="Supermercado" , inversedBy="Piso")
     *
     */
    protected $Supermercado;

     /**
     *
     * @ORM\ManyToOne(targetEntity="Universidad" , inversedBy="Piso")
     *
     */
    protected $Universidad;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDireccion(): ?string
    {
        return $this->direccion;
    }

    public function setDireccion(string $direccion): self
    {
        $this->direccion = $direccion;

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

    public function getCanthabitaciones(): ?int
    {
        return $this->canthabitaciones;
    }

    public function setCanthabitaciones(int $canthabitaciones): self
    {
        $this->canthabitaciones = $canthabitaciones;

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

    public function getPisopatio(): ?bool
    {
        return $this->pisopatio;
    }

    public function setPisopatio(bool $pisopatio): self
    {
        $this->pisopatio = $pisopatio;

        return $this;
    }

    public function getPisobalcon(): ?bool
    {
        return $this->pisobalcon;
    }

    public function setPisobalcon(bool $pisobalcon): self
    {
        $this->pisobalcon = $pisobalcon;

        return $this;
    }

    public function getChicas(): ?bool
    {
        return $this->chicas;
    }

    public function setChicas(bool $chicas): self
    {
        $this->chicas = $chicas;

        return $this;
    }

    public function getPisocanthuesped(): ?int
    {
        return $this->pisocanthuesped;
    }

    public function setPisocanthuesped(int $pisocanthuesped): self
    {
        $this->pisocanthuesped = $pisocanthuesped;

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

    public function setHabitaciones( $habitaciones ) {
        $this->Habitaciones = $habitaciones;

        return $this;
    }

    /**
     * Get habitaciones
     *
     * @return App\Entity\Habitaciones
     */
    public function getHabitaciones() {
        return $this->Habitaciones;
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


}
