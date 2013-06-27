<?php

namespace RTFMIS\Covoiturage\TripBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use RTFMIS\Covoiturage\UserBundle\Entity\User;

/**
 * Passenger
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="RTFMIS\Covoiturage\TripBundle\Entity\PassengerRepository")
 */
class Passenger
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
     * @var string
     *
     * @ORM\Column(name="place", type="string", length=255)
     */
    private $place;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="at_place_time", type="time")
     */
    private $atPlaceTime;

    /**
     * @var RTFMIS\Covoiturage\UserBundle\Entity\User
     *
     * @ORM\ManyToMany(targetEntity="RTFMIS\Covoiturage\UserBundle\Entity\User")
     */
    private $users;


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
     * Set place
     *
     * @param string $place
     * @return Passenger
     */
    public function setPlace($place)
    {
        $this->place = $place;
    
        return $this;
    }

    /**
     * Get place
     *
     * @return string 
     */
    public function getPlace()
    {
        return $this->place;
    }

    /**
     * Set atPlaceTime
     *
     * @param \DateTime $atPlaceTime
     * @return Passenger
     */
    public function setAtPlaceTime($atPlaceTime)
    {
        $this->atPlaceTime = $atPlaceTime;
    
        return $this;
    }

    /**
     * Get atPlaceTime
     *
     * @return \DateTime 
     */
    public function getAtPlaceTime()
    {
        return $this->atPlaceTime;
    }
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->user = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add user
     *
     * @param \RTFMIS\Covoiturage\UserBundle\Entity\User $user
     * @return Passenger
     */
    public function addUser(\RTFMIS\Covoiturage\UserBundle\Entity\User $user)
    {
        $this->user[] = $user;
    
        return $this;
    }

    /**
     * Remove user
     *
     * @param \RTFMIS\Covoiturage\UserBundle\Entity\User $user
     */
    public function removeUser(\RTFMIS\Covoiturage\UserBundle\Entity\User $user)
    {
        $this->user->removeElement($user);
    }

    /**
     * Get users
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUsers()
    {
        return $this->users;
    }
}