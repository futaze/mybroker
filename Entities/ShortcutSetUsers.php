<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * ShortcutSetUsers
 *
 * @ORM\Table(name="shortcut_set_users")
 * @ORM\Entity
 */
class ShortcutSetUsers
{
    /**
     * @var string
     *
     * @ORM\Column(name="set_name", type="string", length=32, nullable=false)
     */
    private $setName;

    /**
     * @var integer
     *
     * @ORM\Column(name="uid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $uid;


    /**
     * Set setName
     *
     * @param string $setName
     * @return ShortcutSetUsers
     */
    public function setSetName($setName)
    {
        $this->setName = $setName;
    
        return $this;
    }

    /**
     * Get setName
     *
     * @return string 
     */
    public function getSetName()
    {
        return $this->setName;
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
}
