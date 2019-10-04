<?php

namespace App\Entity\Taxonomy;

use Doctrine\ORM\Mapping as ORM;
use App\Entity\Behaviour\Id;
use App\Entity\Behaviour\Name;
use App\Entity\Behaviour\Activable;
use App\Entity\Behaviour\DefaultLanguage;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass="App\Repository\Taxonomy\CountryRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class Country
{
    use Id, Name, Activable, DefaultLanguage;

    /**
     * @ORM\Column(type="boolean")
     * @Groups({"in", "out"})
     */
    private $hasStates;

    /**
     * @ORM\Column(type="string", length=30)
     * @Groups({"in", "out"})
     */
    private $isoCode;

    /**
     * @ORM\Column(type="string", length=30)
     * @Groups({"in", "out"})
     */
    private $phoneCode;

    public function getHasStates(): ?bool
    {
        return $this->hasStates;
    }

    public function setHasStates(bool $hasStates): self
    {
        $this->hasStates = $hasStates;

        return $this;
    }

    public function getIsoCode(): ?string
    {
        return $this->isoCode;
    }

    public function setIsoCode(string $isoCode): self
    {
        $this->isoCode = $isoCode;

        return $this;
    }

    public function getPhoneCode(): ?string
    {
        return $this->phoneCode;
    }

    public function setPhoneCode(string $phoneCode): self
    {
        $this->phoneCode = $phoneCode;

        return $this;
    }
}
