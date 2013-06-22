<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Authmap
 *
 * @ORM\Table(name="authmap")
 * @ORM\Entity
 */
class Authmap
{
    /**
     * @var integer
     *
     * @ORM\Column(name="uid", type="integer", nullable=false)
     */
    private $uid;

    /**
     * @var string
     *
     * @ORM\Column(name="authname", type="string", length=128, nullable=false)
     */
    private $authname;

    /**
     * @var string
     *
     * @ORM\Column(name="module", type="string", length=128, nullable=false)
     */
    private $module;

    /**
     * @var integer
     *
     * @ORM\Column(name="aid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $aid;


    /**
     * Set uid
     *
     * @param integer $uid
     * @return Authmap
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
     * Set authname
     *
     * @param string $authname
     * @return Authmap
     */
    public function setAuthname($authname)
    {
        $this->authname = $authname;
    
        return $this;
    }

    /**
     * Get authname
     *
     * @return string 
     */
    public function getAuthname()
    {
        return $this->authname;
    }

    /**
     * Set module
     *
     * @param string $module
     * @return Authmap
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
     * Get aid
     *
     * @return integer 
     */
    public function getAid()
    {
        return $this->aid;
    }
}
