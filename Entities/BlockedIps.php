<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * BlockedIps
 *
 * @ORM\Table(name="blocked_ips")
 * @ORM\Entity
 */
class BlockedIps
{
    /**
     * @var string
     *
     * @ORM\Column(name="ip", type="string", length=40, nullable=false)
     */
    private $ip;

    /**
     * @var integer
     *
     * @ORM\Column(name="iid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $iid;


    /**
     * Set ip
     *
     * @param string $ip
     * @return BlockedIps
     */
    public function setIp($ip)
    {
        $this->ip = $ip;
    
        return $this;
    }

    /**
     * Get ip
     *
     * @return string 
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * Get iid
     *
     * @return integer 
     */
    public function getIid()
    {
        return $this->iid;
    }
}
