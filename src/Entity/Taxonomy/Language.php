<?php

namespace App\Entity\Taxonomy;

use Doctrine\ORM\Mapping as ORM;
use App\Entity\Behaviour\Id;
use App\Entity\Behaviour\Activable;
use App\Entity\Behaviour\Name;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\Taxonomy\LanguageRepository")
 */
class Language
{
    use Id, Activable, Name;

    /**
     * @ORM\Column(type="string", length=50)
     * @Groups({"in", "out"})
     * @Assert\Unique
     */
    private $code;

    /**
     * @ORM\Column(type="boolean", name="default_language", options={"default":false})
     * @Groups({"in", "out"})
     */
    private $default = false;

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(string $code): self
    {
        $this->code = $code;

        return $this;
    }

    public function isDefault(): ?bool
    {
        return $this->default;
    }

    public function setDefault(bool $default): self
    {
        $this->default = $default;

        return $this;
    }
}
