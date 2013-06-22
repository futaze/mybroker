<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * TaxonomyTermData
 *
 * @ORM\Table(name="taxonomy_term_data")
 * @ORM\Entity
 */
class TaxonomyTermData
{
    /**
     * @var integer
     *
     * @ORM\Column(name="vid", type="integer", nullable=false)
     */
    private $vid;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="format", type="string", length=255, nullable=true)
     */
    private $format;

    /**
     * @var integer
     *
     * @ORM\Column(name="weight", type="integer", nullable=false)
     */
    private $weight;

    /**
     * @var integer
     *
     * @ORM\Column(name="tid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tid;


    /**
     * Set vid
     *
     * @param integer $vid
     * @return TaxonomyTermData
     */
    public function setVid($vid)
    {
        $this->vid = $vid;
    
        return $this;
    }

    /**
     * Get vid
     *
     * @return integer 
     */
    public function getVid()
    {
        return $this->vid;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return TaxonomyTermData
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
     * Set description
     *
     * @param string $description
     * @return TaxonomyTermData
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
     * Set format
     *
     * @param string $format
     * @return TaxonomyTermData
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
     * Set weight
     *
     * @param integer $weight
     * @return TaxonomyTermData
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
     * Get tid
     *
     * @return integer 
     */
    public function getTid()
    {
        return $this->tid;
    }
}
