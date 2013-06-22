<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Node
 *
 * @ORM\Table(name="node")
 * @ORM\Entity
 */
class Node
{
    /**
     * @var integer
     *
     * @ORM\Column(name="vid", type="integer", nullable=true)
     */
    private $vid;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=32, nullable=false)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="language", type="string", length=12, nullable=false)
     */
    private $language;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=false)
     */
    private $title;

    /**
     * @var integer
     *
     * @ORM\Column(name="uid", type="integer", nullable=false)
     */
    private $uid;

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="integer", nullable=false)
     */
    private $status;

    /**
     * @var integer
     *
     * @ORM\Column(name="created", type="integer", nullable=false)
     */
    private $created;

    /**
     * @var integer
     *
     * @ORM\Column(name="changed", type="integer", nullable=false)
     */
    private $changed;

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
     * @ORM\Column(name="tnid", type="integer", nullable=false)
     */
    private $tnid;

    /**
     * @var integer
     *
     * @ORM\Column(name="translate", type="integer", nullable=false)
     */
    private $translate;

    /**
     * @var integer
     *
     * @ORM\Column(name="nid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $nid;


    /**
     * Set vid
     *
     * @param integer $vid
     * @return Node
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
     * Set type
     *
     * @param string $type
     * @return Node
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
     * Set language
     *
     * @param string $language
     * @return Node
     */
    public function setLanguage($language)
    {
        $this->language = $language;
    
        return $this;
    }

    /**
     * Get language
     *
     * @return string 
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Node
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
     * Set uid
     *
     * @param integer $uid
     * @return Node
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
     * Set status
     *
     * @param integer $status
     * @return Node
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
     * Set created
     *
     * @param integer $created
     * @return Node
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
     * Set changed
     *
     * @param integer $changed
     * @return Node
     */
    public function setChanged($changed)
    {
        $this->changed = $changed;
    
        return $this;
    }

    /**
     * Get changed
     *
     * @return integer 
     */
    public function getChanged()
    {
        return $this->changed;
    }

    /**
     * Set comment
     *
     * @param integer $comment
     * @return Node
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
     * @return Node
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
     * @return Node
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
     * Set tnid
     *
     * @param integer $tnid
     * @return Node
     */
    public function setTnid($tnid)
    {
        $this->tnid = $tnid;
    
        return $this;
    }

    /**
     * Get tnid
     *
     * @return integer 
     */
    public function getTnid()
    {
        return $this->tnid;
    }

    /**
     * Set translate
     *
     * @param integer $translate
     * @return Node
     */
    public function setTranslate($translate)
    {
        $this->translate = $translate;
    
        return $this;
    }

    /**
     * Get translate
     *
     * @return integer 
     */
    public function getTranslate()
    {
        return $this->translate;
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
