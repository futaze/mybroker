<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * SearchDataset
 *
 * @ORM\Table(name="search_dataset")
 * @ORM\Entity
 */
class SearchDataset
{
    /**
     * @var string
     *
     * @ORM\Column(name="data", type="text", nullable=false)
     */
    private $data;

    /**
     * @var integer
     *
     * @ORM\Column(name="reindex", type="integer", nullable=false)
     */
    private $reindex;

    /**
     * @var integer
     *
     * @ORM\Column(name="sid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $sid;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=16)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $type;


    /**
     * Set data
     *
     * @param string $data
     * @return SearchDataset
     */
    public function setData($data)
    {
        $this->data = $data;
    
        return $this;
    }

    /**
     * Get data
     *
     * @return string 
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Set reindex
     *
     * @param integer $reindex
     * @return SearchDataset
     */
    public function setReindex($reindex)
    {
        $this->reindex = $reindex;
    
        return $this;
    }

    /**
     * Get reindex
     *
     * @return integer 
     */
    public function getReindex()
    {
        return $this->reindex;
    }

    /**
     * Set sid
     *
     * @param integer $sid
     * @return SearchDataset
     */
    public function setSid($sid)
    {
        $this->sid = $sid;
    
        return $this;
    }

    /**
     * Get sid
     *
     * @return integer 
     */
    public function getSid()
    {
        return $this->sid;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return SearchDataset
     */
    public function setType($type)
    {
        $this->type = $type;
    
        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }
}
