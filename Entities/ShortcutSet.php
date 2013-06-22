<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * ShortcutSet
 *
 * @ORM\Table(name="shortcut_set")
 * @ORM\Entity
 */
class ShortcutSet
{
    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=false)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="set_name", type="string", length=32)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $setName;


    /**
     * Set title
     *
     * @param string $title
     * @return ShortcutSet
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
     * Get setName
     *
     * @return string 
     */
    public function getSetName()
    {
        return $this->setName;
    }
}
