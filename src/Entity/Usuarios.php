<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Usuarios
 *
 * @ORM\Table(name="usuarios")
 * @ORM\Entity
 */
class Usuarios
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
     * @ORM\Column(name="password", type="text", length=65535, nullable=false)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="text", length=65535, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="modo", type="text", length=65535, nullable=false)
     */
    private $modo;

    /**
     * @var string
     *
     * @ORM\Column(name="foto", type="text", length=65535, nullable=false)
     */
    private $foto;

    /**
     * @var int
     *
     * @ORM\Column(name="verificacion", type="integer", nullable=false)
     */
    private $verificacion;

    /**
     * @var string
     *
     * @ORM\Column(name="emailEncriptado", type="text", length=65535, nullable=false)
     */
    private $emailencriptado;

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

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

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

    public function getModo(): ?string
    {
        return $this->modo;
    }

    public function setModo(string $modo): self
    {
        $this->modo = $modo;

        return $this;
    }

    public function getFoto(): ?string
    {
        return $this->foto;
    }

    public function setFoto(string $foto): self
    {
        $this->foto = $foto;

        return $this;
    }

    public function getVerificacion(): ?int
    {
        return $this->verificacion;
    }

    public function setVerificacion(int $verificacion): self
    {
        $this->verificacion = $verificacion;

        return $this;
    }

    public function getEmailencriptado(): ?string
    {
        return $this->emailencriptado;
    }

    public function setEmailencriptado(string $emailencriptado): self
    {
        $this->emailencriptado = $emailencriptado;

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
