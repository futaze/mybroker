<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * BlockRole
 *
 * @ORM\Table(name="block_role")
 * @ORM\Entity
 */
class BlockRole
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
     * @var integer
     *
     * @ORM\Column(name="rid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $rid;


    /**
     * Set module
     *
     * @param string $module
     * @return BlockRole
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
     * @return BlockRole
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
     * Set rid
     *
     * @param integer $rid
     * @return BlockRole
     */
    public function setRid($rid)
    {
        $this->rid = $rid;
    
        return $this;
    }

    /**
     * Get rid
     *
     * @return integer 
     */
    public function getRid()
    {
        return $this->rid;
    }
}
