<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * NodeType
 *
 * @ORM\Table(name="node_type")
 * @ORM\Entity
 */
class NodeType
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="base", type="string", length=255, nullable=false)
     */
    private $base;

    /**
     * @var string
     *
     * @ORM\Column(name="module", type="string", length=255, nullable=false)
     */
    private $module;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="help", type="text", nullable=false)
     */
    private $help;

    /**
     * @var boolean
     *
     * @ORM\Column(name="has_title", type="boolean", nullable=false)
     */
    private $hasTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="title_label", type="string", length=255, nullable=false)
     */
    private $titleLabel;

    /**
     * @var boolean
     *
     * @ORM\Column(name="custom", type="boolean", nullable=false)
     */
    private $custom;

    /**
     * @var boolean
     *
     * @ORM\Column(name="modified", type="boolean", nullable=false)
     */
    private $modified;

    /**
     * @var boolean
     *
     * @ORM\Column(name="locked", type="boolean", nullable=false)
     */
    private $locked;

    /**
     * @var boolean
     *
     * @ORM\Column(name="disabled", type="boolean", nullable=false)
     */
    private $disabled;

    /**
     * @var string
     *
     * @ORM\Column(name="orig_type", type="string", length=255, nullable=false)
     */
    private $origType;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=32)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $type;


    /**
     * Set name
     *
     * @param string $name
     * @return NodeType
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set base
     *
     * @param string $base
     * @return NodeType
     */
    public function setBase($base)
    {
        $this->base = $base;
    
        return $this;
    }

    /**
     * Get base
     *
     * @return string 
     */
    public function getBase()
    {
        return $this->base;
    }

    /**
     * Set module
     *
     * @param string $module
     * @return NodeType
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
     * Set description
     *
     * @param string $description
     * @return NodeType
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set help
     *
     * @param string $help
     * @return NodeType
     */
    public function setHelp($help)
    {
        $this->help = $help;
    
        return $this;
    }

    /**
     * Get help
     *
     * @return string 
     */
    public function getHelp()
    {
        return $this->help;
    }

    /**
     * Set hasTitle
     *
     * @param boolean $hasTitle
     * @return NodeType
     */
    public function setHasTitle($hasTitle)
    {
        $this->hasTitle = $hasTitle;
    
        return $this;
    }

    /**
     * Get hasTitle
     *
     * @return boolean 
     */
    public function getHasTitle()
    {
        return $this->hasTitle;
    }

    /**
     * Set titleLabel
     *
     * @param string $titleLabel
     * @return NodeType
     */
    public function setTitleLabel($titleLabel)
    {
        $this->titleLabel = $titleLabel;
    
        return $this;
    }

    /**
     * Get titleLabel
     *
     * @return string 
     */
    public function getTitleLabel()
    {
        return $this->titleLabel;
    }

    /**
     * Set custom
     *
     * @param boolean $custom
     * @return NodeType
     */
    public function setCustom($custom)
    {
        $this->custom = $custom;
    
        return $this;
    }

    /**
     * Get custom
     *
     * @return boolean 
     */
    public function getCustom()
    {
        return $this->custom;
    }

    /**
     * Set modified
     *
     * @param boolean $modified
     * @return NodeType
     */
    public function setModified($modified)
    {
        $this->modified = $modified;
    
        return $this;
    }

    /**
     * Get modified
     *
     * @return boolean 
     */
    public function getModified()
    {
        return $this->modified;
    }

    /**
     * Set locked
     *
     * @param boolean $locked
     * @return NodeType
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
     * Set disabled
     *
     * @param boolean $disabled
     * @return NodeType
     */
    public function setDisabled($disabled)
    {
        $this->disabled = $disabled;
    
        return $this;
    }

    /**
     * Get disabled
     *
     * @return boolean 
     */
    public function getDisabled()
    {
        return $this->disabled;
    }

    /**
     * Set origType
     *
     * @param string $origType
     * @return NodeType
     */
    public function setOrigType($origType)
    {
        $this->origType = $origType;
    
        return $this;
    }

    /**
     * Get origType
     *
     * @return string 
     */
    public function getOrigType()
    {
        return $this->origType;
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
}
