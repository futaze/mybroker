<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * DateFormats
 *
 * @ORM\Table(name="date_formats")
 * @ORM\Entity
 */
class DateFormats
{
    /**
     * @var string
     *
     * @ORM\Column(name="format", type="string", length=100, nullable=false)
     */
    private $format;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=64, nullable=false)
     */
    private $type;

    /**
     * @var boolean
     *
     * @ORM\Column(name="locked", type="boolean", nullable=false)
     */
    private $locked;

    /**
     * @var integer
     *
     * @ORM\Column(name="dfid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $dfid;


    /**
     * Set format
     *
     * @param string $format
     * @return DateFormats
     */
    public function setFormat($format)
    {
        $this->format = $format;
    
        return $this;
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

    /**
     * Set type
     *
     * @param string $type
     * @return DateFormats
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
     * Set locked
     *
     * @param boolean $locked
     * @return DateFormats
     */
    public function setLocked($locked)
    {
        $this->locked = $locked;
    
        return $this;
    }

    /**
     * Get locked
     *
     * @return boolean 
     */
    public function getLocked()
    {
        return $this->locked;
    }

    /**
     * Get dfid
     *
     * @return integer 
     */
    public function getDfid()
    {
        return $this->dfid;
    }
}
