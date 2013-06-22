<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Sessions
 *
 * @ORM\Table(name="sessions")
 * @ORM\Entity
 */
class Sessions
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
     * @ORM\Column(name="cache", type="integer", nullable=false)
     */
    private $cache;

    /**
     * @var string
     *
     * @ORM\Column(name="session", type="blob", nullable=true)
     */
    private $session;

    /**
     * @var string
     *
     * @ORM\Column(name="sid", type="string", length=128)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $sid;

    /**
     * @var string
     *
     * @ORM\Column(name="ssid", type="string", length=128)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $ssid;


    /**
     * Set uid
     *
     * @param integer $uid
     * @return Sessions
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
     * Set hostname
     *
     * @param string $hostname
     * @return Sessions
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
     * @return Sessions
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
     * Set cache
     *
     * @param integer $cache
     * @return Sessions
     */
    public function setCache($cache)
    {
        $this->cache = $cache;
    
        return $this;
    }

    /**
     * Get cache
     *
     * @return integer 
     */
    public function getCache()
    {
        return $this->cache;
    }

    /**
     * Set session
     *
     * @param string $session
     * @return Sessions
     */
    public function setSession($session)
    {
        $this->session = $session;
    
        return $this;
    }

    /**
     * Get session
     *
     * @return string 
     */
    public function getSession()
    {
        return $this->session;
    }

    /**
     * Set sid
     *
     * @param string $sid
     * @return Sessions
     */
    public function setSid($sid)
    {
        $this->sid = $sid;
    
        return $this;
    }

    /**
     * Get sid
     *
     * @return string 
     */
    public function getSid()
    {
        return $this->sid;
    }

    /**
     * Set ssid
     *
     * @param string $ssid
     * @return Sessions
     */
    public function setSsid($ssid)
    {
        $this->ssid = $ssid;
    
        return $this;
    }

    /**
     * Get ssid
     *
     * @return string 
     */
    public function getSsid()
    {
        return $this->ssid;
    }
}
