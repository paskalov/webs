<?php

namespace Filmweb\WebsiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Recenzje
 *
 * @ORM\Table(name="Recenzje", indexes={@ORM\Index(name="fk_Recenzje_Uzytkownicy2_idx", columns={"id_uzytkownik"}), @ORM\Index(name="fk_Recenzje_Filmy2", columns={"id_film"})})
 * @ORM\Entity
 */
class Recenzje
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="czas_zlozenia", type="datetime", nullable=true)
     */
    private $czasZlozenia;

    /**
     * @var string
     *
     * @ORM\Column(name="tresc", type="string", length=45, nullable=true)
     */
    private $tresc;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Filmweb\UserBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="Filmweb\UserBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_uzytkownik", referencedColumnName="id")
     * })
     */
    private $idUzytkownik;

    /**
     * @var \Filmweb\WebsiteBundle\Entity\Filmy
     *
     * @ORM\ManyToOne(targetEntity="Filmweb\WebsiteBundle\Entity\Filmy")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_film", referencedColumnName="id")
     * })
     */
    private $idFilm;



    /**
     * Set czasZlozenia
     *
     * @param \DateTime $czasZlozenia
     * @return Recenzje
     */
    public function setCzasZlozenia($czasZlozenia)
    {
        $this->czasZlozenia = $czasZlozenia;

        return $this;
    }

    /**
     * Get czasZlozenia
     *
     * @return \DateTime 
     */
    public function getCzasZlozenia()
    {
        return $this->czasZlozenia;
    }

    /**
     * Set tresc
     *
     * @param string $tresc
     * @return Recenzje
     */
    public function setTresc($tresc)
    {
        $this->tresc = $tresc;

        return $this;
    }

    /**
     * Get tresc
     *
     * @return string 
     */
    public function getTresc()
    {
        return $this->tresc;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idUzytkownik
     *
     * @param \Filmweb\UserBundle\Entity\User $idUzytkownik
     * @return Recenzje
     */
    public function setIdUzytkownik(\Filmweb\UserBundle\Entity\User $idUzytkownik = null)
    {
        $this->idUzytkownik = $idUzytkownik;

        return $this;
    }

    /**
     * Get idUzytkownik
     *
     * @return \Filmweb\UserBundle\Entity\User
     */
    public function getIdUzytkownik()
    {
        return $this->idUzytkownik;
    }

    /**
     * Set idFilm
     *
     * @param \Filmweb\WebsiteBundle\Entity\Filmy $idFilm
     * @return Recenzje
     */
    public function setIdFilm(\Filmweb\WebsiteBundle\Entity\Filmy $idFilm = null)
    {
        $this->idFilm = $idFilm;

        return $this;
    }

    /**
     * Get idFilm
     *
     * @return \Filmweb\WebsiteBundle\Entity\Filmy 
     */
    public function getIdFilm()
    {
        return $this->idFilm;
    }
}
