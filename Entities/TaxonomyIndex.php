<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * TaxonomyIndex
 *
 * @ORM\Table(name="taxonomy_index")
 * @ORM\Entity
 */
class TaxonomyIndex
{
    /**
     * @var integer
     *
     * @ORM\Column(name="tid", type="integer", nullable=false)
     */
    private $tid;

    /**
     * @var boolean
     *
     * @ORM\Column(name="sticky", type="boolean", nullable=true)
     */
    private $sticky;

    /**
     * @var integer
     *
     * @ORM\Column(name="created", type="integer", nullable=false)
     */
    private $created;

    /**
     * @var integer
     *
     * @ORM\Column(name="nid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $nid;


    /**
     * Set tid
     *
     * @param integer $tid
     * @return TaxonomyIndex
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
     * Set sticky
     *
     * @param boolean $sticky
     * @return TaxonomyIndex
     */
    public function setSticky($sticky)
    {
        $this->sticky = $sticky;
    
        return $this;
    }

    /**
     * Get sticky
     *
     * @return boolean 
     */
    public function getSticky()
    {
        return $this->sticky;
    }

    /**
     * Set created
     *
     * @param integer $created
     * @return TaxonomyIndex
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
     * Get nid
     *
     * @return integer 
     */
    public function getNid()
    {
        return $this->nid;
    }
}
