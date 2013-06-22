<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * NodeAccess
 *
 * @ORM\Table(name="node_access")
 * @ORM\Entity
 */
class NodeAccess
{
    /**
     * @var boolean
     *
     * @ORM\Column(name="grant_view", type="boolean", nullable=false)
     */
    private $grantView;

    /**
     * @var boolean
     *
     * @ORM\Column(name="grant_update", type="boolean", nullable=false)
     */
    private $grantUpdate;

    /**
     * @var boolean
     *
     * @ORM\Column(name="grant_delete", type="boolean", nullable=false)
     */
    private $grantDelete;

    /**
     * @var integer
     *
     * @ORM\Column(name="nid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $nid;

    /**
     * @var integer
     *
     * @ORM\Column(name="gid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $gid;

    /**
     * @var string
     *
     * @ORM\Column(name="realm", type="string", length=255)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $realm;


    /**
     * Set grantView
     *
     * @param boolean $grantView
     * @return NodeAccess
     */
    public function setGrantView($grantView)
    {
        $this->grantView = $grantView;
    
        return $this;
    }

    /**
     * Get grantView
     *
     * @return boolean 
     */
    public function getGrantView()
    {
        return $this->grantView;
    }

    /**
     * Set grantUpdate
     *
     * @param boolean $grantUpdate
     * @return NodeAccess
     */
    public function setGrantUpdate($grantUpdate)
    {
        $this->grantUpdate = $grantUpdate;
    
        return $this;
    }

    /**
     * Get grantUpdate
     *
     * @return boolean 
     */
    public function getGrantUpdate()
    {
        return $this->grantUpdate;
    }

    /**
     * Set grantDelete
     *
     * @param boolean $grantDelete
     * @return NodeAccess
     */
    public function setGrantDelete($grantDelete)
    {
        $this->grantDelete = $grantDelete;
    
        return $this;
    }

    /**
     * Get grantDelete
     *
     * @return boolean 
     */
    public function getGrantDelete()
    {
        return $this->grantDelete;
    }

    /**
     * Set nid
     *
     * @param integer $nid
     * @return NodeAccess
     */
    public function setNid($nid)
    {
        $this->nid = $nid;
    
        return $this;
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

    /**
     * Set gid
     *
     * @param integer $gid
     * @return NodeAccess
     */
    public function setGid($gid)
    {
        $this->gid = $gid;
    
        return $this;
    }

    /**
     * Get gid
     *
     * @return integer 
     */
    public function getGid()
    {
        return $this->gid;
    }

    /**
     * Set realm
     *
     * @param string $realm
     * @return NodeAccess
     */
    public function setRealm($realm)
    {
        $this->realm = $realm;
    
        return $this;
    }

    /**
     * Get realm
     *
     * @return string 
     */
    public function getRealm()
    {
        return $this->realm;
    }
}
