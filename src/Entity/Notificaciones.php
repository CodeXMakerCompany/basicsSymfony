<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Notificaciones
 *
 * @ORM\Table(name="notificaciones")
 * @ORM\Entity
 */
class Notificaciones
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
     * @ORM\Column(name="nuevosUsuarios", type="integer", nullable=false)
     */
    private $nuevosusuarios;

    /**
     * @var int
     *
     * @ORM\Column(name="nuevasVentas", type="integer", nullable=false)
     */
    private $nuevasventas;

    /**
     * @var int
     *
     * @ORM\Column(name="nuevasVisitas", type="integer", nullable=false)
     */
    private $nuevasvisitas;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNuevosusuarios(): ?int
    {
        return $this->nuevosusuarios;
    }

    public function setNuevosusuarios(int $nuevosusuarios): self
    {
        $this->nuevosusuarios = $nuevosusuarios;

        return $this;
    }

    public function getNuevasventas(): ?int
    {
        return $this->nuevasventas;
    }

    public function setNuevasventas(int $nuevasventas): self
    {
        $this->nuevasventas = $nuevasventas;

        return $this;
    }

    public function getNuevasvisitas(): ?int
    {
        return $this->nuevasvisitas;
    }

    public function setNuevasvisitas(int $nuevasvisitas): self
    {
        $this->nuevasvisitas = $nuevasvisitas;

        return $this;
    }


}
