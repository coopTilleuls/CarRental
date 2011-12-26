<?php

namespace CoopTilleuls\Bundle\CarRentalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Dunglas\Bundle\CarRentalBundle\Entity\Customer
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Customer
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string $gender
     *
     * @ Assert \ Choice(
     *     choices = { "Mr.", "Mrs." },
     *     message = "Choose a valid honorific."
     * )
     * @ORM\Column(name="honorific", type="integer")
     */
    private $honorific;

    /**
     * @var string $lastName
     *
     * @Assert\NotBlank()
     * @ORM\Column(name="lastName", type="string", length=255, nullable=false)
     */
    private $lastName;

    /**
     * @var string $firstName
     * @Assert\NotBlank()
     * @ORM\Column(name="firstName", type="string", length=255, nullable=false)
     */
    private $firstName;

    /**
     * @var string $address1
     * @Assert\NotBlank()
     * @ORM\Column(name="address1", type="string", length=255)
     */
    private $address1;

    /**
     * @var string $address2
     *
     * @ORM\Column(name="address2", type="string", length=255, nullable=true)
     */
    private $address2;

    /**
     * @var string $city
     * @Assert\NotBlank()
     * @ORM\Column(name="city", type="string", length=255)
     */
    private $city;

    /**
     * @var string $zipCode
     * @Assert\NotBlank()
     * @ORM\Column(name="zipCode", type="string", length=20)
     */
    private $zipCode;

    /**
     *
     * @var string $country
     * @ORM\Column(name="country", type="string", length=2, nullable=true)
     */
    private $country;

    /**
     * @var string $emailAddress
     *
     * @ORM\Column(name="emailAddress", type="string", length=255, nullable=true)
     */
    private $emailAddress;

    /**
     * @var string $phoneNumber1
     *
     * @ORM\Column(name="phoneNumber1", type="string", length=255, nullable=true)
     */
    private $phoneNumber1;

    /**
     * @var string $phoneNumber2
     *
     * @ORM\Column(name="phoneNumber2", type="string", length=255, nullable=true)
     */
    private $phoneNumber2;

    /**
     * @var date $registrationDate
     *
     * @ORM\Column(name="registrationDate", type="date", nullable=true)
     */
    private $registrationDate;

    /**
     * @var date $birth
     *
     * @ORM\Column(name="birth", type="date", nullable=true)
     */
    private $birth;

    /**
     *
     * @var string $notes
     *
     * @ORM\Column(name="notes", type="text", nullable=true)
     */
    private $notes;

    /**
     * @var boolean $active
     *
     * @ORM\Column(name="active", type="boolean")
     */
    private $active = true;

    /**
     * @ORM\OneToMany(targetEntity="Renting", mappedBy="customer")
     */
    private $rentals;

    /**
     * @ORM\Column(name="created", type="datetime")
     * @Gedmo\Timestampable(on="create")
     */
    private $created;

    /**
     * @ORM\Column(name="updated", type="datetime")
     * @Gedmo\Timestampable(on="update")
     */
    private $updated;

    public function __construct()
    {
        $this->rentals = new ArrayCollection();
    }

    public function __toString()
    {
        return $this->getLastName() . ' ' . $this->getFirstName();
    }
    
    public static function getHonorifics() {
        return array(0 => 'Mr.', 1 => 'Ms.');
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
     * Set honorific
     *
     * @param string $honorific
     * @return Customer
     */
    public function setHonorific($honorific)
    {
        $this->honorific = $honorific;
        return $this;
    }

    /**
     * Get gender
     *
     * @return string 
     */
    public function getHonorific()
    {
        return $this->honorific;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     * @return Customer
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
        return $this;
    }

    /**
     * Get lastName
     *
     * @return string 
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     * @return Customer
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * Get firstName
     *
     * @return string 
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set address1
     *
     * @param string $address1
     * @return Customer
     */
    public function setAddress1($address1)
    {
        $this->address1 = $address1;
        return $this;
    }

    /**
     * Get address1
     *
     * @return string 
     */
    public function getAddress1()
    {
        return $this->address1;
    }

    /**
     * Set address2
     *
     * @param string $address2
     * @return Customer
     */
    public function setAddress2($address2)
    {
        $this->address2 = $address2;
        return $this;
    }

    /**
     * Get address2
     *
     * @return string 
     */
    public function getAddress2()
    {
        return $this->address2;
    }

    /**
     * Set city
     *
     * @param string $city
     * @return Customer
     */
    public function setCity($city)
    {
        $this->city = $city;
        return $this;
    }

    /**
     * Get city
     *
     * @return string 
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set zipCode
     *
     * @param string $zipCode
     * @return Customer
     */
    public function setZipCode($zipCode)
    {
        $this->zipCode = $zipCode;
        return $this;
    }

    /**
     * Get zipCode
     *
     * @return string 
     */
    public function getZipCode()
    {
        return $this->zipCode;
    }

    /**
     * Set country
     *
     * @param string $country
     * @return Customer
     */
    public function setCountry($country)
    {
        $this->country = $country;
        return $this;
    }

    /**
     * Get country
     *
     * @return string 
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set emailAddress
     *
     * @param string $emailAddress
     * @return Customer
     */
    public function setEmailAddress($emailAddress)
    {
        $this->emailAddress = $emailAddress;
        return $this;
    }

    /**
     * Get emailAddress
     *
     * @return string 
     */
    public function getEmailAddress()
    {
        return $this->emailAddress;
    }

    /**
     * Set phoneNumber1
     *
     * @param string $phoneNumber1
     * @return Customer
     */
    public function setPhoneNumber1($phoneNumber1)
    {
        $this->phoneNumber1 = $phoneNumber1;
        return $this;
    }

    /**
     * Get phoneNumber1
     *
     * @return string 
     */
    public function getPhoneNumber1()
    {
        return $this->phoneNumber1;
    }

    /**
     * Set phoneNumber2
     *
     * @param string $phoneNumber2
     * @return Customer
     */
    public function setPhoneNumber2($phoneNumber2)
    {
        $this->phoneNumber2 = $phoneNumber2;
        return $this;
    }

    /**
     * Get phoneNumber2
     *
     * @return string 
     */
    public function getPhoneNumber2()
    {
        return $this->phoneNumber2;
    }

    /**
     * Set registrationDate
     *
     * @param date $registrationDate
     * @return Customer
     */
    public function setRegistrationDate($registrationDate)
    {
        $this->registrationDate = $registrationDate;
        return $this;
    }

    /**
     * Get registrationDate
     *
     * @return date 
     */
    public function getRegistrationDate()
    {
        return $this->registrationDate;
    }

    /**
     * Set birth
     *
     * @param date $birth
     * @return Customer
     */
    public function setBirth($birth)
    {
        $this->birth = $birth;
        return $this;
    }

    /**
     * Get birth
     *
     * @return date 
     */
    public function getBirth()
    {
        return $this->birth;
    }

    /**
     * Set notes
     *
     * @param text $notes
     * @return Customer
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;
        return $this;
    }

    /**
     * Get notes
     *
     * @return text 
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * Set active
     *
     * @param boolean $active
     * @return Customer
     */
    public function setActive($active)
    {
        $this->active = $active;
        return $this;
    }

    /**
     * Get active
     *
     * @return boolean 
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set created
     *
     * @param datetime $created
     * @return Customer
     */
    public function setCreated($created)
    {
        $this->created = $created;
        return $this;
    }

    /**
     * Get created
     *
     * @return datetime 
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set updated
     *
     * @param datetime $updated
     * @return Customer
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;
        return $this;
    }

    /**
     * Get updated
     *
     * @return datetime 
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * Add rentals
     *
     * @param CoopTilleuls\Bundle\CarRentalBundle\Entity\Renting $rentals
     */
    public function addRenting(\CoopTilleuls\Bundle\CarRentalBundle\Entity\Renting $rentals)
    {
        $this->rentals[] = $rentals;
    }

    /**
     * Get rentals
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getRentals()
    {
        return $this->rentals;
    }
}