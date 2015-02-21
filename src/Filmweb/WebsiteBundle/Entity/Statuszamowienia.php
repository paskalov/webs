<?php

namespace Filmweb\WebsiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Statuszamowienia
 *
 * @ORM\Table(name="StatusZamowienia")
 * @ORM\Entity
 */
class Statuszamowienia
{
    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=45, nullable=true)
     */
    private $status;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set status
     *
     * @param string $status
     * @return Statuszamowienia
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string 
     */
    public function getStatus()
    {
        return $this->status;
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
}
