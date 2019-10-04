<?php

namespace App\Repository\Taxonomy;

use App\Entity\Taxonomy\Language;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Language|null find($id, $lockMode = null, $lockVersion = null)
 * @method Language|null findOneBy(array $criteria, array $orderBy = null)
 * @method Language[]    findAll()
 * @method Language[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LanguageRepository extends ServiceEntityRepository
{
    /**
     * @var string
     */
    private $parametersDefaultLocale;

    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Language::class);
        $this->parametersDefaultLocale = 'fr';
    }

    public function getByLocale(?string $locale): ?Language
    {
        if ($locale === null) {
            return $this->getDefaultLanguage();
        }

        $languages = $this->findBy(['code' => $locale]);

        if (!count($languages)) {
            return null;
        }

        return $languages[0];
    }

    public function getDefaultLanguage()
    {
        return $this->findOneBy(['default' => true]);
    }

    public function getDefaultLocale()
    {
        $dbDefaultLanguage = $this->getDefaultLanguage();

        return $dbDefaultLanguage ? $dbDefaultLanguage->getCode() : $this->parametersDefaultLocale;
    }

    public function getAvailableLocales()
    {
        $availableLocales = array_map(function (Language $language) {
            return $language->getCode();
        }, $this->findAll());

        return $availableLocales ?? [$this->parametersDefaultLocale];
    }
}
