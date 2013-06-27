<?php

namespace RTFMIS\Covoiturage\TripBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Trip
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="RTFMIS\Covoiturage\TripBundle\Entity\TripRepository")
 */
class Trip
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
     * @ORM\Column(name="on_campus_date", type="date")
     */
    private $onCampusDate;

    /**
     * @var RTFMIS\Covoiturage\TripBundle\Entity\OneWayTrip
     *
     * @ORM\ManyToOne(targetEntity="RTFMIS\Covoiturage\TripBundle\Entity\OneWayTrip")
     */
    private $one_way;

    /**
     * @var RTFMIS\Covoiturage\TripBundle\Entity\OneWayTrip
     *
     * @ORM\ManyToOne(targetEntity="RTFMIS\Covoiturage\TripBundle\Entity\OneWayTrip")
     */
    private $back;

    /**
     * @var RTFMIS\Covoiturage\UserBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="RTFMIS\Covoiturage\UserBundle\Entity\User")
     */
    private $driver;

    /**
     * @var RTFMIS\Covoiturage\TripBundle\Entity\TripInfo
     *
     * @ORM\ManyToOne(targetEntity="RTFMIS\Covoiturage\TripBundle\Entity\TripInfo")
     */
    private $infos;


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
     * Set onCampusDate
     *
     * @param \DateTime $onCampusDate
     * @return Trip
     */
    public function setOnCampusDate($onCampusDate)
    {
        $this->onCampusDate = $onCampusDate;
    
        return $this;
    }

    /**
     * Get onCampusDate
     *
     * @return \DateTime 
     */
    public function getOnCampusDate()
    {
        return $this->onCampusDate;
    }

    /**
     * Set driver
     *
     * @param \RTFMIS\Covoiturage\UserBundle\Entity\User $driver
     * @return Trip
     */
    public function setDriver(\RTFMIS\Covoiturage\UserBundle\Entity\User $driver = null)
    {
        $this->driver = $driver;
    
        return $this;
    }

    /**
     * Get driver
     *
     * @return \RTFMIS\Covoiturage\UserBundle\Entity\User 
     */
    public function getDriver()
    {
        return $this->driver;
    }

    /**
     * Set infos
     *
     * @param \RTFMIS\Covoiturage\TripBundle\Entity\TripInfo $infos
     * @return Trip
     */
    public function setInfos(\RTFMIS\Covoiturage\TripBundle\Entity\TripInfo $infos = null)
    {
        $this->infos = $infos;
    
        return $this;
    }

    /**
     * Get infos
     *
     * @return \RTFMIS\Covoiturage\TripBundle\Entity\TripInfo 
     */
    public function getInfos()
    {
        return $this->infos;
    }

    /**
     * Set one_way
     *
     * @param \RTFMIS\Covoiturage\TripBundle\Entity\OneWayTrip $oneWay
     * @return Trip
     */
    public function setOneWay(\RTFMIS\Covoiturage\TripBundle\Entity\OneWayTrip $oneWay = null)
    {
        $this->one_way = $oneWay;
    
        return $this;
    }

    /**
     * Get one_way
     *
     * @return \RTFMIS\Covoiturage\TripBundle\Entity\OneWayTrip 
     */
    public function getOneWay()
    {
        return $this->one_way;
    }

    /**
     * Set back
     *
     * @param \RTFMIS\Covoiturage\TripBundle\Entity\OneWayTrip $back
     * @return Trip
     */
    public function setBack(\RTFMIS\Covoiturage\TripBundle\Entity\OneWayTrip $back = null)
    {
        $this->back = $back;
    
        return $this;
    }

    /**
     * Get back
     *
     * @return \RTFMIS\Covoiturage\TripBundle\Entity\OneWayTrip 
     */
    public function getBack()
    {
        return $this->back;
    }
}