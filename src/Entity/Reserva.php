<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ReservaRepository")
 */
class Reserva
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="date")
     */
    private $fechainicio;

    /**
     * @ORM\Column(type="date")
     */
    private $fechafin;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $pasaporte;

    /**
     * @ORM\Column(type="boolean")
     */
    private $sexo;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $telefono;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $descripcion;

      /**
     *
     * @ORM\ManyToOne(targetEntity="Cliente" , inversedBy="Reserva")
     *
     */
    protected $Cliente;

      /**
     *
     * @ORM\ManyToOne(targetEntity="Casavacacional" , inversedBy="Reserva")
     *
     */
    protected $Casavacacional;

      /**
     *
     * @ORM\ManyToOne(targetEntity="Habitaciones" , inversedBy="Reserva")
     *
     */
    protected $Habitaciones;

    


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFechainicio(): ?\DateTimeInterface
    {
        return $this->fechainicio;
    }

    public function setFechainicio(\DateTimeInterface $fechainicio): self
    {
        $this->fechainicio = $fechainicio;

        return $this;
    }

    public function getFechafin(): ?\DateTimeInterface
    {
        return $this->fechafin;
    }

    public function setFechafin(\DateTimeInterface $fechafin): self
    {
        $this->fechafin = $fechafin;

        return $this;
    }

    public function getPasaporte(): ?string
    {
        return $this->pasaporte;
    }

    public function setPasaporte(string $pasaporte): self
    {
        $this->pasaporte = $pasaporte;

        return $this;
    }

    public function getSexo(): ?bool
    {
        return $this->sexo;
    }

    public function setSexo(bool $sexo): self
    {
        $this->sexo = $sexo;

        return $this;
    }

    public function getTelefono(): ?string
    {
        return $this->telefono;
    }

    public function setTelefono(string $telefono): self
    {
        $this->telefono = $telefono;

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

    public function setCliente( $cliente ) {
        $this->Cliente = $cliente;

        return $this;
    }

    /**
     * Get Cliente
     *
     * @return App\Entity\Cliente
     */
    public function getCliente() {
        return $this->Cliente;
    }

    public function setCasavacacional( $casavacacional ) {
        $this->Casavacacional = $casavacacional;

        return $this;
    }

    /**
     * Get Casavacacional
     *
     * @return App\Entity\Casavacacional
     */
    public function getCasavacacional() {
        return $this->Casavacacional;
    }

    public function setHabitaciones( $habitaciones ) {
        $this->Habitaciones = $habitaciones;

        return $this;
    }

    /**
     * Get Habitaciones
     *
     * @return App\Entity\Habitaciones
     */
    public function getHabitaciones() {
        return $this->Habitaciones;
    }

    

}
