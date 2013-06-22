<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * CacheUpdate
 *
 * @ORM\Table(name="cache_update")
 * @ORM\Entity
 */
class CacheUpdate
{
    /**
     * @var string
     *
     * @ORM\Column(name="data", type="blob", nullable=true)
     */
    private $data;

    /**
     * @var integer
     *
     * @ORM\Column(name="expire", type="integer", nullable=false)
     */
    private $expire;

    /**
     * @var integer
     *
     * @ORM\Column(name="created", type="integer", nullable=false)
     */
    private $created;

    /**
     * @var integer
     *
     * @ORM\Column(name="serialized", type="smallint", nullable=false)
     */
    private $serialized;

    /**
     * @var string
     *
     * @ORM\Column(name="cid", type="string", length=255)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cid;


    /**
     * Set data
     *
     * @param string $data
     * @return CacheUpdate
     */
    public function setData($data)
    {
        $this->data = $data;
    
        return $this;
    }

    /**
     * Get data
     *
     * @return string 
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Set expire
     *
     * @param integer $expire
     * @return CacheUpdate
     */
    public function setExpire($expire)
    {
        $this->expire = $expire;
    
        return $this;
    }

    /**
     * Get expire
     *
     * @return integer 
     */
    public function getExpire()
    {
        return $this->expire;
    }

    /**
     * Set created
     *
     * @param integer $created
     * @return CacheUpdate
     */
    public function setCreated($created)
    {
        $this->created = $created;
    
        return $this;
    }

    /**
     * Get created
     *
     * @return integer 
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set serialized
     *
     * @param integer $serialized
     * @return CacheUpdate
     */
    public function setSerialized($serialized)
    {
        $this->serialized = $serialized;
    
        return $this;
    }

    /**
     * Get serialized
     *
     * @return integer 
     */
    public function getSerialized()
    {
        return $this->serialized;
    }

    /**
     * Get cid
     *
     * @return string 
     */
    public function getCid()
    {
        return $this->cid;
    }
}
