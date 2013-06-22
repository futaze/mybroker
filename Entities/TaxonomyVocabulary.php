<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * TaxonomyVocabulary
 *
 * @ORM\Table(name="taxonomy_vocabulary")
 * @ORM\Entity
 */
class TaxonomyVocabulary
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="machine_name", type="string", length=255, nullable=false)
     */
    private $machineName;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var boolean
     *
     * @ORM\Column(name="hierarchy", type="boolean", nullable=false)
     */
    private $hierarchy;

    /**
     * @var string
     *
     * @ORM\Column(name="module", type="string", length=255, nullable=false)
     */
    private $module;

    /**
     * @var integer
     *
     * @ORM\Column(name="weight", type="integer", nullable=false)
     */
    private $weight;

    /**
     * @var integer
     *
     * @ORM\Column(name="vid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $vid;


    /**
     * Set name
     *
     * @param string $name
     * @return TaxonomyVocabulary
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
     * Set machineName
     *
     * @param string $machineName
     * @return TaxonomyVocabulary
     */
    public function setMachineName($machineName)
    {
        $this->machineName = $machineName;
    
        return $this;
    }

    /**
     * Get machineName
     *
     * @return string 
     */
    public function getMachineName()
    {
        return $this->machineName;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return TaxonomyVocabulary
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
     * Set hierarchy
     *
     * @param boolean $hierarchy
     * @return TaxonomyVocabulary
     */
    public function setHierarchy($hierarchy)
    {
        $this->hierarchy = $hierarchy;
    
        return $this;
    }

    /**
     * Get hierarchy
     *
     * @return boolean 
     */
    public function getHierarchy()
    {
        return $this->hierarchy;
    }

    /**
     * Set module
     *
     * @param string $module
     * @return TaxonomyVocabulary
     */
    public function setModule($module)
    {
        $this->module = $module;
    
        return $this;
    }

    /**
     * Get module
     *
     * @return string 
     */
    public function getModule()
    {
        return $this->module;
    }

    /**
     * Set weight
     *
     * @param integer $weight
     * @return TaxonomyVocabulary
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
     * Get vid
     *
     * @return integer 
     */
    public function getVid()
    {
        return $this->vid;
    }
}
