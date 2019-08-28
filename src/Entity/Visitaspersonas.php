<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Visitaspersonas
 *
 * @ORM\Table(name="visitaspersonas")
 * @ORM\Entity
 */
class Visitaspersonas
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
     * @ORM\Column(name="ip", type="text", length=65535, nullable=false)
     */
    private $ip;

    /**
     * @var string
     *
     * @ORM\Column(name="pais", type="text", length=65535, nullable=false)
     */
    private $pais;

    /**
     * @var int
     *
     * @ORM\Column(name="visitas", type="integer", nullable=false)
     */
    private $visitas;

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

    public function getIp(): ?string
    {
        return $this->ip;
    }

    public function setIp(string $ip): self
    {
        $this->ip = $ip;

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

    public function getVisitas(): ?int
    {
        return $this->visitas;
    }

    public function setVisitas(int $visitas): self
    {
        $this->visitas = $visitas;

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
