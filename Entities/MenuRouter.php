<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * MenuRouter
 *
 * @ORM\Table(name="menu_router")
 * @ORM\Entity
 */
class MenuRouter
{
    /**
     * @var string
     *
     * @ORM\Column(name="load_functions", type="blob", nullable=false)
     */
    private $loadFunctions;

    /**
     * @var string
     *
     * @ORM\Column(name="to_arg_functions", type="blob", nullable=false)
     */
    private $toArgFunctions;

    /**
     * @var string
     *
     * @ORM\Column(name="access_callback", type="string", length=255, nullable=false)
     */
    private $accessCallback;

    /**
     * @var string
     *
     * @ORM\Column(name="access_arguments", type="blob", nullable=true)
     */
    private $accessArguments;

    /**
     * @var string
     *
     * @ORM\Column(name="page_callback", type="string", length=255, nullable=false)
     */
    private $pageCallback;

    /**
     * @var string
     *
     * @ORM\Column(name="page_arguments", type="blob", nullable=true)
     */
    private $pageArguments;

    /**
     * @var string
     *
     * @ORM\Column(name="delivery_callback", type="string", length=255, nullable=false)
     */
    private $deliveryCallback;

    /**
     * @var integer
     *
     * @ORM\Column(name="fit", type="integer", nullable=false)
     */
    private $fit;

    /**
     * @var integer
     *
     * @ORM\Column(name="number_parts", type="smallint", nullable=false)
     */
    private $numberParts;

    /**
     * @var integer
     *
     * @ORM\Column(name="context", type="integer", nullable=false)
     */
    private $context;

    /**
     * @var string
     *
     * @ORM\Column(name="tab_parent", type="string", length=255, nullable=false)
     */
    private $tabParent;

