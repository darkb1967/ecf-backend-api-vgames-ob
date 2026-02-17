<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\GizmondoRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: GizmondoRepository::class)]
#[ApiResource]
class Gizmondo
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $game = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTime $year = null;

    #[ORM\Column(length: 255)]
    private ?string $dev = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getGame(): ?string
    {
        return $this->game;
    }

    public function setGame(string $game): static
    {
        $this->game = $game;

        return $this;
    }

    public function getYear(): ?\DateTime
    {
        return $this->year;
    }

    public function setYear(\DateTime $year): static
    {
        $this->year = $year;

        return $this;
    }

    public function getDev(): ?string
    {
        return $this->dev;
    }

    public function setDev(string $dev): static
    {
        $this->dev = $dev;

        return $this;
    }
}
