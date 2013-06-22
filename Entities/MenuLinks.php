<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * MenuLinks
 *
 * @ORM\Table(name="menu_links")
 * @ORM\Entity
 */
class MenuLinks
{
    /**
     * @var string
     *
     * @ORM\Column(name="menu_name", type="string", length=32, nullable=false)
     */
    private $menuName;

    /**
     * @var integer
     *
     * @ORM\Column(name="plid", type="integer", nullable=false)
     */
    private $plid;

    /**
     * @var string
     *
     * @ORM\Column(name="link_path", type="string", length=255, nullable=false)
     */
    private $linkPath;

    /**
     * @var string
     *
     * @ORM\Column(name="router_path", type="string", length=255, nullable=false)
     */
    private $routerPath;

    /**
     * @var string
     *
     * @ORM\Column(name="link_title", type="string", length=255, nullable=false)
     */
    private $linkTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="options", type="blob", nullable=true)
     */
    private $options;

    /**
     * @var string
     *
     * @ORM\Column(name="module", type="string", length=255, nullable=false)
     */
    private $module;

    /**
     * @var integer
     *
     * @ORM\Column(name="hidden", type="smallint", nullable=false)
     */
    private $hidden;

    /**
     * @var integer
     *
     * @ORM\Column(name="external", type="smallint", nullable=false)
     */
    private $external;

    /**
     * @var integer
     *
     * @ORM\Column(name="has_children", type="smallint", nullable=false)
     */
    private $hasChildren;

    /**
     * @var integer
     *
     * @ORM\Column(name="expanded", type="smallint", nullable=false)
     */
    private $expanded;

    /**
     * @var integer
     *
     * @ORM\Column(name="weight", type="integer", nullable=false)
     */
    private $weight;

    /**
     * @var integer
     *
     * @ORM\Column(name="depth", type="smallint", nullable=false)
     */
    private $depth;

    /**
     * @var integer
     *
     * @ORM\Column(name="customized", type="smallint", nullable=false)
     */
    private $customized;

    /**
     * @var integer
     *
     * @ORM\Column(name="p1", type="integer", nullable=false)
     */
    private $p1;

    /**
     * @var integer
     *
     * @ORM\Column(name="p2", type="integer", nullable=false)
     */
    private $p2;

    /**
     * @var integer
     *
     * @ORM\Column(name="p3", type="integer", nullable=false)
     */
    private $p3;

    /**
     * @var integer
     *
     * @ORM\Column(name="p4", type="integer", nullable=false)
     */
    private $p4;

    /**
     * @var integer
     *
     * @ORM\Column(name="p5", type="integer", nullable=false)
     */
    private $p5;

    /**
     * @var integer
     *
     * @ORM\Column(name="p6", type="integer", nullable=false)
     */
    private $p6;

    /**
     * @var integer
     *
     * @ORM\Column(name="p7", type="integer", nullable=false)
     */
    private $p7;

    /**
     * @var integer
     *
     * @ORM\Column(name="p8", type="integer", nullable=false)
     */
    private $p8;

    /**
     * @var integer
     *
     * @ORM\Column(name="p9", type="integer", nullable=false)
     */
    private $p9;

    /**
     * @var integer
     *
     * @ORM\Column(name="updated", type="smallint", nullable=false)
     */
    private $updated;

    /**
     * @var integer
     *
     * @ORM\Column(name="mlid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $mlid;


    /**
     * Set menuName
     *
     * @param string $menuName
     * @return MenuLinks
     */
    public function setMenuName($menuName)
    {
        $this->menuName = $menuName;
    
        return $this;
    }

    /**
     * Get menuName
     *
     * @return string 
     */
    public function getMenuName()
    {
        return $this->menuName;
    }

    /**
     * Set plid
     *
     * @param integer $plid
     * @return MenuLinks
     */
    public function setPlid($plid)
    {
        $this->plid = $plid;
    
        return $this;
    }

    /**
     * Get plid
     *
     * @return integer 
     */
    public function getPlid()
    {
        return $this->plid;
    }

    /**
     * Set linkPath
     *
     * @param string $linkPath
     * @return MenuLinks
     */
    public function setLinkPath($linkPath)
    {
        $this->linkPath = $linkPath;
    
        return $this;
    }

    /**
     * Get linkPath
     *
     * @return string 
     */
    public function getLinkPath()
    {
        return $this->linkPath;
    }

    /**
     * Set routerPath
     *
     * @param string $routerPath
     * @return MenuLinks
     */
    public function setRouterPath($routerPath)
    {
        $this->routerPath = $routerPath;
    
        return $this;
    }

    /**
     * Get routerPath
     *
     * @return string 
     */
    public function getRouterPath()
    {
        return $this->routerPath;
    }

    /**
     * Set linkTitle
     *
     * @param string $linkTitle
     * @return MenuLinks
     */
    public function setLinkTitle($linkTitle)
    {
        $this->linkTitle = $linkTitle;
    
        return $this;
    }

    /**
     * Get linkTitle
     *
     * @return string 
     */
    public function getLinkTitle()
    {
        return $this->linkTitle;
    }

    /**
     * Set options
     *
     * @param string $options
     * @return MenuLinks
     */
    public function setOptions($options)
    {
        $this->options = $options;
    
        return $this;
    }

    /**
     * Get options
     *
     * @return string 
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * Set module
     *
     * @param string $module
     * @return MenuLinks
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
     * Set hidden
     *
     * @param integer $hidden
     * @return MenuLinks
     */
    public function setHidden($hidden)
    {
        $this->hidden = $hidden;
    
        return $this;
    }

    /**
     * Get hidden
     *
     * @return integer 
     */
    public function getHidden()
    {
        return $this->hidden;
    }

    /**
     * Set external
     *
     * @param integer $external
     * @return MenuLinks
     */
    public function setExternal($external)
    {
        $this->external = $external;
    
        return $this;
    }

    /**
     * Get external
     *
     * @return integer 
     */
    public function getExternal()
    {
        return $this->external;
    }

    /**
     * Set hasChildren
     *
     * @param integer $hasChildren
     * @return MenuLinks
     */
    public function setHasChildren($hasChildren)
    {
        $this->hasChildren = $hasChildren;
    
        return $this;
    }

    /**
     * Get hasChildren
     *
     * @return integer 
     */
    public function getHasChildren()
    {
        return $this->hasChildren;
    }

    /**
     * Set expanded
     *
     * @param integer $expanded
     * @return MenuLinks
     */
    public function setExpanded($expanded)
    {
        $this->expanded = $expanded;
    
        return $this;
    }

    /**
     * Get expanded
     *
     * @return integer 
     */
    public function getExpanded()
    {
        return $this->expanded;
    }

    /**
     * Set weight
     *
     * @param integer $weight
     * @return MenuLinks
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
     * Set depth
     *
     * @param integer $depth
     * @return MenuLinks
     */
    public function setDepth($depth)
    {
        $this->depth = $depth;
    
        return $this;
    }

    /**
     * Get depth
     *
     * @return integer 
     */
    public function getDepth()
    {
        return $this->depth;
    }

    /**
     * Set customized
     *
     * @param integer $customized
     * @return MenuLinks
     */
    public function setCustomized($customized)
    {
        $this->customized = $customized;
    
        return $this;
    }

    /**
     * Get customized
     *
     * @return integer 
     */
    public function getCustomized()
    {
        return $this->customized;
    }

    /**
     * Set p1
     *
     * @param integer $p1
     * @return MenuLinks
     */
    public function setP1($p1)
    {
        $this->p1 = $p1;
    
        return $this;
    }

    /**
     * Get p1
     *
     * @return integer 
     */
    public function getP1()
    {
        return $this->p1;
    }

    /**
     * Set p2
     *
     * @param integer $p2
     * @return MenuLinks
     */
    public function setP2($p2)
    {
        $this->p2 = $p2;
    
        return $this;
    }

    /**
     * Get p2
     *
     * @return integer 
     */
    public function getP2()
    {
        return $this->p2;
    }

    /**
     * Set p3
     *
     * @param integer $p3
     * @return MenuLinks
     */
    public function setP3($p3)
    {
        $this->p3 = $p3;
    
        return $this;
    }

    /**
     * Get p3
     *
     * @return integer 
     */
    public function getP3()
    {
        return $this->p3;
    }

    /**
     * Set p4
     *
     * @param integer $p4
     * @return MenuLinks
     */
    public function setP4($p4)
    {
        $this->p4 = $p4;
    
        return $this;
    }

    /**
     * Get p4
     *
     * @return integer 
     */
    public function getP4()
    {
        return $this->p4;
    }

    /**
     * Set p5
     *
     * @param integer $p5
     * @return MenuLinks
     */
    public function setP5($p5)
    {
        $this->p5 = $p5;
    
        return $this;
    }

    /**
     * Get p5
     *
     * @return integer 
     */
    public function getP5()
    {
        return $this->p5;
    }

    /**
     * Set p6
     *
     * @param integer $p6
     * @return MenuLinks
     */
    public function setP6($p6)
    {
        $this->p6 = $p6;
    
        return $this;
    }

    /**
     * Get p6
     *
     * @return integer 
     */
    public function getP6()
    {
        return $this->p6;
    }

    /**
     * Set p7
     *
     * @param integer $p7
     * @return MenuLinks
     */
    public function setP7($p7)
    {
        $this->p7 = $p7;
    
        return $this;
    }

    /**
     * Get p7
     *
     * @return integer 
     */
    public function getP7()
    {
        return $this->p7;
    }

    /**
     * Set p8
     *
     * @param integer $p8
     * @return MenuLinks
     */
    public function setP8($p8)
    {
        $this->p8 = $p8;
    
        return $this;
    }

    /**
     * Get p8
     *
     * @return integer 
     */
    public function getP8()
    {
        return $this->p8;
    }

    /**
     * Set p9
     *
     * @param integer $p9
     * @return MenuLinks
     */
    public function setP9($p9)
    {
        $this->p9 = $p9;
    
        return $this;
    }

    /**
     * Get p9
     *
     * @return integer 
     */
    public function getP9()
    {
        return $this->p9;
    }

    /**
     * Set updated
     *
     * @param integer $updated
     * @return MenuLinks
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;
    
        return $this;
    }

    /**
     * Get updated
     *
     * @return integer 
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * Get mlid
     *
     * @return integer 
     */
    public function getMlid()
    {
        return $this->mlid;
    }
}
