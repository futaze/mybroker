<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * FieldRevisionFieldTags
 *
 * @ORM\Table(name="field_revision_field_tags")
 * @ORM\Entity
 */
class FieldRevisionFieldTags
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
     * @ORM\Column(name="field_tags_tid", type="integer", nullable=true)
     */
    private $fieldTagsTid;

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
     * @var integer
     *
     * @ORM\Column(name="revision_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $revisionId;

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
     * @return FieldRevisionFieldTags
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
     * Set fieldTagsTid
     *
     * @param integer $fieldTagsTid
     * @return FieldRevisionFieldTags
     */
    public function setFieldTagsTid($fieldTagsTid)
    {
        $this->fieldTagsTid = $fieldTagsTid;
    
        return $this;
    }

    /**
     * Get fieldTagsTid
     *
     * @return integer 
     */
    public function getFieldTagsTid()
    {
        return $this->fieldTagsTid;
    }

    /**
     * Set entityType
     *
     * @param string $entityType
     * @return FieldRevisionFieldTags
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
     * @return FieldRevisionFieldTags
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
     * Set revisionId
     *
     * @param integer $revisionId
     * @return FieldRevisionFieldTags
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
     * Set deleted
     *
     * @param boolean $deleted
     * @return FieldRevisionFieldTags
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
     * @return FieldRevisionFieldTags
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
     * @return FieldRevisionFieldTags
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
