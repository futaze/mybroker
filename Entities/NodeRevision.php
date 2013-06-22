<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * NodeRevision
 *
 * @ORM\Table(name="node_revision")
 * @ORM\Entity
 */
class NodeRevision
{
    /**
     * @var integer
     *
     * @ORM\Column(name="nid", type="integer", nullable=false)
     */
    private $nid;

    /**
     * @var integer
     *
     * @ORM\Column(name="uid", type="integer", nullable=false)
     */
    private $uid;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=false)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="log", type="text", nullable=false)
     */
    private $log;

    /**
     * @var integer
     *
     * @ORM\Column(name="timestamp", type="integer", nullable=false)
     */
    private $timestamp;

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="integer", nullable=false)
     */
    private $status;

    /**
     * @var integer
     *
     * @ORM\Column(name="comment", type="integer", nullable=false)
     */
    private $comment;

    /**
     * @var integer
     *
     * @ORM\Column(name="promote", type="integer", nullable=false)
     */
    private $promote;

    /**
     * @var integer
     *
     * @ORM\Column(name="sticky", type="integer", nullable=false)
     */
    private $sticky;

    /**
     * @var integer
     *
     * @ORM\Column(name="vid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $vid;


    /**
     * Set nid
     *
     * @param integer $nid
     * @return NodeRevision
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
     * Set uid
     *
     * @param integer $uid
     * @return NodeRevision
     */
    public function setUid($uid)
    {
        $this->uid = $uid;
    
        return $this;
    }

    /**
     * Get uid
     *
     * @return integer 
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return NodeRevision
     */
    public function setTitle($title)
    {
        $this->title = $title;
    
        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set log
     *
     * @param string $log
     * @return NodeRevision
     */
    public function setLog($log)
    {
        $this->log = $log;
    
        return $this;
    }

    /**
     * Get log
     *
     * @return string 
     */
    public function getLog()
    {
        return $this->log;
    }

    /**
     * Set timestamp
     *
     * @param integer $timestamp
     * @return NodeRevision
     */
    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;
    
        return $this;
    }

    /**
     * Get timestamp
     *
     * @return integer 
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return NodeRevision
     */
    public function setStatus($status)
    {
        $this->status = $status;
    
        return $this;
    }

    /**
     * Get status
     *
     * @return integer 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set comment
     *
     * @param integer $comment
     * @return NodeRevision
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
    
        return $this;
    }

    /**
     * Get comment
     *
     * @return integer 
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set promote
     *
     * @param integer $promote
     * @return NodeRevision
     */
    public function setPromote($promote)
    {
        $this->promote = $promote;
    
        return $this;
    }

    /**
     * Get promote
     *
     * @return integer 
     */
    public function getPromote()
    {
        return $this->promote;
    }

    /**
     * Set sticky
     *
     * @param integer $sticky
     * @return NodeRevision
     */
    public function setSticky($sticky)
    {
        $this->sticky = $sticky;
    
        return $this;
    }

    /**
     * Get sticky
     *
     * @return integer 
     */
    public function getSticky()
    {
        return $this->sticky;
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