    /**
     * @var string
     *
     * @ORM\Column(name="tab_root", type="string", length=255, nullable=false)
     */
    private $tabRoot;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=false)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="title_callback", type="string", length=255, nullable=false)
     */
    private $titleCallback;

    /**
     * @var string
     *
     * @ORM\Column(name="title_arguments", type="string", length=255, nullable=false)
     */
    private $titleArguments;

    /**
     * @var string
     *
     * @ORM\Column(name="theme_callback", type="string", length=255, nullable=false)
     */
    private $themeCallback;

    /**
     * @var string
     *
     * @ORM\Column(name="theme_arguments", type="string", length=255, nullable=false)
     */
    private $themeArguments;

    /**
     * @var integer
     *
     * @ORM\Column(name="type", type="integer", nullable=false)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="position", type="string", length=255, nullable=false)
     */
    private $position;

    /**
     * @var integer
     *
     * @ORM\Column(name="weight", type="integer", nullable=false)
     */
    private $weight;

    /**
     * @var string
     *
     * @ORM\Column(name="include_file", type="text", nullable=true)
     */
    private $includeFile;

    /**
     * @var string
     *
     * @ORM\Column(name="path", type="string", length=255)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $path;


    /**
     * Set loadFunctions
     *
     * @param string $loadFunctions
     * @return MenuRouter
     */
    public function setLoadFunctions($loadFunctions)
    {
        $this->loadFunctions = $loadFunctions;
    
        return $this;
    }

    /**
     * Get loadFunctions
     *
     * @return string 
     */
    public function getLoadFunctions()
    {
        return $this->loadFunctions;
    }

    /**
     * Set toArgFunctions
     *
     * @param string $toArgFunctions
     * @return MenuRouter
     */
    public function setToArgFunctions($toArgFunctions)
    {
        $this->toArgFunctions = $toArgFunctions;
    
        return $this;
    }

    /**
     * Get toArgFunctions
     *
     * @return string 
     */
    public function getToArgFunctions()
    {
        return $this->toArgFunctions;
    }

    /**
     * Set accessCallback
     *
     * @param string $accessCallback
     * @return MenuRouter
     */
    public function setAccessCallback($accessCallback)
    {
        $this->accessCallback = $accessCallback;
    
        return $this;
    }

    /**
     * Get accessCallback
     *
     * @return string 
     */
    public function getAccessCallback()
    {
        return $this->accessCallback;
    }

    /**
     * Set accessArguments
     *
     * @param string $accessArguments
     * @return MenuRouter
     */
    public function setAccessArguments($accessArguments)
    {
        $this->accessArguments = $accessArguments;
    
        return $this;
    }

    /**
     * Get accessArguments
     *
     * @return string 
     */
    public function getAccessArguments()
    {
        return $this->accessArguments;
    }

    /**
     * Set pageCallback
     *
     * @param string $pageCallback
     * @return MenuRouter
     */
    public function setPageCallback($pageCallback)
    {
        $this->pageCallback = $pageCallback;
    
        return $this;
    }

    /**
     * Get pageCallback
     *
     * @return string 
     */
    public function getPageCallback()
    {
        return $this->pageCallback;
    }

    /**
     * Set pageArguments
     *
     * @param string $pageArguments
     * @return MenuRouter
     */
    public function setPageArguments($pageArguments)
    {
        $this->pageArguments = $pageArguments;
    
        return $this;
    }

    /**
     * Get pageArguments
     *
     * @return string 
     */
    public function getPageArguments()
    {
        return $this->pageArguments;
    }

    /**
     * Set deliveryCallback
     *
     * @param string $deliveryCallback
     * @return MenuRouter
     */
    public function setDeliveryCallback($deliveryCallback)
    {
        $this->deliveryCallback = $deliveryCallback;
    
        return $this;
    }

    /**
     * Get deliveryCallback
     *
     * @return string 
     */
    public function getDeliveryCallback()
    {
        return $this->deliveryCallback;
    }

    /**
     * Set fit
     *
     * @param integer $fit
     * @return MenuRouter
     */
    public function setFit($fit)
    {
        $this->fit = $fit;
    
        return $this;
    }

    /**
     * Get fit
     *
     * @return integer 
     */
    public function getFit()
    {
        return $this->fit;
    }

    /**
     * Set numberParts
     *
     * @param integer $numberParts
     * @return MenuRouter
     */
    public function setNumberParts($numberParts)
    {
        $this->numberParts = $numberParts;
    
        return $this;
    }

    /**
     * Get numberParts
     *
     * @return integer 
     */
    public function getNumberParts()
    {
        return $this->numberParts;
    }

    /**
     * Set context
     *
     * @param integer $context
     * @return MenuRouter
     */
    public function setContext($context)
    {
        $this->context = $context;
    
        return $this;
    }

    /**
     * Get context
     *
     * @return integer 
     */
    public function getContext()
    {
        return $this->context;
    }

    /**
     * Set tabParent
     *
     * @param string $tabParent
     * @return MenuRouter
     */
    public function setTabParent($tabParent)
    {
        $this->tabParent = $tabParent;
    
        return $this;
    }

    /**
     * Get tabParent
     *
     * @return string 
     */
    public function getTabParent()
    {
        return $this->tabParent;
    }

    /**
     * Set tabRoot
     *
     * @param string $tabRoot
     * @return MenuRouter
     */
    public function setTabRoot($tabRoot)
    {
        $this->tabRoot = $tabRoot;
    
        return $this;
    }

    /**
     * Get tabRoot
     *
     * @return string 
     */
    public function getTabRoot()
    {
        return $this->tabRoot;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return MenuRouter
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
     * Set titleCallback
     *
     * @param string $titleCallback
     * @return MenuRouter
     */
    public function setTitleCallback($titleCallback)
    {
        $this->titleCallback = $titleCallback;
    
        return $this;
    }

    /**
     * Get titleCallback
     *
     * @return string 
     */
    public function getTitleCallback()
    {
        return $this->titleCallback;
    }

    /**
     * Set titleArguments
     *
     * @param string $titleArguments
     * @return MenuRouter
     */
    public function setTitleArguments($titleArguments)
    {
        $this->titleArguments = $titleArguments;
    
        return $this;
    }

    /**
     * Get titleArguments
     *
     * @return string 
     */
    public function getTitleArguments()
    {
        return $this->titleArguments;
    }

    /**
     * Set themeCallback
     *
     * @param string $themeCallback
     * @return MenuRouter
     */
    public function setThemeCallback($themeCallback)
    {
        $this->themeCallback = $themeCallback;
    
        return $this;
    }

    /**
     * Get themeCallback
     *
     * @return string 
     */
    public function getThemeCallback()
    {
        return $this->themeCallback;
    }

    /**
     * Set themeArguments
     *
     * @param string $themeArguments
     * @return MenuRouter
     */
    public function setThemeArguments($themeArguments)
    {
        $this->themeArguments = $themeArguments;
    
        return $this;
    }

    /**
     * Get themeArguments
     *
     * @return string 
     */
    public function getThemeArguments()
    {
        return $this->themeArguments;
    }

    /**
     * Set type
     *
     * @param integer $type
     * @return MenuRouter
     */
    public function setType($type)
    {
        $this->type = $type;
    
        return $this;
    }

    /**
     * Get type
     *
     * @return integer 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return MenuRouter
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
     * Set position
     *
     * @param string $position
     * @return MenuRouter
     */
    public function setPosition($position)
    {
        $this->position = $position;
    
        return $this;
    }

    /**
     * Get position
     *
     * @return string 
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set weight
     *
     * @param integer $weight
     * @return MenuRouter
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
    
        return $this;
    }

    /**
     * Get weight
     *
     * @return integer 
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Set includeFile
     *
     * @param string $includeFile
     * @return MenuRouter
     */
    public function setIncludeFile($includeFile)
    {
        $this->includeFile = $includeFile;
    
        return $this;
    }

    /**
     * Get includeFile
     *
     * @return string 
     */
    public function getIncludeFile()
    {
        return $this->includeFile;
    }

    /**
     * Get path
     *
     * @return string 
     */
    public function getPath()
    {
        return $this->path;
    }
}
