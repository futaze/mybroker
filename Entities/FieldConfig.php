<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * FieldConfig
 *
 * @ORM\Table(name="field_config")
 * @ORM\Entity
 */
class FieldConfig
{
    /**
     * @var string
     *
     * @ORM\Column(name="field_name", type="string", length=32, nullable=false)
     */
    private $fieldName;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=128, nullable=false)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="module", type="string", length=128, nullable=false)
     */
    private $module;

    /**
     * @var boolean
     *
     * @ORM\Column(name="active", type="boolean", nullable=false)
     */
    private $active;

    /**
     * @var string
     *
     * @ORM\Column(name="storage_type", type="string", length=128, nullable=false)
     */
    private $storageType;

    /**
     * @var string
     *
     * @ORM\Column(name="storage_module", type="string", length=128, nullable=false)
     */
    private $storageModule;

    /**
     * @var boolean
     *
     * @ORM\Column(name="storage_active", type="boolean", nullable=false)
     */
    private $storageActive;

    /**
     * @var boolean
     *
     * @ORM\Column(name="locked", type="boolean", nullable=false)
     */
    private $locked;

    /**
     * @var string
     *
     * @ORM\Column(name="data", type="blob", nullable=false)
     */
    private $data;

    /**
     * @var boolean
     *
     * @ORM\Column(name="cardinality", type="boolean", nullable=false)
     */
    private $cardinality;

    /**
     * @var boolean
     *
     * @ORM\Column(name="translatable", type="boolean", nullable=false)
     */
    private $translatable;

    /**
     * @var boolean
     *
     * @ORM\Column(name="deleted", type="boolean", nullable=false)
     */
    private $deleted;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


    /**
     * Set fieldName
     *
     * @param string $fieldName
     * @return FieldConfig
     */
    public function setFieldName($fieldName)
    {
        $this->fieldName = $fieldName;
    
        return $this;
    }

    /**
     * Get fieldName
     *
     * @return string 
     */
    public function getFieldName()
    {
        return $this->fieldName;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return FieldConfig
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
     * Set module
     *
     * @param string $module
     * @return FieldConfig
     */
    public function setModule($module)
    {
        $this->module = $module;
    
        return $this;
    }

    /**
     * Get module
     *
     * @return string 
     */
    public function getModule()
    {
        return $this->module;
    }

    /**
     * Set active
     *
     * @param boolean $active
     * @return FieldConfig
     */
    public function setActive($active)
    {
        $this->active = $active;
    
        return $this;
    }

    /**
     * Get active
     *
     * @return boolean 
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set storageType
     *
     * @param string $storageType
     * @return FieldConfig
     */
    public function setStorageType($storageType)
    {
        $this->storageType = $storageType;
    
        return $this;
    }

    /**
     * Get storageType
     *
     * @return string 
     */
    public function getStorageType()
    {
        return $this->storageType;
    }

    /**
     * Set storageModule
     *
     * @param string $storageModule
     * @return FieldConfig
     */
    public function setStorageModule($storageModule)
    {
        $this->storageModule = $storageModule;
    
        return $this;
    }

    /**
     * Get storageModule
     *
     * @return string 
     */
    public function getStorageModule()
    {
        return $this->storageModule;
    }

    /**
     * Set storageActive
     *
     * @param boolean $storageActive
     * @return FieldConfig
     */
    public function setStorageActive($storageActive)
    {
        $this->storageActive = $storageActive;
    
        return $this;
    }

    /**
     * Get storageActive
     *
     * @return boolean 
     */
    public function getStorageActive()
    {
        return $this->storageActive;
    }

    /**
     * Set locked
     *
     * @param boolean $locked
     * @return FieldConfig
     */
    public function setLocked($locked)
    {
        $this->locked = $locked;
    
        return $this;
    }

    /**
     * Get locked
     *
     * @return boolean 
     */
    public function getLocked()
    {
        return $this->locked;
    }

    /**
     * Set data
     *
     * @param string $data
     * @return FieldConfig
     */
    public function setData($data)
    {
        $this->data = $data;
    
        return $this;
    }

    /**
     * Get data
     *
     * @return string 
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Set cardinality
     *
     * @param boolean $cardinality
     * @return FieldConfig
     */
    public function setCardinality($cardinality)
    {
        $this->cardinality = $cardinality;
    
        return $this;
    }

    /**
     * Get cardinality
     *
     * @return boolean 
     */
    public function getCardinality()
    {
        return $this->cardinality;
    }

    /**
     * Set translatable
     *
     * @param boolean $translatable
     * @return FieldConfig
     */
    public function setTranslatable($translatable)
    {
        $this->translatable = $translatable;
    
        return $this;
    }

    /**
     * Get translatable
     *
     * @return boolean 
     */
    public function getTranslatable()
    {
        return $this->translatable;
    }

    /**
     * Set deleted
     *
     * @param boolean $deleted
     * @return FieldConfig
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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
