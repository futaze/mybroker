<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * RdfMapping
 *
 * @ORM\Table(name="rdf_mapping")
 * @ORM\Entity
 */
class RdfMapping
{
    /**
     * @var string
     *
     * @ORM\Column(name="mapping", type="blob", nullable=true)
     */
    private $mapping;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=128)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="bundle", type="string", length=128)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $bundle;


    /**
     * Set mapping
     *
     * @param string $mapping
     * @return RdfMapping
     */
    public function setMapping($mapping)
    {
        $this->mapping = $mapping;
    
        return $this;
    }

    /**
     * Get mapping
     *
     * @return string 
     */
    public function getMapping()
    {
        return $this->mapping;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return RdfMapping
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
     * Set bundle
     *
     * @param string $bundle
     * @return RdfMapping
     */
    public function setBundle($bundle)
    {
        $this->bundle = $bundle;
    
        return $this;
    }

    /**
     * Get bundle
     *
     * @return string 
     */
    public function getBundle()
    {
        return $this->bundle;
    }
}
