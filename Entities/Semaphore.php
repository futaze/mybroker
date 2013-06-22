<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Semaphore
 *
 * @ORM\Table(name="semaphore")
 * @ORM\Entity
 */
class Semaphore
{
    /**
     * @var string
     *
     * @ORM\Column(name="value", type="string", length=255, nullable=false)
     */
    private $value;

    /**
     * @var float
     *
     * @ORM\Column(name="expire", type="float", nullable=false)
     */
    private $expire;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $name;


    /**
     * Set value
     *
     * @param string $value
     * @return Semaphore
     */
    public function setValue($value)
    {
        $this->value = $value;
    
        return $this;
    }

    /**
     * Get value
     *
     * @return string 
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set expire
     *
     * @param float $expire
     * @return Semaphore
     */
    public function setExpire($expire)
    {
        $this->expire = $expire;
    
        return $this;
    }

    /**
     * Get expire
     *
     * @return float 
     */
    public function getExpire()
    {
        return $this->expire;
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
}
