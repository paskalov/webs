<?php

namespace Filmweb\WebsiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Zamowienia
 *
 * @ORM\Table(name="Zamowienia", indexes={@ORM\Index(name="fk_Zamowienia_StatusZamowienia1_idx", columns={"id_status"}), @ORM\Index(name="fk_Zamowienia_Filmy1_idx", columns={"id_film"}), @ORM\Index(name="fk_Zamowienia_Uzytkownicy1_idx", columns={"id_uzytkownik"})})
 * @ORM\Entity
 */
class Zamowienia
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_zamowienia", type="datetime", nullable=true)
     */
    private $dataZamowienia;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_zwrotu", type="datetime", nullable=true)
     */
    private $dataZwrotu;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
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
     * @var \Filmweb\WebsiteBundle\Entity\Statuszamowienia
     *
     * @ORM\ManyToOne(targetEntity="Filmweb\WebsiteBundle\Entity\Statuszamowienia")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_status", referencedColumnName="id")
     * })
     */
    private $idStatus;



    /**
     * Set dataZamowienia
     *
     * @param \DateTime $dataZamowienia
     * @return Zamowienia
     */
    public function setDataZamowienia($dataZamowienia)
    {
        $this->dataZamowienia = $dataZamowienia;

        return $this;
    }

    /**
     * Get dataZamowienia
     *
     * @return \DateTime 
     */
    public function getDataZamowienia()
    {
        return $this->dataZamowienia;
    }

    /**
     * Set dataZwrotu
     *
     * @param \DateTime $dataZwrotu
     * @return Zamowienia
     */
    public function setDataZwrotu($dataZwrotu)
    {
        $this->dataZwrotu = $dataZwrotu;

        return $this;
    }

    /**
     * Get dataZwrotu
     *
     * @return \DateTime 
     */
    public function getDataZwrotu()
    {
        return $this->dataZwrotu;
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
     * @return Zamowienia
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
     * @return Zamowienia
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

    /**
     * Set idStatus
     *
     * @param \Filmweb\WebsiteBundle\Entity\Statuszamowienia $idStatus
     * @return Zamowienia
     */
    public function setIdStatus(\Filmweb\WebsiteBundle\Entity\Statuszamowienia $idStatus = null)
    {
        $this->idStatus = $idStatus;

        return $this;
    }

    /**
     * Get idStatus
     *
     * @return \Filmweb\WebsiteBundle\Entity\Statuszamowienia 
     */
    public function getIdStatus()
    {
        return $this->idStatus;
    }
}
