<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Plantilla
 *
 * @ORM\Table(name="plantilla")
 * @ORM\Entity
 */
class Plantilla
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
     * @ORM\Column(name="barraSuperior", type="text", length=65535, nullable=false)
     */
    private $barrasuperior;

    /**
     * @var string
     *
     * @ORM\Column(name="textoSuperior", type="text", length=65535, nullable=false)
     */
    private $textosuperior;

    /**
     * @var string
     *
     * @ORM\Column(name="colorFondo", type="text", length=65535, nullable=false)
     */
    private $colorfondo;

    /**
     * @var string
     *
     * @ORM\Column(name="colorTexto", type="text", length=65535, nullable=false)
     */
    private $colortexto;

    /**
     * @var string
     *
     * @ORM\Column(name="logo", type="text", length=65535, nullable=false)
     */
    private $logo;

    /**
     * @var string
     *
     * @ORM\Column(name="icono", type="text", length=65535, nullable=false)
     */
    private $icono;

    /**
     * @var string
     *
     * @ORM\Column(name="redesSociales", type="text", length=65535, nullable=false)
     */
    private $redessociales;

    /**
     * @var string
     *
     * @ORM\Column(name="apiFacebook", type="text", length=65535, nullable=false)
     */
    private $apifacebook;

    /**
     * @var string
     *
     * @ORM\Column(name="pixelFacebook", type="text", length=65535, nullable=false)
     */
    private $pixelfacebook;

    /**
     * @var string
     *
     * @ORM\Column(name="googleAnalytics", type="text", length=65535, nullable=false)
     */
    private $googleanalytics;

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

    public function getBarrasuperior(): ?string
    {
        return $this->barrasuperior;
    }

    public function setBarrasuperior(string $barrasuperior): self
    {
        $this->barrasuperior = $barrasuperior;

        return $this;
    }

    public function getTextosuperior(): ?string
    {
        return $this->textosuperior;
    }

    public function setTextosuperior(string $textosuperior): self
    {
        $this->textosuperior = $textosuperior;

        return $this;
    }

    public function getColorfondo(): ?string
    {
        return $this->colorfondo;
    }

    public function setColorfondo(string $colorfondo): self
    {
        $this->colorfondo = $colorfondo;

        return $this;
    }

    public function getColortexto(): ?string
    {
        return $this->colortexto;
    }

    public function setColortexto(string $colortexto): self
    {
        $this->colortexto = $colortexto;

        return $this;
    }

    public function getLogo(): ?string
    {
        return $this->logo;
    }

    public function setLogo(string $logo): self
    {
        $this->logo = $logo;

        return $this;
    }

    public function getIcono(): ?string
    {
        return $this->icono;
    }

    public function setIcono(string $icono): self
    {
        $this->icono = $icono;

        return $this;
    }

    public function getRedessociales(): ?string
    {
        return $this->redessociales;
    }

    public function setRedessociales(string $redessociales): self
    {
        $this->redessociales = $redessociales;

        return $this;
    }

    public function getApifacebook(): ?string
    {
        return $this->apifacebook;
    }

    public function setApifacebook(string $apifacebook): self
    {
        $this->apifacebook = $apifacebook;

        return $this;
    }

    public function getPixelfacebook(): ?string
    {
        return $this->pixelfacebook;
    }

    public function setPixelfacebook(string $pixelfacebook): self
    {
        $this->pixelfacebook = $pixelfacebook;

        return $this;
    }

    public function getGoogleanalytics(): ?string
    {
        return $this->googleanalytics;
    }

    public function setGoogleanalytics(string $googleanalytics): self
    {
        $this->googleanalytics = $googleanalytics;

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
