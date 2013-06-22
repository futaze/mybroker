<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * FilterFormat
 *
 * @ORM\Table(name="filter_format")
 * @ORM\Entity
 */
class FilterFormat
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var boolean
     *
     * @ORM\Column(name="cache", type="boolean", nullable=false)
     */
    private $cache;

    /**
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean", nullable=false)
     */
    private $status;

    /**
     * @var integer
     *
     * @ORM\Column(name="weight", type="integer", nullable=false)
     */
    private $weight;

    /**
     * @var string
     *
     * @ORM\Column(name="format", type="string", length=255)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $format;


    /**
     * Set name
     *
     * @param string $name
     * @return FilterFormat
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
     * Set cache
     *
     * @param boolean $cache
     * @return FilterFormat
     */
    public function setCache($cache)
    {
        $this->cache = $cache;
    
        return $this;
    }

    /**
     * Get cache
     *
     * @return boolean 
     */
    public function getCache()
    {
        return $this->cache;
    }

    /**
     * Set status
     *
     * @param boolean $status
     * @return FilterFormat
     */
    public function setStatus($status)
    {
        $this->status = $status;
    
        return $this;
    }

    /**
     * Get status
     *
     * @return boolean 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set weight
     *
     * @param integer $weight
     * @return FilterFormat
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
    
        return $this;
    }

    /**
     * Get weight
     *
     * @return integer 
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Get format
     *
     * @return string 
     */
    public function getFormat()
    {
        return $this->format;
    }
}
