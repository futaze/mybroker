<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * FieldDataCommentBody
 *
 * @ORM\Table(name="field_data_comment_body")
 * @ORM\Entity
 */
class FieldDataCommentBody
{
    /**
     * @var string
     *
     * @ORM\Column(name="bundle", type="string", length=128, nullable=false)
     */
    private $bundle;

    /**
     * @var integer
     *
     * @ORM\Column(name="revision_id", type="integer", nullable=true)
     */
    private $revisionId;

    /**
     * @var string
     *
     * @ORM\Column(name="comment_body_value", type="text", nullable=true)
     */
    private $commentBodyValue;

    /**
     * @var string
     *
     * @ORM\Column(name="comment_body_format", type="string", length=255, nullable=true)
     */
    private $commentBodyFormat;

    /**
     * @var string
     *
     * @ORM\Column(name="entity_type", type="string", length=128)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $entityType;

    /**
     * @var integer
     *
     * @ORM\Column(name="entity_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $entityId;

    /**
     * @var boolean
     *
     * @ORM\Column(name="deleted", type="boolean")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $deleted;

    /**
     * @var integer
     *
     * @ORM\Column(name="delta", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $delta;

    /**
     * @var string
     *
     * @ORM\Column(name="language", type="string", length=32)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $language;


    /**
     * Set bundle
     *
     * @param string $bundle
     * @return FieldDataCommentBody
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

    /**
     * Set revisionId
     *
     * @param integer $revisionId
     * @return FieldDataCommentBody
     */
    public function setRevisionId($revisionId)
    {
        $this->revisionId = $revisionId;
    
        return $this;
    }

    /**
     * Get revisionId
     *
     * @return integer 
     */
    public function getRevisionId()
    {
        return $this->revisionId;
    }

    /**
     * Set commentBodyValue
     *
     * @param string $commentBodyValue
     * @return FieldDataCommentBody
     */
    public function setCommentBodyValue($commentBodyValue)
    {
        $this->commentBodyValue = $commentBodyValue;
    
        return $this;
    }

    /**
     * Get commentBodyValue
     *
     * @return string 
     */
    public function getCommentBodyValue()
    {
        return $this->commentBodyValue;
    }

    /**
     * Set commentBodyFormat
     *
     * @param string $commentBodyFormat
     * @return FieldDataCommentBody
     */
    public function setCommentBodyFormat($commentBodyFormat)
    {
        $this->commentBodyFormat = $commentBodyFormat;
    
        return $this;
    }

    /**
     * Get commentBodyFormat
     *
     * @return string 
     */
    public function getCommentBodyFormat()
    {
        return $this->commentBodyFormat;
    }

    /**
     * Set entityType
     *
     * @param string $entityType
     * @return FieldDataCommentBody
     */
    public function setEntityType($entityType)
    {
        $this->entityType = $entityType;
    
        return $this;
    }

    /**
     * Get entityType
     *
     * @return string 
     */
    public function getEntityType()
    {
        return $this->entityType;
    }

    /**
     * Set entityId
     *
     * @param integer $entityId
     * @return FieldDataCommentBody
     */
    public function setEntityId($entityId)
    {
        $this->entityId = $entityId;
    
        return $this;
    }

    /**
     * Get entityId
     *
     * @return integer 
     */
    public function getEntityId()
    {
        return $this->entityId;
    }

    /**
     * Set deleted
     *
     * @param boolean $deleted
     * @return FieldDataCommentBody
     */
    public function setDeleted($deleted)
    {
        $this->deleted = $deleted;
    
        return $this;
    }

    /**
     * Get deleted
     *
     * @return boolean 
     */
    public function getDeleted()
    {
        return $this->deleted;
    }

    /**
     * Set delta
     *
     * @param integer $delta
     * @return FieldDataCommentBody
     */
    public function setDelta($delta)
    {
        $this->delta = $delta;
    
        return $this;
    }

    /**
     * Get delta
     *
     * @return integer 
     */
    public function getDelta()
    {
        return $this->delta;
    }

    /**
     * Set language
     *
     * @param string $language
     * @return FieldDataCommentBody
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
}
