<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Compras
 *
 * @ORM\Table(name="compras", indexes={@ORM\Index(name="pago", columns={"pago"}), @ORM\Index(name="id_usuario", columns={"id_usuario"}), @ORM\Index(name="envio", columns={"envio"}), @ORM\Index(name="id_producto", columns={"id_producto"})})
 * @ORM\Entity
 */
class Compras
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
     * @ORM\Column(name="envio", type="integer", nullable=false)
     */
    private $envio;

    /**
     * @var string
     *
     * @ORM\Column(name="metodo", type="text", length=65535, nullable=false)
     */
    private $metodo;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="text", length=65535, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="direccion", type="text", length=65535, nullable=false)
     */
    private $direccion;

    /**
     * @var string
     *
     * @ORM\Column(name="pais", type="text", length=65535, nullable=false)
     */
    private $pais;

    /**
     * @var float
     *
     * @ORM\Column(name="pago", type="float", precision=10, scale=0, nullable=false)
     */
    private $pago;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $fecha = 'CURRENT_TIMESTAMP';

    /**
     * @var \Usuarios
     *
     * @ORM\ManyToOne(targetEntity="Usuarios")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_usuario", referencedColumnName="id")
     * })
     */
    private $idUsuario;

    /**
     * @var \Productos
     *
     * @ORM\ManyToOne(targetEntity="Productos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_producto", referencedColumnName="id")
     * })
     */
    private $idProducto;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEnvio(): ?int
    {
        return $this->envio;
    }

    public function setEnvio(int $envio): self
    {
        $this->envio = $envio;

        return $this;
    }

    public function getMetodo(): ?string
    {
        return $this->metodo;
    }

    public function setMetodo(string $metodo): self
    {
        $this->metodo = $metodo;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
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

    public function getPais(): ?string
    {
        return $this->pais;
    }

    public function setPais(string $pais): self
    {
        $this->pais = $pais;

        return $this;
    }

    public function getPago(): ?float
    {
        return $this->pago;
    }

    public function setPago(float $pago): self
    {
        $this->pago = $pago;

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

    public function getIdUsuario(): ?Usuarios
    {
        return $this->idUsuario;
    }

    public function setIdUsuario(?Usuarios $idUsuario): self
    {
        $this->idUsuario = $idUsuario;

        return $this;
    }

    public function getIdProducto(): ?Productos
    {
        return $this->idProducto;
    }

    public function setIdProducto(?Productos $idProducto): self
    {
        $this->idProducto = $idProducto;

        return $this;
    }


}
