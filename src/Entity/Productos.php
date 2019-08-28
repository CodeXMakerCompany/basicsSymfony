<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Productos
 *
 * @ORM\Table(name="productos", indexes={@ORM\Index(name="id_categoria", columns={"id_categoria"}), @ORM\Index(name="id_subcategoria", columns={"id_subcategoria"})})
 * @ORM\Entity
 */
class Productos
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
     * @ORM\Column(name="tipo", type="text", length=65535, nullable=false)
     */
    private $tipo;

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
     * @var string
     *
     * @ORM\Column(name="titulo", type="text", length=65535, nullable=false)
     */
    private $titulo;

    /**
     * @var string
     *
     * @ORM\Column(name="titular", type="text", length=65535, nullable=false)
     */
    private $titular;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="text", length=65535, nullable=false)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="multimedia", type="text", length=65535, nullable=false)
     */
    private $multimedia;

    /**
     * @var string
     *
     * @ORM\Column(name="detalles", type="text", length=65535, nullable=false)
     */
    private $detalles;

    /**
     * @var float
     *
     * @ORM\Column(name="precio", type="float", precision=10, scale=0, nullable=false)
     */
    private $precio;

    /**
     * @var string
     *
     * @ORM\Column(name="portada", type="text", length=65535, nullable=false)
     */
    private $portada;

    /**
     * @var int
     *
     * @ORM\Column(name="vistas", type="integer", nullable=false)
     */
    private $vistas;

    /**
     * @var int
     *
     * @ORM\Column(name="ventas", type="integer", nullable=false)
     */
    private $ventas;

    /**
     * @var int
     *
     * @ORM\Column(name="vistasGratis", type="integer", nullable=false)
     */
    private $vistasgratis;

    /**
     * @var int
     *
     * @ORM\Column(name="ventasGratis", type="integer", nullable=false)
     */
    private $ventasgratis;

    /**
     * @var int
     *
     * @ORM\Column(name="ofertadoPorCategoria", type="integer", nullable=false)
     */
    private $ofertadoporcategoria;

    /**
     * @var int
     *
     * @ORM\Column(name="ofertadoPorSubCategoria", type="integer", nullable=false)
     */
    private $ofertadoporsubcategoria;

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
     * @var float
     *
     * @ORM\Column(name="peso", type="float", precision=10, scale=0, nullable=false)
     */
    private $peso;

    /**
     * @var float
     *
     * @ORM\Column(name="entrega", type="float", precision=10, scale=0, nullable=false)
     */
    private $entrega;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $fecha = 'CURRENT_TIMESTAMP';

    /**
     * @var \Categorias
     *
     * @ORM\ManyToOne(targetEntity="Categorias")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_categoria", referencedColumnName="id")
     * })
     */
    private $idCategoria;

    /**
     * @var \Subcategorias
     *
     * @ORM\ManyToOne(targetEntity="Subcategorias")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_subcategoria", referencedColumnName="id")
     * })
     */
    private $idSubcategoria;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTipo(): ?string
    {
        return $this->tipo;
    }

    public function setTipo(string $tipo): self
    {
        $this->tipo = $tipo;

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

    public function getTitulo(): ?string
    {
        return $this->titulo;
    }

    public function setTitulo(string $titulo): self
    {
        $this->titulo = $titulo;

        return $this;
    }

    public function getTitular(): ?string
    {
        return $this->titular;
    }

    public function setTitular(string $titular): self
    {
        $this->titular = $titular;

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

    public function getMultimedia(): ?string
    {
        return $this->multimedia;
    }

    public function setMultimedia(string $multimedia): self
    {
        $this->multimedia = $multimedia;

        return $this;
    }

    public function getDetalles(): ?string
    {
        return $this->detalles;
    }

    public function setDetalles(string $detalles): self
    {
        $this->detalles = $detalles;

        return $this;
    }

    public function getPrecio(): ?float
    {
        return $this->precio;
    }

    public function setPrecio(float $precio): self
    {
        $this->precio = $precio;

        return $this;
    }

    public function getPortada(): ?string
    {
        return $this->portada;
    }

    public function setPortada(string $portada): self
    {
        $this->portada = $portada;

        return $this;
    }

    public function getVistas(): ?int
    {
        return $this->vistas;
    }

    public function setVistas(int $vistas): self
    {
        $this->vistas = $vistas;

        return $this;
    }

    public function getVentas(): ?int
    {
        return $this->ventas;
    }

    public function setVentas(int $ventas): self
    {
        $this->ventas = $ventas;

        return $this;
    }

    public function getVistasgratis(): ?int
    {
        return $this->vistasgratis;
    }

    public function setVistasgratis(int $vistasgratis): self
    {
        $this->vistasgratis = $vistasgratis;

        return $this;
    }

    public function getVentasgratis(): ?int
    {
        return $this->ventasgratis;
    }

    public function setVentasgratis(int $ventasgratis): self
    {
        $this->ventasgratis = $ventasgratis;

        return $this;
    }

    public function getOfertadoporcategoria(): ?int
    {
        return $this->ofertadoporcategoria;
    }

    public function setOfertadoporcategoria(int $ofertadoporcategoria): self
    {
        $this->ofertadoporcategoria = $ofertadoporcategoria;

        return $this;
    }

    public function getOfertadoporsubcategoria(): ?int
    {
        return $this->ofertadoporsubcategoria;
    }

    public function setOfertadoporsubcategoria(int $ofertadoporsubcategoria): self
    {
        $this->ofertadoporsubcategoria = $ofertadoporsubcategoria;

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

    public function getPeso(): ?float
    {
        return $this->peso;
    }

    public function setPeso(float $peso): self
    {
        $this->peso = $peso;

        return $this;
    }

    public function getEntrega(): ?float
    {
        return $this->entrega;
    }

    public function setEntrega(float $entrega): self
    {
        $this->entrega = $entrega;

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

    public function getIdCategoria(): ?Categorias
    {
        return $this->idCategoria;
    }

    public function setIdCategoria(?Categorias $idCategoria): self
    {
        $this->idCategoria = $idCategoria;

        return $this;
    }

    public function getIdSubcategoria(): ?Subcategorias
    {
        return $this->idSubcategoria;
    }

    public function setIdSubcategoria(?Subcategorias $idSubcategoria): self
    {
        $this->idSubcategoria = $idSubcategoria;

        return $this;
    }


}
