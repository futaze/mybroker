<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Sequences
 *
 * @ORM\Table(name="sequences")
 * @ORM\Entity
 */
class Sequences
{
    /**
     * @var integer
     *
     * @ORM\Column(name="value", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $value;


    /**
     * Get value
     *
     * @return integer 
     */
    public function getValue()
    {
        return $this->value;
    }
}
