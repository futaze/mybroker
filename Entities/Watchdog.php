<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Watchdog
 *
 * @ORM\Table(name="watchdog")
 * @ORM\Entity
 */
class Watchdog
{
    /**
     * @var integer
     *
     * @ORM\Column(name="uid", type="integer", nullable=false)
     */
    private $uid;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=64, nullable=false)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="text", nullable=false)
     */
    private $message;

    /**
     * @var string
     *
     * @ORM\Column(name="variables", type="blob", nullable=false)
     */
    private $variables;

    /**
     * @var boolean
     *
     * @ORM\Column(name="severity", type="boolean", nullable=false)
     */
    private $severity;

    /**
     * @var string
     *
     * @ORM\Column(name="link", type="string", length=255, nullable=true)
     */
    private $link;

    /**
     * @var string
     *
     * @ORM\Column(name="location", type="text", nullable=false)
     */
    private $location;

    /**
     * @var string
     *
     * @ORM\Column(name="referer", type="text", nullable=true)
     */
    private $referer;

    /**
     * @var string
     *
     * @ORM\Column(name="hostname", type="string", length=128, nullable=false)
     */
    private $hostname;

    /**
     * @var integer
     *
     * @ORM\Column(name="timestamp", type="integer", nullable=false)
     */
    private $timestamp;

    /**
     * @var integer
     *
     * @ORM\Column(name="wid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $wid;


    /**
     * Set uid
     *
     * @param integer $uid
     * @return Watchdog
     */
    public function setUid($uid)
    {
        $this->uid = $uid;
    
        return $this;
    }

    /**
     * Get uid
     *
     * @return integer 
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return Watchdog
     */
    public function setType($type)
    {
        $this->type = $type;
    
        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set message
     *
     * @param string $message
     * @return Watchdog
     */
    public function setMessage($message)
    {
        $this->message = $message;
    
        return $this;
    }

    /**
     * Get message
     *
     * @return string 
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set variables
     *
     * @param string $variables
     * @return Watchdog
     */
    public function setVariables($variables)
    {
        $this->variables = $variables;
    
        return $this;
    }

    /**
     * Get variables
     *
     * @return string 
     */
    public function getVariables()
    {
        return $this->variables;
    }

    /**
     * Set severity
     *
     * @param boolean $severity
     * @return Watchdog
     */
    public function setSeverity($severity)
    {
        $this->severity = $severity;
    
        return $this;
    }

    /**
     * Get severity
     *
     * @return boolean 
     */
    public function getSeverity()
    {
        return $this->severity;
    }

    /**
     * Set link
     *
     * @param string $link
     * @return Watchdog
     */
    public function setLink($link)
    {
        $this->link = $link;
    
        return $this;
    }

    /**
     * Get link
     *
     * @return string 
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Set location
     *
     * @param string $location
     * @return Watchdog
     */
    public function setLocation($location)
    {
        $this->location = $location;
    
        return $this;
    }

    /**
     * Get location
     *
     * @return string 
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set referer
     *
     * @param string $referer
     * @return Watchdog
     */
    public function setReferer($referer)
    {
        $this->referer = $referer;
    
        return $this;
    }

    /**
     * Get referer
     *
     * @return string 
     */
    public function getReferer()
    {
        return $this->referer;
    }

    /**
     * Set hostname
     *
     * @param string $hostname
     * @return Watchdog
     */
    public function setHostname($hostname)
    {
        $this->hostname = $hostname;
    
        return $this;
    }

    /**
     * Get hostname
     *
     * @return string 
     */
    public function getHostname()
    {
        return $this->hostname;
    }

    /**
     * Set timestamp
     *
     * @param integer $timestamp
     * @return Watchdog
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
     * Get wid
     *
     * @return integer 
     */
    public function getWid()
    {
        return $this->wid;
    }
}
