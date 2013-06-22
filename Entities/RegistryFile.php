<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * RegistryFile
 *
 * @ORM\Table(name="registry_file")
 * @ORM\Entity
 */
class RegistryFile
{
    /**
     * @var string
     *
     * @ORM\Column(name="hash", type="string", length=64, nullable=false)
     */
    private $hash;

    /**
     * @var string
     *
     * @ORM\Column(name="filename", type="string", length=255)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $filename;


    /**
     * Set hash
     *
     * @param string $hash
     * @return RegistryFile
     */
    public function setHash($hash)
    {
        $this->hash = $hash;
    
        return $this;
    }

    /**
     * Get hash
     *
     * @return string 
     */
    public function getHash()
    {
        return $this->hash;
    }

    /**
     * Get filename
     *
     * @return string 
     */
    public function getFilename()
    {
        return $this->filename;
    }
}
