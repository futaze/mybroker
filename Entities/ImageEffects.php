<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * ImageEffects
 *
 * @ORM\Table(name="image_effects")
 * @ORM\Entity
 */
class ImageEffects
{
    /**
     * @var integer
     *
     * @ORM\Column(name="isid", type="integer", nullable=false)
     */
    private $isid;

    /**
     * @var integer
     *
     * @ORM\Column(name="weight", type="integer", nullable=false)
     */
    private $weight;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="data", type="blob", nullable=false)
     */
    private $data;

    /**
     * @var integer
     *
     * @ORM\Column(name="ieid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ieid;


    /**
     * Set isid
     *
     * @param integer $isid
     * @return ImageEffects
     */
    public function setIsid($isid)
    {
        $this->isid = $isid;
    
        return $this;
    }

    /**
     * Get isid
     *
     * @return integer 
     */
    public function getIsid()
    {
        return $this->isid;
    }

    /**
     * Set weight
     *
     * @param integer $weight
     * @return ImageEffects
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
     * Set name
     *
     * @param string $name
     * @return ImageEffects
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
     * Set data
     *
     * @param string $data
     * @return ImageEffects
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
     * Get ieid
     *
     * @return integer 
     */
    public function getIeid()
    {
        return $this->ieid;
    }
}
