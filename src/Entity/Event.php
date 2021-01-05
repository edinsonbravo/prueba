<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Event
 *
 * @ORM\Table(name="events")
 * @ORM\Entity
 */
class Event
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
     * @var \DateTime|null
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=true)
     */
    private $createdAt;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=true)
     */
    private $updatedAt;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ip_address", type="string", length=255, nullable=true)
     */
    private $ipAddress;

    /**
     * @var string|null
     *
     * @ORM\Column(name="user_agent", type="string", length=255, nullable=true)
     */
    private $userAgent;

    /**
     * @var string|null
     *
     * @ORM\Column(name="code_country", type="string", length=2, nullable=true)
     */
    private $codeCountry;

    /**
     * @var string|null
     *
     * @ORM\Column(name="code_event", type="string", length=6, nullable=true)
     */
    private $codeEvent;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(?\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(?\DateTimeInterface $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    public function getIpAddress(): ?string
    {
        return $this->ipAddress;
    }

    public function setIpAddress(?string $ipAddress): self
    {
        $this->ipAddress = $ipAddress;

        return $this;
    }

    public function getUserAgent(): ?string
    {
        return $this->userAgent;
    }

    public function setUserAgent(?string $userAgent): self
    {
        $this->userAgent = $userAgent;

        return $this;
    }

    public function getCodeCountry(): ?string
    {
        return $this->codeCountry;
    }

    public function setCodeCountry(?string $codeCountry): self
    {
        $this->codeCountry = $codeCountry;

        return $this;
    }

    public function getCodeEvent(): ?string
    {
        return $this->codeEvent;
    }

    public function setCodeEvent(?string $codeEvent): self
    {
        $this->codeEvent = $codeEvent;

        return $this;
    }


}
