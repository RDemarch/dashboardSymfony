<?php

namespace App\Entity;

use App\Repository\CrudRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CrudRepository::class)
 */
class Crud
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text")
     */
    private $name;

    /**
     * @ORM\Column(type="text")
     */
    private $credential;

    /**
     * @ORM\Column(type="text")
     */
    private $category;

    /**
     * @ORM\Column(type="date")
     */
    private $buyingDate;

    /**
     * @ORM\Column(type="date")
     */
    private $endWarantyDate;

    /**
     * @ORM\Column(type="text")
     */
    private $maintenanceAdvice;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $userManual;

    /**
     * @ORM\Column(type="integer")
     */
    private $price;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getCredential(): ?string
    {
        return $this->credential;
    }

    public function setCredential(string $credential): self
    {
        $this->credential = $credential;

        return $this;
    }

    public function getCategory(): ?string
    {
        return $this->category;
    }

    public function setCategory(string $category): self
    {
        $this->category = $category;

        return $this;
    }

    public function getBuyingDate(): ?\DateTimeInterface
    {
        return $this->buyingDate;
    }

    public function setBuyingDate(\DateTimeInterface $buyingDate): self
    {
        $this->buyingDate = $buyingDate;

        return $this;
    }

    public function getEndWarantyDate(): ?\DateTimeInterface
    {
        return $this->endWarantyDate;
    }

    public function setEndWarantyDate(\DateTimeInterface $endWarantyDate): self
    {
        $this->endWarantyDate = $endWarantyDate;

        return $this;
    }

    public function getMaintenanceAdvice(): ?string
    {
        return $this->maintenanceAdvice;
    }

    public function setMaintenanceAdvice(string $maintenanceAdvice): self
    {
        $this->maintenanceAdvice = $maintenanceAdvice;

        return $this;
    }

    public function getUserManual(): ?string
    {
        return $this->userManual;
    }

    public function setUserManual(?string $userManual): self
    {
        $this->userManual = $userManual;

        return $this;
    }

    public function getPrice(): ?int
    {
        return $this->price;
    }

    public function setPrice(int $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function buyingDateToString(): ?string
    {
        if ($this->buyingDate instanceof \DateTime) {
          $strBuyingDate = $this->buyingDate->format('Y-m-d');
        }
        return $strBuyingDate;
    }

    public function endWarantyDateToString(): ?string
    {
        if ($this->endWarantyDate instanceof \DateTime) {
          $newEndWarantyDate = $this->endWarantyDate->format('Y-m-d');
        }
        return $strEndWarantyDate;
    }
}
