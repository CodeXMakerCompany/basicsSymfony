<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Deseos
 *
 * @ORM\Table(name="deseos", indexes={@ORM\Index(name="id_usuario", columns={"id_usuario"}), @ORM\Index(name="id_producto", columns={"id_producto"})})
 * @ORM\Entity
 */
class Deseos
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
     * @var int
     *
     * @ORM\Column(name="id_usuario", type="integer", nullable=false)
     */
    private $idUsuario;

    /**
     * @var int
     *
     * @ORM\Column(name="id_producto", type="integer", nullable=false)
     */
    private $idProducto;

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

    public function getIdUsuario(): ?int
    {
        return $this->idUsuario;
    }

    public function setIdUsuario(int $idUsuario): self
    {
        $this->idUsuario = $idUsuario;

        return $this;
    }

    public function getIdProducto(): ?int
    {
        return $this->idProducto;
    }

    public function setIdProducto(int $idProducto): self
    {
        $this->idProducto = $idProducto;

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
