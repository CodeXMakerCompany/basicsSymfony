<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categorias
 *
 * @ORM\Table(name="categorias")
 * @ORM\Entity
 */
class Categorias
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="categoria", type="text", length=65535, nullable=false)
     */
    private $categoria;

    /**
     * @var string
     *
     * @ORM\Column(name="ruta", type="text", length=65535, nullable=false)
     */
    private $ruta;

    /**
     * @var int
     *
     * @ORM\Column(name="estado", type="integer", nullable=false)
     */
    private $estado;

    /**
     * @var int
     *
     * @ORM\Column(name="oferta", type="integer", nullable=false)
     */
    private $oferta;

    /**
     * @var float
     *
     * @ORM\Column(name="precioOferta", type="float", precision=10, scale=0, nullable=false)
     */
    private $preciooferta;

    /**
     * @var int
     *
     * @ORM\Column(name="descuentoOferta", type="integer", nullable=false)
     */
    private $descuentooferta;

    /**
     * @var string
     *
     * @ORM\Column(name="imgOferta", type="text", length=65535, nullable=false)
     */
    private $imgoferta;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="finOferta", type="datetime", nullable=false)
     */
    private $finoferta;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $fecha = 'CURRENT_TIMESTAMP';

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCategoria(): ?string
    {
        return $this->categoria;
    }

    public function setCategoria(string $categoria): self
    {
        $this->categoria = $categoria;

        return $this;
    }

    public function getRuta(): ?string
    {
        return $this->ruta;
    }

    public function setRuta(string $ruta): self
    {
        $this->ruta = $ruta;

        return $this;
    }

    public function getEstado(): ?int
    {
        return $this->estado;
    }

    public function setEstado(int $estado): self
    {
        $this->estado = $estado;

        return $this;
    }

    public function getOferta(): ?int
    {
        return $this->oferta;
    }

    public function setOferta(int $oferta): self
    {
        $this->oferta = $oferta;

        return $this;
    }

    public function getPreciooferta(): ?float
    {
        return $this->preciooferta;
    }

    public function setPreciooferta(float $preciooferta): self
    {
        $this->preciooferta = $preciooferta;

        return $this;
    }

    public function getDescuentooferta(): ?int
    {
        return $this->descuentooferta;
    }

    public function setDescuentooferta(int $descuentooferta): self
    {
        $this->descuentooferta = $descuentooferta;

        return $this;
    }

    public function getImgoferta(): ?string
    {
        return $this->imgoferta;
    }

    public function setImgoferta(string $imgoferta): self
    {
        $this->imgoferta = $imgoferta;

        return $this;
    }

    public function getFinoferta(): ?\DateTimeInterface
    {
        return $this->finoferta;
    }

    public function setFinoferta(\DateTimeInterface $finoferta): self
    {
        $this->finoferta = $finoferta;

        return $this;
    }

    public function getFecha(): ?\DateTimeInterface
    {
        return $this->fecha;
    }

    public function setFecha(\DateTimeInterface $fecha): self
    {
        $this->fecha = $fecha;

        return $this;
    }


}
