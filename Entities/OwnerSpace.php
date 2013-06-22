<?php

namespace Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * OwnerSpace
 *
 * @ORM\Table(name="owner_space")
 * @ORM\Entity
 */
class OwnerSpace
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=250, precision=0, scale=0, nullable=false, unique=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=250, precision=0, scale=0, nullable=false, unique=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="phone_number", type="string", length=100, precision=0, scale=0, nullable=false, unique=false)
     */
    private $phoneNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="address_line_1", type="string", length=250, precision=0, scale=0, nullable=false, unique=false)
     */
    private $addressLine1;

    /**
     * @var string
     *
     * @ORM\Column(name="address_line_2", type="string", length=250, precision=0, scale=0, nullable=false, unique=false)
     */
    private $addressLine2;

    /**
     * @var string
     *
     * @ORM\Column(name="locality", type="string", length=250, precision=0, scale=0, nullable=false, unique=false)
     */
    private $locality;

    /**
     * @var string
     *
     * @ORM\Column(name="landmark", type="string", length=250, precision=0, scale=0, nullable=false, unique=false)
     */
    private $landmark;

    /**
     * @var float
     *
     * @ORM\Column(name="floor_area", type="float", precision=0, scale=0, nullable=false, unique=false)
     */
    private $floorArea;

    /**
     * @var integer
     *
     * @ORM\Column(name="floor_position", type="integer", precision=0, scale=0, nullable=false, unique=false)
     */
    private $floorPosition;

    /**
     * @var float
     *
     * @ORM\Column(name="rent", type="float", precision=0, scale=0, nullable=false, unique=false)
     */
    private $rent;

    /**
     * @var integer
     *
     * @ORM\Column(name="bedrooms", type="smallint", precision=0, scale=0, nullable=false, unique=false)
     */
    private $bedrooms;

    /**
     * @var integer
     *
     * @ORM\Column(name="bathrooms", type="smallint", precision=0, scale=0, nullable=false, unique=false)
     */
    private $batrhooms;

    /**
     * @var integer
     *
     * @ORM\Column(name="rent_negotiable", type="smallint", precision=0, scale=0, nullable=false, unique=false)
     */
    private $rentNegotiable;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", precision=0, scale=0, nullable=false, unique=false)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="broker_fee", type="smallint", precision=0, scale=0, nullable=false, unique=false)
     */
    private $brokerFee;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", precision=0, scale=0, nullable=false, unique=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Entities\SysCity
     *
     * @ORM\ManyToOne(targetEntity="Entities\SysCity")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="city", referencedColumnName="id", nullable=true)
     * })
     */
    private $city;

    /**
     * @var \Entities\SysSpaceType
     *
     * @ORM\ManyToOne(targetEntity="Entities\SysSpaceType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="space_type", referencedColumnName="id", nullable=true)
     * })
     */
    private $spaceType;

    /**
     * @var \Entities\SysState
     *
     * @ORM\ManyToOne(targetEntity="Entities\SysState")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="state", referencedColumnName="id", nullable=true)
     * })
     */
    private $state;


    /**
     * Set name
     *
     * @param string $name
     * @return OwnerSpace
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
     * Set email
     *
     * @param string $email
     * @return OwnerSpace
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set phoneNumber
     *
     * @param string $phoneNumber
     * @return OwnerSpace
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    /**
     * Get phoneNumber
     *
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * Set addressLine1
     *
     * @param string $addressLine1
     * @return OwnerSpace
     */
    public function setAddressLine1($addressLine1)
    {
        $this->addressLine1 = $addressLine1;

        return $this;
    }

    /**
     * Get addressLine1
     *
     * @return string
     */
    public function getAddressLine1()
    {
        return $this->addressLine1;
    }

    /**
     * Set addressLine2
     *
     * @param string $addressLine2
     * @return OwnerSpace
     */
    public function setAddressLine2($addressLine2)
    {
        $this->addressLine2 = $addressLine2;

        return $this;
    }

    /**
     * Get addressLine2
     *
     * @return string
     */
    public function getAddressLine2()
    {
        return $this->addressLine2;
    }

    /**
     * Set locality
     *
     * @param string $locality
     * @return OwnerSpace
     */
    public function setLocality($locality)
    {
        $this->locality = $locality;

        return $this;
    }

    /**
     * Get locality
     *
     * @return string
     */
    public function getLocality()
    {
        return $this->locality;
    }

    /**
     * Set landmark
     *
     * @param string $landmark
     * @return OwnerSpace
     */
    public function setLandmark($landmark)
    {
        $this->landmark = $landmark;

        return $this;
    }

    /**
     * Get landmark
     *
     * @return string
     */
    public function getLandmark()
    {
        return $this->landmark;
    }

    /**
     * Set floorArea
     *
     * @param float $floorArea
     * @return OwnerSpace
     */
    public function setFloorArea($floorArea)
    {
        $this->floorArea = $floorArea;

        return $this;
    }

    /**
     * Get floorArea
     *
     * @return float
     */
    public function getFloorArea()
    {
        return $this->floorArea;
    }

    /**
     * Set floorPosition
     *
     * @param integer $floorPosition
     * @return OwnerSpace
     */
    public function setFloorPosition($floorPosition)
    {
        $this->floorPosition = $floorPosition;

        return $this;
    }

    /**
     * Get floorPosition
     *
     * @return integer
     */
    public function getFloorPosition()
    {
        return $this->floorPosition;
    }

    /**
     * Set rent
     *
     * @param float $rent
     * @return OwnerSpace
     */
    public function setRent($rent)
    {
        $this->rent = $rent;

        return $this;
    }

    /**
     * Get rent
     *
     * @return float
     */
    public function getRent()
    {
        return $this->rent;
    }

    /**
     * Set bedrooms
     *
     * @param integer $bedrooms
     * @return OwnerSpace
     */
    public function setBedrooms($bedrooms)
    {
        $this->bedrooms = $bedrooms;

        return $this;
    }

    /**
     * Get bedrooms
     *
     * @return integer
     */
    public function getBedrooms()
    {
        return $this->bedrooms;
    }

    /**
     * Set batrooms
     *
     * @param integer $batrooms
     * @return OwnerSpace
     */
    public function setBatrooms($batrooms)
    {
        $this->batrooms = $batrooms;

        return $this;
    }

    /**
     * Get bathrooms
     *
     * @return integer
     */
    public function getBathrooms()
    {
        return $this->bathrooms;
    }

    /**
     * Set rentNegotiable
     *
     * @param integer $rentNegotiable
     * @return OwnerSpace
     */
    public function setRentNegotiable($rentNegotiable)
    {
        $this->rentNegotiable = $rentNegotiable;

        return $this;
    }

    /**
     * Get rentNegotiable
     *
     * @return integer
     */
    public function getRentNegotiable()
    {
        return $this->rentNegotiable;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return OwnerSpace
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set brokerFee
     *
     * @param integer $brokerFee
     * @return OwnerSpace
     */
    public function setBrokerFee($brokerFee)
    {
        $this->brokerFee = $brokerFee;

        return $this;
    }

    /**
     * Get brokerFee
     *
     * @return integer
     */
    public function getBrokerFee()
    {
        return $this->brokerFee;
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
     * Set city
     *
     * @param \Entities\SysCity $city
     * @return OwnerSpace
     */
    public function setCity(\Entities\SysCity $city = null)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return \Entities\SysCity
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set spaceType
     *
     * @param \Entities\SysSpaceType $spaceType
     * @return OwnerSpace
     */
    public function setSpaceType(\Entities\SysSpaceType $spaceType = null)
    {
        $this->spaceType = $spaceType;

        return $this;
    }

    /**
     * Get spaceType
     *
     * @return \Entities\SysSpaceType
     */
    public function getSpaceType()
    {
        return $this->spaceType;
    }

    /**
     * Set state
     *
     * @param \Entities\SysState $state
     * @return OwnerSpace
     */
    public function setState(\Entities\SysState $state = null)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return \Entities\SysState
     */
    public function getState()
    {
        return $this->state;
    }
}
