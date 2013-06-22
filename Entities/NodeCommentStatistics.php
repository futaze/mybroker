<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * NodeCommentStatistics
 *
 * @ORM\Table(name="node_comment_statistics")
 * @ORM\Entity
 */
class NodeCommentStatistics
{
    /**
     * @var integer
     *
     * @ORM\Column(name="cid", type="integer", nullable=false)
     */
    private $cid;

    /**
     * @var integer
     *
     * @ORM\Column(name="last_comment_timestamp", type="integer", nullable=false)
     */
    private $lastCommentTimestamp;

    /**
     * @var string
     *
     * @ORM\Column(name="last_comment_name", type="string", length=60, nullable=true)
     */
    private $lastCommentName;

    /**
     * @var integer
     *
     * @ORM\Column(name="last_comment_uid", type="integer", nullable=false)
     */
    private $lastCommentUid;

    /**
     * @var integer
     *
     * @ORM\Column(name="comment_count", type="integer", nullable=false)
     */
    private $commentCount;

    /**
     * @var integer
     *
     * @ORM\Column(name="nid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $nid;


    /**
     * Set cid
     *
     * @param integer $cid
     * @return NodeCommentStatistics
     */
    public function setCid($cid)
    {
        $this->cid = $cid;
    
        return $this;
    }

    /**
     * Get cid
     *
     * @return integer 
     */
    public function getCid()
    {
        return $this->cid;
    }

    /**
     * Set lastCommentTimestamp
     *
     * @param integer $lastCommentTimestamp
     * @return NodeCommentStatistics
     */
    public function setLastCommentTimestamp($lastCommentTimestamp)
    {
        $this->lastCommentTimestamp = $lastCommentTimestamp;
    
        return $this;
    }

    /**
     * Get lastCommentTimestamp
     *
     * @return integer 
     */
    public function getLastCommentTimestamp()
    {
        return $this->lastCommentTimestamp;
    }

    /**
     * Set lastCommentName
     *
     * @param string $lastCommentName
     * @return NodeCommentStatistics
     */
    public function setLastCommentName($lastCommentName)
    {
        $this->lastCommentName = $lastCommentName;
    
        return $this;
    }

    /**
     * Get lastCommentName
     *
     * @return string 
     */
    public function getLastCommentName()
    {
        return $this->lastCommentName;
    }

    /**
     * Set lastCommentUid
     *
     * @param integer $lastCommentUid
     * @return NodeCommentStatistics
     */
    public function setLastCommentUid($lastCommentUid)
    {
        $this->lastCommentUid = $lastCommentUid;
    
        return $this;
    }

    /**
     * Get lastCommentUid
     *
     * @return integer 
     */
    public function getLastCommentUid()
    {
        return $this->lastCommentUid;
    }

    /**
     * Set commentCount
     *
     * @param integer $commentCount
     * @return NodeCommentStatistics
     */
    public function setCommentCount($commentCount)
    {
        $this->commentCount = $commentCount;
    
        return $this;
    }

    /**
     * Get commentCount
     *
     * @return integer 
     */
    public function getCommentCount()
    {
        return $this->commentCount;
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
