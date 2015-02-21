<?php

namespace Filmweb\WebsiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Filmy
 *
 * @ORM\Table(name="Filmy")
 * @ORM\Entity
 */
class Filmy
{
    /**
     * @var string
     *
     * @ORM\Column(name="nazwa", type="string", length=100, nullable=true)
     */
    private $nazwa;

    /**
     * @var string
     *
     * @ORM\Column(name="rok_premiery", type="decimal", precision=4, scale=0, nullable=true)
     */
    private $rokPremiery;

    /**
     * @var string
     *
     * @ORM\Column(name="dlugosc", type="string", length=45, nullable=true)
     */
    private $dlugosc;

    /**
     * @var string
     *
     * @ORM\Column(name="opis", type="text", nullable=true)
     */
    private $opis;

    /**
     * @var string
     *
     * @ORM\Column(name="cena", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $cena;

    /**
     * @var string
     *
     * @ORM\Column(name="img_url", type="text", length=65535, nullable=true)
     */
    private $imgUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="video_url", type="text", length=65535, nullable=true)
     */
    private $videoUrl;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Filmweb\WebsiteBundle\Entity\Gatunki", inversedBy="idFilm")
     * @ORM\JoinTable(name="FilmyGatunki",
     *   joinColumns={
     *     @ORM\JoinColumn(name="id_film", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="nazwa_gatunku", referencedColumnName="nazwa_gatunku")
     *   }
     * )
     */
    private $nazwaGatunku;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Filmweb\WebsiteBundle\Entity\Aktorzy", inversedBy="idFilm")
     * @ORM\JoinTable(name="AktorzyFilmy",
     *   joinColumns={
     *     @ORM\JoinColumn(name="id_film", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="nazwa_aktora", referencedColumnName="nazwa_aktora")
     *   }
     * )
     */
    private $nazwaAktora;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->nazwaGatunku = new \Doctrine\Common\Collections\ArrayCollection();
        $this->nazwaAktora = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set nazwa
     *
     * @param string $nazwa
     * @return Filmy
     */
    public function setNazwa($nazwa)
    {
        $this->nazwa = $nazwa;

        return $this;
    }

    /**
     * Get nazwa
     *
     * @return string 
     */
    public function getNazwa()
    {
        return $this->nazwa;
    }

    /**
     * Set rokPremiery
     *
     * @param string $rokPremiery
     * @return Filmy
     */
    public function setRokPremiery($rokPremiery)
    {
        $this->rokPremiery = $rokPremiery;

        return $this;
    }

    /**
     * Get rokPremiery
     *
     * @return string 
     */
    public function getRokPremiery()
    {
        return $this->rokPremiery;
    }

    /**
     * Set dlugosc
     *
     * @param string $dlugosc
     * @return Filmy
     */
    public function setDlugosc($dlugosc)
    {
        $this->dlugosc = $dlugosc;

        return $this;
    }

    /**
     * Get dlugosc
     *
     * @return string 
     */
    public function getDlugosc()
    {
        return $this->dlugosc;
    }

    /**
     * Set opis
     *
     * @param string $opis
     * @return Filmy
     */
    public function setOpis($opis)
    {
        $this->opis = $opis;

        return $this;
    }

    /**
     * Get opis
     *
     * @return string 
     */
    public function getOpis()
    {
        return $this->opis;
    }

    /**
     * Set cena
     *
     * @param string $cena
     * @return Filmy
     */
    public function setCena($cena)
    {
        $this->cena = $cena;

        return $this;
    }

    /**
     * Get cena
     *
     * @return string 
     */
    public function getCena()
    {
        return $this->cena;
    }

    /**
     * Set imgUrl
     *
     * @param string $imgUrl
     * @return Filmy
     */
    public function setImgUrl($imgUrl)
    {
        $this->imgUrl = $imgUrl;

        return $this;
    }

    /**
     * Get imgUrl
     *
     * @return string 
     */
    public function getImgUrl()
    {
        return $this->imgUrl;
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
     * Add nazwaGatunku
     *
     * @param \Filmweb\WebsiteBundle\Entity\Gatunki $nazwaGatunku
     * @return Filmy
     */
    public function addNazwaGatunku(\Filmweb\WebsiteBundle\Entity\Gatunki $nazwaGatunku)
    {
        $this->nazwaGatunku[] = $nazwaGatunku;

        return $this;
    }

    /**
     * Remove nazwaGatunku
     *
     * @param \Filmweb\WebsiteBundle\Entity\Gatunki $nazwaGatunku
     */
    public function removeNazwaGatunku(\Filmweb\WebsiteBundle\Entity\Gatunki $nazwaGatunku)
    {
        $this->nazwaGatunku->removeElement($nazwaGatunku);
    }

    /**
     * Get nazwaGatunku
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getNazwaGatunku()
    {
        return $this->nazwaGatunku;
    }

    /**
     * Add nazwaAktora
     *
     * @param \Filmweb\WebsiteBundle\Entity\Aktorzy $nazwaAktora
     * @return Filmy
     */
    public function addNazwaAktora(\Filmweb\WebsiteBundle\Entity\Aktorzy $nazwaAktora)
    {
        $this->nazwaAktora[] = $nazwaAktora;

        return $this;
    }

    /**
     * Remove nazwaAktora
     *
     * @param \Filmweb\WebsiteBundle\Entity\Aktorzy $nazwaAktora
     */
    public function removeNazwaAktora(\Filmweb\WebsiteBundle\Entity\Aktorzy $nazwaAktora)
    {
        $this->nazwaAktora->removeElement($nazwaAktora);
    }

    /**
     * Get nazwaAktora
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getNazwaAktora()
    {
        return $this->nazwaAktora;
    }

    /**
     * Set videoUrl
     *
     * @param string $videoUrl
     * @return Filmy
     */
    public function setVideoUrl($videoUrl)
    {
        $this->videoUrl = $videoUrl;

        return $this;
    }

    /**
     * Get videoUrl
     *
     * @return string
     */
    public function getVideoUrl()
    {
        return $this->videoUrl;
    }

}
