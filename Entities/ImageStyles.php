<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * ImageStyles
 *
 * @ORM\Table(name="image_styles")
 * @ORM\Entity
 */
class ImageStyles
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="isid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $isid;


    /**
     * Set name
     *
     * @param string $name
     * @return ImageStyles
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
     * Get isid
     *
     * @return integer 
     */
    public function getIsid()
    {
        return $this->isid;
    }
}
