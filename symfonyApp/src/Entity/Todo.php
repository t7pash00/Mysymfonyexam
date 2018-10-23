<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TodoRepository")
 */
class Todo
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Description;

    /**
     * @ORM\Column(type="datetime")
     */
    private $Duedate;

    /**
     * @ORM\Column(type="boolean")
     */
    private $Isdone;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDescription(): ?string
    {
        return $this->Description;
    }

    public function setDescription(string $Description): self
    {
        $this->Description = $Description;

        return $this;
    }

    public function getDuedate(): ?\DateTimeInterface
    {
        return $this->Duedate;
    }

    public function setDuedate(\DateTimeInterface $Duedate): self
    {
        $this->Duedate = $Duedate;

        return $this;
    }

    public function getIsdone(): ?bool
    {
        return $this->Isdone;
    }

    public function setIsdone(bool $Isdone): self
    {
        $this->Isdone = $Isdone;

        return $this;
    }
}
