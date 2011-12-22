<?php

namespace Dunglas\Bundle\CarRentalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Dunglas\Bundle\CarRentalBundle\Entity\Maintenance
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Maintenance
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
     * @var datetime $date
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var datetime $scheduled
     *
     * @ORM\Column(name="schedule", type="datetime")
     */
    private $scheduled;

    /**
     * @ORM\ManyToOne(targetEntity="Vehicle", inversedBy="maintenances")
     * @ORM\JoinColumn(name="vehicle_id", referencedColumnName="id")
     */
    private $vehicle;
    
    /**
     *
     * @var text $notes
     * 
     * @ORM\Column(name="notes", type="text")
     */
    private $notes;
    
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
     * Set date
     *
     * @param datetime $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * Get date
     *
     * @return datetime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set vehicle
     *
     * @param Dunglas\Bundle\CarRentalBundle\Entity\Vehicle $vehicle
     */
    public function setVehicle(\Dunglas\Bundle\CarRentalBundle\Entity\Vehicle $vehicle)
    {
        $this->vehicle = $vehicle;
    }

    /**
     * Get vehicle
     *
     * @return Dunglas\Bundle\CarRentalBundle\Entity\Vehicle 
     */
    public function getVehicle()
    {
        return $this->vehicle;
    }

    /**
     * Set scheduled
     *
     * @param datetime $scheduled
     */
    public function setScheduled($scheduled)
    {
        $this->scheduled = $scheduled;
    }

    /**
     * Get scheduled
     *
     * @return datetime 
     */
    public function getScheduled()
    {
        return $this->scheduled;
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
     * Set notes
     *
     * @param text $notes
     * @return Maintenance
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
}