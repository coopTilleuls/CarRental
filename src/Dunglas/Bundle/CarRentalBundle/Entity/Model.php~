<?php

namespace Dunglas\Bundle\CarRentalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Dunglas\Bundle\CarRentalBundle\Entity\Model
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Model
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
     * @var string $name
     *
     * @Assert\NotBlank()
     * @Assert\MaxLength(255)
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;
    
    /**
     * @ORM\ManyToOne(targetEntity="Manufacturer", inversedBy="models")
     */
    private $manufacturer;
    
    /**
     * @ORM\OneToMany(targetEntity="Vehicle", mappedBy="model")
     */
    private $vehicles;
    
    /**
     * @ORM\Column(name="created", type="datetime")
     * @Gedmo:Timestampable(on="create")
     */
    private $created;
    
    /**
     * @ORM\Column(name="updated", type="datetime")
     * @Gedmo:Timestampable(on="update")
     */
    private $updated;


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
     * Set name
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
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
    public function __construct()
    {
        $this->vehicles = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Set created
     *
     * @param datetime $created
     */
    public function setCreated($created)
    {
        $this->created = $created;
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
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;
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
     * Set manufacturer
     *
     * @param Dunglas\Bundle\CarRentalBundle\Entity\Manufacturer $manufacturer
     */
    public function setManufacturer(\Dunglas\Bundle\CarRentalBundle\Entity\Manufacturer $manufacturer)
    {
        $this->manufacturer = $manufacturer;
    }

    /**
     * Get manufacturer
     *
     * @return Dunglas\Bundle\CarRentalBundle\Entity\Manufacturer 
     */
    public function getManufacturer()
    {
        return $this->manufacturer;
    }

    /**
     * Add vehicles
     *
     * @param Dunglas\Bundle\CarRentalBundle\Entity\Vehicle $vehicles
     */
    public function addVehicles(\Dunglas\Bundle\CarRentalBundle\Entity\Vehicle $vehicles)
    {
        $this->vehicles[] = $vehicles;
    }

    /**
     * Get vehicles
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getVehicles()
    {
        return $this->vehicles;
    }
    
    public function __toString() {
        return $this->getName();
    }
}