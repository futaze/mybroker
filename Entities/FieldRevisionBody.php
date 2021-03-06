<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * FieldRevisionBody
 *
 * @ORM\Table(name="field_revision_body")
 * @ORM\Entity
 */
class FieldRevisionBody
{
    /**
     * @var string
     *
     * @ORM\Column(name="bundle", type="string", length=128, nullable=false)
     */
    private $bundle;

    /**
     * @var string
     *
     * @ORM\Column(name="body_value", type="text", nullable=true)
     */
    private $bodyValue;

    /**
     * @var string
     *
     * @ORM\Column(name="body_summary", type="text", nullable=true)
     */
    private $bodySummary;

    /**
     * @var string
     *
     * @ORM\Column(name="body_format", type="string", length=255, nullable=true)
     */
    private $bodyFormat;

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
     * @return FieldRevisionBody
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
     * Set bodyValue
     *
     * @param string $bodyValue
     * @return FieldRevisionBody
     */
    public function setBodyValue($bodyValue)
    {
        $this->bodyValue = $bodyValue;
    
        return $this;
    }

    /**
     * Get bodyValue
     *
     * @return string 
     */
    public function getBodyValue()
    {
        return $this->bodyValue;
    }

    /**
     * Set bodySummary
     *
     * @param string $bodySummary
     * @return FieldRevisionBody
     */
    public function setBodySummary($bodySummary)
    {
        $this->bodySummary = $bodySummary;
    
        return $this;
    }

    /**
     * Get bodySummary
     *
     * @return string 
     */
    public function getBodySummary()
    {
        return $this->bodySummary;
    }

    /**
     * Set bodyFormat
     *
     * @param string $bodyFormat
     * @return FieldRevisionBody
     */
    public function setBodyFormat($bodyFormat)
    {
        $this->bodyFormat = $bodyFormat;
    
        return $this;
    }

    /**
     * Get bodyFormat
     *
     * @return string 
     */
    public function getBodyFormat()
    {
        return $this->bodyFormat;
    }

    /**
     * Set entityType
     *
     * @param string $entityType
     * @return FieldRevisionBody
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
     * @return FieldRevisionBody
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
     * @return FieldRevisionBody
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
     * @return FieldRevisionBody
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
     * @return FieldRevisionBody
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
     * @return FieldRevisionBody
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
