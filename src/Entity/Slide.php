<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Slide
 *
 * @ORM\Table(name="slide")
 * @ORM\Entity
 */
class Slide
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
     * @ORM\Column(name="nombre", type="text", length=65535, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="imgFondo", type="text", length=65535, nullable=false)
     */
    private $imgfondo;

    /**
     * @var string
     *
     * @ORM\Column(name="tipoSlide", type="text", length=65535, nullable=false)
     */
    private $tiposlide;

    /**
     * @var string
     *
     * @ORM\Column(name="imgProducto", type="text", length=65535, nullable=false)
     */
    private $imgproducto;

    /**
     * @var string
     *
     * @ORM\Column(name="estiloImgProducto", type="text", length=65535, nullable=false)
     */
    private $estiloimgproducto;

    /**
     * @var string
     *
     * @ORM\Column(name="estiloTextoSlide", type="text", length=65535, nullable=false)
     */
    private $estilotextoslide;

    /**
     * @var string
     *
     * @ORM\Column(name="titulo1", type="text", length=65535, nullable=false)
     */
    private $titulo1;

    /**
     * @var string
     *
     * @ORM\Column(name="titulo2", type="text", length=65535, nullable=false)
     */
    private $titulo2;

    /**
     * @var string
     *
     * @ORM\Column(name="titulo3", type="text", length=65535, nullable=false)
     */
    private $titulo3;

    /**
     * @var string
     *
     * @ORM\Column(name="boton", type="text", length=65535, nullable=false)
     */
    private $boton;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="text", length=65535, nullable=false)
     */
    private $url;

    /**
     * @var int
     *
     * @ORM\Column(name="orden", type="integer", nullable=false)
     */
    private $orden;

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

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getImgfondo(): ?string
    {
        return $this->imgfondo;
    }

    public function setImgfondo(string $imgfondo): self
    {
        $this->imgfondo = $imgfondo;

        return $this;
    }

    public function getTiposlide(): ?string
    {
        return $this->tiposlide;
    }

    public function setTiposlide(string $tiposlide): self
    {
        $this->tiposlide = $tiposlide;

        return $this;
    }

    public function getImgproducto(): ?string
    {
        return $this->imgproducto;
    }

    public function setImgproducto(string $imgproducto): self
    {
        $this->imgproducto = $imgproducto;

        return $this;
    }

    public function getEstiloimgproducto(): ?string
    {
        return $this->estiloimgproducto;
    }

    public function setEstiloimgproducto(string $estiloimgproducto): self
    {
        $this->estiloimgproducto = $estiloimgproducto;

        return $this;
    }

    public function getEstilotextoslide(): ?string
    {
        return $this->estilotextoslide;
    }

    public function setEstilotextoslide(string $estilotextoslide): self
    {
        $this->estilotextoslide = $estilotextoslide;

        return $this;
    }

    public function getTitulo1(): ?string
    {
        return $this->titulo1;
    }

    public function setTitulo1(string $titulo1): self
    {
        $this->titulo1 = $titulo1;

        return $this;
    }

    public function getTitulo2(): ?string
    {
        return $this->titulo2;
    }

    public function setTitulo2(string $titulo2): self
    {
        $this->titulo2 = $titulo2;

        return $this;
    }

    public function getTitulo3(): ?string
    {
        return $this->titulo3;
    }

    public function setTitulo3(string $titulo3): self
    {
        $this->titulo3 = $titulo3;

        return $this;
    }

    public function getBoton(): ?string
    {
        return $this->boton;
    }

    public function setBoton(string $boton): self
    {
        $this->boton = $boton;

        return $this;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(string $url): self
    {
        $this->url = $url;

        return $this;
    }

    public function getOrden(): ?int
    {
        return $this->orden;
    }

    public function setOrden(int $orden): self
    {
        $this->orden = $orden;

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
