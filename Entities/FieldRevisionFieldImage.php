<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * FieldRevisionFieldImage
 *
 * @ORM\Table(name="field_revision_field_image")
 * @ORM\Entity
 */
class FieldRevisionFieldImage
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
     * @ORM\Column(name="field_image_fid", type="integer", nullable=true)
     */
    private $fieldImageFid;

    /**
     * @var string
     *
     * @ORM\Column(name="field_image_alt", type="string", length=512, nullable=true)
     */
    private $fieldImageAlt;

    /**
     * @var string
     *
     * @ORM\Column(name="field_image_title", type="string", length=1024, nullable=true)
     */
    private $fieldImageTitle;

    /**
     * @var integer
     *
     * @ORM\Column(name="field_image_width", type="integer", nullable=true)
     */
    private $fieldImageWidth;

    /**
     * @var integer
     *
     * @ORM\Column(name="field_image_height", type="integer", nullable=true)
     */
    private $fieldImageHeight;

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
     * @return FieldRevisionFieldImage
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
     * Set fieldImageFid
     *
     * @param integer $fieldImageFid
     * @return FieldRevisionFieldImage
     */
    public function setFieldImageFid($fieldImageFid)
    {
        $this->fieldImageFid = $fieldImageFid;
    
        return $this;
    }

    /**
     * Get fieldImageFid
     *
     * @return integer 
     */
    public function getFieldImageFid()
    {
        return $this->fieldImageFid;
    }

    /**
     * Set fieldImageAlt
     *
     * @param string $fieldImageAlt
     * @return FieldRevisionFieldImage
     */
    public function setFieldImageAlt($fieldImageAlt)
    {
        $this->fieldImageAlt = $fieldImageAlt;
    
        return $this;
    }

    /**
     * Get fieldImageAlt
     *
     * @return string 
     */
    public function getFieldImageAlt()
    {
        return $this->fieldImageAlt;
    }

    /**
     * Set fieldImageTitle
     *
     * @param string $fieldImageTitle
     * @return FieldRevisionFieldImage
     */
    public function setFieldImageTitle($fieldImageTitle)
    {
        $this->fieldImageTitle = $fieldImageTitle;
    
        return $this;
    }

    /**
     * Get fieldImageTitle
     *
     * @return string 
     */
    public function getFieldImageTitle()
    {
        return $this->fieldImageTitle;
    }

    /**
     * Set fieldImageWidth
     *
     * @param integer $fieldImageWidth
     * @return FieldRevisionFieldImage
     */
    public function setFieldImageWidth($fieldImageWidth)
    {
        $this->fieldImageWidth = $fieldImageWidth;
    
        return $this;
    }

    /**
     * Get fieldImageWidth
     *
     * @return integer 
     */
    public function getFieldImageWidth()
    {
        return $this->fieldImageWidth;
    }

    /**
     * Set fieldImageHeight
     *
     * @param integer $fieldImageHeight
     * @return FieldRevisionFieldImage
     */
    public function setFieldImageHeight($fieldImageHeight)
    {
        $this->fieldImageHeight = $fieldImageHeight;
    
        return $this;
    }

    /**
     * Get fieldImageHeight
     *
     * @return integer 
     */
    public function getFieldImageHeight()
    {
        return $this->fieldImageHeight;
    }

    /**
     * Set entityType
     *
     * @param string $entityType
     * @return FieldRevisionFieldImage
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
     * @return FieldRevisionFieldImage
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
     * @return FieldRevisionFieldImage
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
     * @return FieldRevisionFieldImage
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
     * @return FieldRevisionFieldImage
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
     * @return FieldRevisionFieldImage
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
