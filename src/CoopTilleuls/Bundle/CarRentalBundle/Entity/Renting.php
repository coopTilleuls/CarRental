<?php

namespace CoopTilleuls\Bundle\CarRentalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Dunglas\Bundle\CarRentalBundle\Entity\Renting
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Renting
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
     * @ORM\ManyToOne(targetEntity="Customer", inversedBy="rentals")
     */
    private $customer;

    /**
     * @ORM\ManyToOne(targetEntity="Vehicle", inversedBy="rentals")
     */
    private $vehicle;

    /**
     * @var date $exited
     *
     * @ORM\Column(name="exited", type="datetime")
     */
    private $exited;

    /**
     * @var date $scheduledReturn
     *
     * @ORM\Column(name="scheduledReturn", type="datetime")
     */
    private $scheduledReturn;

    /**
     * @var date $returned
     *
     * @ORM\Column(name="returned", type="datetime")
     */
    private $returned;

    /**
     * @var text $notes
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
     * @ORM\OneToMany(targetEntity="Payment", mappedBy="renting")
     */
    private $payments;

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
        $this->payments = new ArrayCollection();
    }

    public function __toString()
    {
        return $this->getId() . ' - ' . $this->getVehicle() . ' - ' . $this->getCustomer();
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
     * Set exited
     *
     * @param datetime $exited
     * @return Renting
     */
    public function setExited($exited)
    {
        $this->exited = $exited;
        return $this;
    }

    /**
     * Get exited
     *
     * @return datetime 
     */
    public function getExited()
    {
        return $this->exited;
    }

    /**
     * Set scheduledReturn
     *
     * @param datetime $scheduledReturn
     * @return Renting
     */
    public function setScheduledReturn($scheduledReturn)
    {
        $this->scheduledReturn = $scheduledReturn;
        return $this;
    }

    /**
     * Get scheduledReturn
     *
     * @return datetime 
     */
    public function getScheduledReturn()
    {
        return $this->scheduledReturn;
    }

    /**
     * Set returned
     *
     * @param datetime $returned
     * @return Renting
     */
    public function setReturned($returned)
    {
        $this->returned = $returned;
        return $this;
    }

    /**
     * Get returned
     *
     * @return datetime 
     */
    public function getReturned()
    {
        return $this->returned;
    }

    /**
     * Set notes
     *
     * @param text $notes
     * @return Renting
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
     * @return Renting
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
     * @return Renting
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
     * @return Renting
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
     * Set customer
     *
     * @param CoopTilleuls\Bundle\CarRentalBundle\Entity\Customer $customer
     * @return Renting
     */
    public function setCustomer(\CoopTilleuls\Bundle\CarRentalBundle\Entity\Customer $customer = null)
    {
        $this->customer = $customer;
        return $this;
    }

    /**
     * Get customer
     *
     * @return CoopTilleuls\Bundle\CarRentalBundle\Entity\Customer 
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * Set vehicle
     *
     * @param CoopTilleuls\Bundle\CarRentalBundle\Entity\Vehicle $vehicle
     * @return Renting
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

    /**
     * Add payments
     *
     * @param CoopTilleuls\Bundle\CarRentalBundle\Entity\Payment $payments
     */
    public function addPayment(\CoopTilleuls\Bundle\CarRentalBundle\Entity\Payment $payments)
    {
        $this->payments[] = $payments;
    }

    /**
     * Get payments
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getPayments()
    {
        return $this->payments;
    }
}