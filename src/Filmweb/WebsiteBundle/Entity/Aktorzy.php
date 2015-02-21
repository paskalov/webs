<?php

namespace Filmweb\WebsiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Aktorzy
 *
 * @ORM\Table(name="Aktorzy")
 * @ORM\Entity
 */
class Aktorzy
{
    /**
     * @var string
     *
     * @ORM\Column(name="nazwa_aktora", type="string", length=45)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $nazwaAktora;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Filmweb\WebsiteBundle\Entity\Filmy", mappedBy="nazwaAktora")
     */
    private $idFilm;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idFilm = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get nazwaAktora
     *
     * @return string 
     */
    public function getNazwaAktora()
    {
        return $this->nazwaAktora;
    }

    /**
     * Add idFilm
     *
     * @param \Filmweb\WebsiteBundle\Entity\Filmy $idFilm
     * @return Aktorzy
     */
    public function addIdFilm(\Filmweb\WebsiteBundle\Entity\Filmy $idFilm)
    {
        $this->idFilm[] = $idFilm;

        return $this;
    }

    /**
     * Remove idFilm
     *
     * @param \Filmweb\WebsiteBundle\Entity\Filmy $idFilm
     */
    public function removeIdFilm(\Filmweb\WebsiteBundle\Entity\Filmy $idFilm)
    {
        $this->idFilm->removeElement($idFilm);
    }

    /**
     * Get idFilm
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdFilm()
    {
        return $this->idFilm;
    }
}
