<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comercio
 *
 * @ORM\Table(name="comercio")
 * @ORM\Entity
 */
class Comercio
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
     * @var float
     *
     * @ORM\Column(name="impuesto", type="float", precision=10, scale=0, nullable=false)
     */
    private $impuesto;

    /**
     * @var float
     *
     * @ORM\Column(name="envioNacional", type="float", precision=10, scale=0, nullable=false)
     */
    private $envionacional;

    /**
     * @var float
     *
     * @ORM\Column(name="envioInternacional", type="float", precision=10, scale=0, nullable=false)
     */
    private $enviointernacional;

    /**
     * @var float
     *
     * @ORM\Column(name="tasaMinimaNal", type="float", precision=10, scale=0, nullable=false)
     */
    private $tasaminimanal;

    /**
     * @var float
     *
     * @ORM\Column(name="tasaMinimaInt", type="float", precision=10, scale=0, nullable=false)
     */
    private $tasaminimaint;

    /**
     * @var string
     *
     * @ORM\Column(name="pais", type="text", length=65535, nullable=false)
     */
    private $pais;

    /**
     * @var string
     *
     * @ORM\Column(name="modoPaypal", type="text", length=65535, nullable=false)
     */
    private $modopaypal;

    /**
     * @var string
     *
     * @ORM\Column(name="clienteIdPaypal", type="text", length=65535, nullable=false)
     */
    private $clienteidpaypal;

    /**
     * @var string
     *
     * @ORM\Column(name="llaveSecretaPaypal", type="text", length=65535, nullable=false)
     */
    private $llavesecretapaypal;

    /**
     * @var string
     *
     * @ORM\Column(name="modoPayu", type="text", length=65535, nullable=false)
     */
    private $modopayu;

    /**
     * @var int
     *
     * @ORM\Column(name="merchantIdPayu", type="integer", nullable=false)
     */
    private $merchantidpayu;

    /**
     * @var int
     *
     * @ORM\Column(name="accountIdPayu", type="integer", nullable=false)
     */
    private $accountidpayu;

    /**
     * @var string
     *
     * @ORM\Column(name="apiKeyPayu", type="text", length=65535, nullable=false)
     */
    private $apikeypayu;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getImpuesto(): ?float
    {
        return $this->impuesto;
    }

    public function setImpuesto(float $impuesto): self
    {
        $this->impuesto = $impuesto;

        return $this;
    }

    public function getEnvionacional(): ?float
    {
        return $this->envionacional;
    }

    public function setEnvionacional(float $envionacional): self
    {
        $this->envionacional = $envionacional;

        return $this;
    }

    public function getEnviointernacional(): ?float
    {
        return $this->enviointernacional;
    }

    public function setEnviointernacional(float $enviointernacional): self
    {
        $this->enviointernacional = $enviointernacional;

        return $this;
    }

    public function getTasaminimanal(): ?float
    {
        return $this->tasaminimanal;
    }

    public function setTasaminimanal(float $tasaminimanal): self
    {
        $this->tasaminimanal = $tasaminimanal;

        return $this;
    }

    public function getTasaminimaint(): ?float
    {
        return $this->tasaminimaint;
    }

    public function setTasaminimaint(float $tasaminimaint): self
    {
        $this->tasaminimaint = $tasaminimaint;

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

    public function getModopaypal(): ?string
    {
        return $this->modopaypal;
    }

    public function setModopaypal(string $modopaypal): self
    {
        $this->modopaypal = $modopaypal;

        return $this;
    }

    public function getClienteidpaypal(): ?string
    {
        return $this->clienteidpaypal;
    }

    public function setClienteidpaypal(string $clienteidpaypal): self
    {
        $this->clienteidpaypal = $clienteidpaypal;

        return $this;
    }

    public function getLlavesecretapaypal(): ?string
    {
        return $this->llavesecretapaypal;
    }

    public function setLlavesecretapaypal(string $llavesecretapaypal): self
    {
        $this->llavesecretapaypal = $llavesecretapaypal;

        return $this;
    }

    public function getModopayu(): ?string
    {
        return $this->modopayu;
    }

    public function setModopayu(string $modopayu): self
    {
        $this->modopayu = $modopayu;

        return $this;
    }

    public function getMerchantidpayu(): ?int
    {
        return $this->merchantidpayu;
    }

    public function setMerchantidpayu(int $merchantidpayu): self
    {
        $this->merchantidpayu = $merchantidpayu;

        return $this;
    }

    public function getAccountidpayu(): ?int
    {
        return $this->accountidpayu;
    }

    public function setAccountidpayu(int $accountidpayu): self
    {
        $this->accountidpayu = $accountidpayu;

        return $this;
    }

    public function getApikeypayu(): ?string
    {
        return $this->apikeypayu;
    }

    public function setApikeypayu(string $apikeypayu): self
    {
        $this->apikeypayu = $apikeypayu;

        return $this;
    }


}
