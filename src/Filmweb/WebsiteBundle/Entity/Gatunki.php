<?php

namespace Filmweb\WebsiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Gatunki
 *
 * @ORM\Table(name="Gatunki")
 * @ORM\Entity
 */
class Gatunki
{
    /**
     * @var string
     *
     * @ORM\Column(name="nazwa_gatunku", type="string", length=50)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $nazwaGatunku;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Filmweb\WebsiteBundle\Entity\Filmy", mappedBy="nazwaGatunku")
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
     * Get nazwaGatunku
     *
     * @return string 
     */
    public function getNazwaGatunku()
    {
        return $this->nazwaGatunku;
    }

    /**
     * Add idFilm
     *
     * @param \Filmweb\WebsiteBundle\Entity\Filmy $idFilm
     * @return Gatunki
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
