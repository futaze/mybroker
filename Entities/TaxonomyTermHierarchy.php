<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * TaxonomyTermHierarchy
 *
 * @ORM\Table(name="taxonomy_term_hierarchy")
 * @ORM\Entity
 */
class TaxonomyTermHierarchy
{
    /**
     * @var integer
     *
     * @ORM\Column(name="tid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $tid;

    /**
     * @var integer
     *
     * @ORM\Column(name="parent", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $parent;


    /**
     * Set tid
     *
     * @param integer $tid
     * @return TaxonomyTermHierarchy
     */
    public function setTid($tid)
    {
        $this->tid = $tid;
    
        return $this;
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

    /**
     * Set parent
     *
     * @param integer $parent
     * @return TaxonomyTermHierarchy
     */
    public function setParent($parent)
    {
        $this->parent = $parent;
    
        return $this;
    }

    /**
     * Get parent
     *
     * @return integer 
     */
    public function getParent()
    {
        return $this->parent;
    }
}
