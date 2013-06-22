<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * SearchTotal
 *
 * @ORM\Table(name="search_total")
 * @ORM\Entity
 */
class SearchTotal
{
    /**
     * @var float
     *
     * @ORM\Column(name="count", type="float", nullable=true)
     */
    private $count;

    /**
     * @var string
     *
     * @ORM\Column(name="word", type="string", length=50)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $word;


    /**
     * Set count
     *
     * @param float $count
     * @return SearchTotal
     */
    public function setCount($count)
    {
        $this->count = $count;
    
        return $this;
    }

    /**
     * Get count
     *
     * @return float 
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * Get word
     *
     * @return string 
     */
    public function getWord()
    {
        return $this->word;
    }
}
