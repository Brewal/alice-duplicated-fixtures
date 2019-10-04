<?php

namespace App\Entity\Behaviour;

use App\Entity\Taxonomy\Language;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

trait DefaultLanguage
{
    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Taxonomy\Language", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     * @Groups({"out"})
     */
    private $defaultLanguage;

    public function getDefaultLanguage(): ?Language
    {
        return $this->defaultLanguage;
    }

    public function setDefaultLanguage(Language  $defaultLanguage): self
    {
        $this->defaultLanguage = $defaultLanguage;

        return $this;
    }
}
