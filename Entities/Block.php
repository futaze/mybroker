<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Block
 *
 * @ORM\Table(name="block")
 * @ORM\Entity
 */
class Block
{
    /**
     * @var string
     *
     * @ORM\Column(name="module", type="string", length=64, nullable=false)
     */
    private $module;

    /**
     * @var string
     *
     * @ORM\Column(name="delta", type="string", length=32, nullable=false)
     */
    private $delta;

    /**
     * @var string
     *
     * @ORM\Column(name="theme", type="string", length=64, nullable=false)
     */
    private $theme;

    /**
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean", nullable=false)
     */
    private $status;

    /**
     * @var integer
     *
     * @ORM\Column(name="weight", type="integer", nullable=false)
     */
    private $weight;

    /**
     * @var string
     *
     * @ORM\Column(name="region", type="string", length=64, nullable=false)
     */
    private $region;

    /**
     * @var boolean
     *
     * @ORM\Column(name="custom", type="boolean", nullable=false)
     */
    private $custom;

    /**
     * @var boolean
     *
     * @ORM\Column(name="visibility", type="boolean", nullable=false)
     */
    private $visibility;

    /**
     * @var string
     *
     * @ORM\Column(name="pages", type="text", nullable=false)
     */
    private $pages;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=64, nullable=false)
     */
    private $title;

    /**
     * @var boolean
     *
     * @ORM\Column(name="cache", type="boolean", nullable=false)
     */
    private $cache;

    /**
     * @var integer
     *
     * @ORM\Column(name="bid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $bid;


    /**
     * Set module
     *
     * @param string $module
     * @return Block
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
     * Set delta
     *
     * @param string $delta
     * @return Block
     */
    public function setDelta($delta)
    {
        $this->delta = $delta;
    
        return $this;
    }

    /**
     * Get delta
     *
     * @return string 
     */
    public function getDelta()
    {
        return $this->delta;
    }

    /**
     * Set theme
     *
     * @param string $theme
     * @return Block
     */
    public function setTheme($theme)
    {
        $this->theme = $theme;
    
        return $this;
    }

    /**
     * Get theme
     *
     * @return string 
     */
    public function getTheme()
    {
        return $this->theme;
    }

    /**
     * Set status
     *
     * @param boolean $status
     * @return Block
     */
    public function setStatus($status)
    {
        $this->status = $status;
    
        return $this;
    }

    /**
     * Get status
     *
     * @return boolean 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set weight
     *
     * @param integer $weight
     * @return Block
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
     * Set region
     *
     * @param string $region
     * @return Block
     */
    public function setRegion($region)
    {
        $this->region = $region;
    
        return $this;
    }

    /**
     * Get region
     *
     * @return string 
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Set custom
     *
     * @param boolean $custom
     * @return Block
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
     * Set visibility
     *
     * @param boolean $visibility
     * @return Block
     */
    public function setVisibility($visibility)
    {
        $this->visibility = $visibility;
    
        return $this;
    }

    /**
     * Get visibility
     *
     * @return boolean 
     */
    public function getVisibility()
    {
        return $this->visibility;
    }

    /**
     * Set pages
     *
     * @param string $pages
     * @return Block
     */
    public function setPages($pages)
    {
        $this->pages = $pages;
    
        return $this;
    }

    /**
     * Get pages
     *
     * @return string 
     */
    public function getPages()
    {
        return $this->pages;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Block
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
     * Set cache
     *
     * @param boolean $cache
     * @return Block
     */
    public function setCache($cache)
    {
        $this->cache = $cache;
    
        return $this;
    }

    /**
     * Get cache
     *
     * @return boolean 
     */
    public function getCache()
    {
        return $this->cache;
    }

    /**
     * Get bid
     *
     * @return integer 
     */
    public function getBid()
    {
        return $this->bid;
    }
}
