<?php

namespace RTFMIS\Covoiturage\TripBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TripInfo
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="RTFMIS\Covoiturage\TripBundle\Entity\TripInfoRepository")
 */
class TripInfo
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
     * @var boolean
     *
     * @ORM\Column(name="smokers", type="boolean")
     */
    private $smokers;

    /**
     * @var string
     *
     * @ORM\Column(name="additional_info", type="text")
     */
    private $additionalInfo;


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
     * Set smokers
     *
     * @param boolean $smokers
     * @return TripInfo
     */
    public function setSmokers($smokers)
    {
        $this->smokers = $smokers;
    
        return $this;
    }

    /**
     * Get smokers
     *
     * @return boolean 
     */
    public function getSmokers()
    {
        return $this->smokers;
    }

    /**
     * Set additionalInfo
     *
     * @param string $additionalInfo
     * @return TripInfo
     */
    public function setAdditionalInfo($additionalInfo)
    {
        $this->additionalInfo = $additionalInfo;
    
        return $this;
    }

    /**
     * Get additionalInfo
     *
     * @return string 
     */
    public function getAdditionalInfo()
    {
        return $this->additionalInfo;
    }
}