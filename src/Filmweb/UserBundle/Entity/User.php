<?php

namespace Filmweb\UserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="FOSUser")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @var string
     * @Assert\NotBlank(message="Wprowadź swój numer telefonu.", groups={"Registration", "Profile"})
     * @Assert\Length(
     *     min=9,
     *     max="12",
     *     minMessage="Telefon za krótki",
     *     maxMessage="Telefon za długi",
     *     groups={"Registration", "Profile"})
     *
     * @ORM\Column(name="phone_number", type="string", length=255)
     */
    protected $phone_number;

    /**
     * @var string
     * @Assert\NotBlank(message="Wprowadź swoje imię.", groups={"Registration", "Profile"})
     * @Assert\Length(
     *     min=3,
     *     max="15",
     *     minMessage="Imię za krótkie",
     *     maxMessage="Imię za długie",
     *     groups={"Registration", "Profile"}
     * )
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    protected $name;

    /**
     * @var string
     *
     * @Assert\NotBlank(message="Wprowadź swoje nazwisko", groups={"Registration", "Profile"})
     * @Assert\Length(
     *     min=5,
     *     max="20",
     *     minMessage="Nazwisko za krótkie",
     *     maxMessage="Naziskow za długie",
     *     groups={"Registration", "Profile"}
     * )
     *
     * @ORM\Column(name="surname", type="string", length=255)
     */
    protected $surname;


    /**
     * Set phone_number
     *
     * @param string $phoneNumber
     * @return User
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phone_number = $phoneNumber;

        return $this;
    }

    /**
     * Get phone_number
     *
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->phone_number;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return User
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set surname
     *
     * @param string $surname
     * @return User
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;

        return $this;
    }

    /**
     * Get surname
     *
     * @return string
     */
    public function getSurname()
    {
        return $this->surname;
    }
}