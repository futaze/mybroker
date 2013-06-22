<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * BlockNodeType
 *
 * @ORM\Table(name="block_node_type")
 * @ORM\Entity
 */
class BlockNodeType
{
    /**
     * @var string
     *
     * @ORM\Column(name="module", type="string", length=64)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $module;

    /**
     * @var string
     *
     * @ORM\Column(name="delta", type="string", length=32)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $delta;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=32)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $type;


    /**
     * Set module
     *
     * @param string $module
     * @return BlockNodeType
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
     * Set delta
     *
     * @param string $delta
     * @return BlockNodeType
     */
    public function setDelta($delta)
    {
        $this->delta = $delta;
    
        return $this;
    }

    /**
     * Get delta
     *
     * @return string 
     */
    public function getDelta()
    {
        return $this->delta;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return BlockNodeType
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
}
