<?php

namespace App\Entity;

use App\Entity\Behaviour\Id;
use App\Entity\Behaviour\Name;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\Behaviour\DefaultLanguage;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Serializer\Annotation\Groups;
/**
 * @ORM\Entity(repositoryClass="App\Repository\SpotRepository")
 */
class Spot
{
    use Id, Name, DefaultLanguage;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"in", "out"})
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"in", "out"})
     */
    private $magicSeaweedId;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Address", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     * @Groups({"in", "out"})
     */
    private $address;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"in", "out"})
     */
    private $descHowToGo;

    public function __construct()
    {
        $this->activities = new ArrayCollection();
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getMagicSeaweedId(): ?string
    {
        return $this->magicSeaweedId;
    }

    public function setMagicSeaweedId(?string $magicSeaweedId): self
    {
        $this->magicSeaweedId = $magicSeaweedId;

        return $this;
    }

    public function getAddress(): ?Address
    {
        return $this->address;
    }

    public function setAddress(Address $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function getDescHowtoGo(): ?string
    {
        return $this->descHowToGo;
    }

    public function setDescHowtoGo(?string $descHowToGo): self
    {
        $this->descHowToGo = $descHowToGo;

        return $this;
    }
}
