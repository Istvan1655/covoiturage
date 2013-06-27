<?php

namespace RTFMIS\Covoiturage\TripBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use RTFMIS\Covoiturage\TripBundle\Entity\Passenger;

/**
 * OneWayTrip
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="RTFMIS\Covoiturage\TripBundle\Entity\OneWayTripRepository")
 */
class OneWayTrip
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="on_campus_time", type="time")
     */
    private $onCampusTime;

    /**
     * @var string
     *
     * @ORM\Column(name="drivers_place", type="string", length=255)
     */
    private $driversPlace;

    /**
     * @var RTFMIS\Covoiturage\TripBundle\Entity\Passenger
     *
     * @ORM\ManyToMany(targetEntity="RTFMIS\Covoiturage\TripBundle\Entity\Passenger")
     */
    private $passengers;

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
     * Set onCampusTime
     *
     * @param \DateTime $onCampusTime
     * @return OneWayTrip
     */
    public function setOnCampusTime($onCampusTime)
    {
        $this->onCampusTime = $onCampusTime;
    
        return $this;
    }

    /**
     * Get onCampusTime
     *
     * @return \DateTime 
     */
    public function getOnCampusTime()
    {
        return $this->onCampusTime;
    }

    /**
     * Set driversPlace
     *
     * @param string $driversPlace
     * @return OneWayTrip
     */
    public function setDriversPlace($driversPlace)
    {
        $this->driversPlace = $driversPlace;
    
        return $this;
    }

    /**
     * Get driversPlace
     *
     * @return string 
     */
    public function getDriversPlace()
    {
        return $this->driversPlace;
    }
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->passengers = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add passengers
     *
     * @param \RTFMIS\Covoiturage\TripBundle\Entity\Passenger $passengers
     * @return OneWayTrip
     */
    public function addPassenger(\RTFMIS\Covoiturage\TripBundle\Entity\Passenger $passengers)
    {
        $this->passengers[] = $passengers;
    
        return $this;
    }

    /**
     * Remove passengers
     *
     * @param \RTFMIS\Covoiturage\TripBundle\Entity\Passenger $passengers
     */
    public function removePassenger(\RTFMIS\Covoiturage\TripBundle\Entity\Passenger $passengers)
    {
        $this->passengers->removeElement($passengers);
    }

    /**
     * Get passengers
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPassengers()
    {
        return $this->passengers;
    }
}