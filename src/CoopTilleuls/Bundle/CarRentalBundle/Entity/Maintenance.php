<?php

namespace CoopTilleuls\Bundle\CarRentalBundle\Entity;

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
     * @return Maintenance
     */
    public function setDate($date)
    {
        $this->date = $date;
        return $this;
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
     * Set scheduled
     *
     * @param datetime $scheduled
     * @return Maintenance
     */
    public function setScheduled($scheduled)
    {
        $this->scheduled = $scheduled;
        return $this;
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

    /**
     * Set created
     *
     * @param datetime $created
     * @return Maintenance
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
     * @return Maintenance
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
     * Set vehicle
     *
     * @param CoopTilleuls\Bundle\CarRentalBundle\Entity\Vehicle $vehicle
     * @return Maintenance
     */
    public function setVehicle(\CoopTilleuls\Bundle\CarRentalBundle\Entity\Vehicle $vehicle = null)
    {
        $this->vehicle = $vehicle;
        return $this;
    }

    /**
     * Get vehicle
     *
     * @return CoopTilleuls\Bundle\CarRentalBundle\Entity\Vehicle 
     */
    public function getVehicle()
    {
        return $this->vehicle;
    }
}