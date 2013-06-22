<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * DateFormatLocale
 *
 * @ORM\Table(name="date_format_locale")
 * @ORM\Entity
 */
class DateFormatLocale
{
    /**
     * @var string
     *
     * @ORM\Column(name="format", type="string", length=100, nullable=false)
     */
    private $format;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=64)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="language", type="string", length=12)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $language;


    /**
     * Set format
     *
     * @param string $format
     * @return DateFormatLocale
     */
    public function setFormat($format)
    {
        $this->format = $format;
    
        return $this;
    }

    /**
     * Get format
     *
     * @return string 
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return DateFormatLocale
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

    /**
     * Set language
     *
     * @param string $language
     * @return DateFormatLocale
     */
    public function setLanguage($language)
    {
        $this->language = $language;
    
        return $this;
    }

    /**
     * Get language
     *
     * @return string 
     */
    public function getLanguage()
    {
        return $this->language;
    }
}
