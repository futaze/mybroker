<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Flood
 *
 * @ORM\Table(name="flood")
 * @ORM\Entity
 */
class Flood
{
    /**
     * @var string
     *
     * @ORM\Column(name="event", type="string", length=64, nullable=false)
     */
    private $event;

    /**
     * @var string
     *
     * @ORM\Column(name="identifier", type="string", length=128, nullable=false)
     */
    private $identifier;

    /**
     * @var integer
     *
     * @ORM\Column(name="timestamp", type="integer", nullable=false)
     */
    private $timestamp;

    /**
     * @var integer
     *
     * @ORM\Column(name="expiration", type="integer", nullable=false)
     */
    private $expiration;

    /**
     * @var integer
     *
     * @ORM\Column(name="fid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $fid;


    /**
     * Set event
     *
     * @param string $event
     * @return Flood
     */
    public function setEvent($event)
    {
        $this->event = $event;
    
        return $this;
    }

    /**
     * Get event
     *
     * @return string 
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * Set identifier
     *
     * @param string $identifier
     * @return Flood
     */
    public function setIdentifier($identifier)
    {
        $this->identifier = $identifier;
    
        return $this;
    }

    /**
     * Get identifier
     *
     * @return string 
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Set timestamp
     *
     * @param integer $timestamp
     * @return Flood
     */
    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;
    
        return $this;
    }

    /**
     * Get timestamp
     *
     * @return integer 
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * Set expiration
     *
     * @param integer $expiration
     * @return Flood
     */
    public function setExpiration($expiration)
    {
        $this->expiration = $expiration;
    
        return $this;
    }

    /**
     * Get expiration
     *
     * @return integer 
     */
    public function getExpiration()
    {
        return $this->expiration;
    }

    /**
     * Get fid
     *
     * @return integer 
     */
    public function getFid()
    {
        return $this->fid;
    }
}
