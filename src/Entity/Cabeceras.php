<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cabeceras
 *
 * @ORM\Table(name="cabeceras")
 * @ORM\Entity
 */
class Cabeceras
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
     * @ORM\Column(name="ruta", type="text", length=65535, nullable=false)
     */
    private $ruta;

    /**
     * @var string
     *
     * @ORM\Column(name="titulo", type="text", length=65535, nullable=false)
     */
    private $titulo;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="text", length=65535, nullable=false)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="palabrasClaves", type="text", length=65535, nullable=false)
     */
    private $palabrasclaves;

    /**
     * @var string
     *
     * @ORM\Column(name="portada", type="text", length=65535, nullable=false)
     */
    private $portada;

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

    public function getRuta(): ?string
    {
        return $this->ruta;
    }

    public function setRuta(string $ruta): self
    {
        $this->ruta = $ruta;

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

    public function getDescripcion(): ?string
    {
        return $this->descripcion;
    }

    public function setDescripcion(string $descripcion): self
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    public function getPalabrasclaves(): ?string
    {
        return $this->palabrasclaves;
    }

    public function setPalabrasclaves(string $palabrasclaves): self
    {
        $this->palabrasclaves = $palabrasclaves;

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
