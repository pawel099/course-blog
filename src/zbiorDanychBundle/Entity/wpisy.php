<?php

namespace zbiorDanychBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * wpisy
 *
 * @ORM\Table(name="wpisy")
 * @ORM\Entity(repositoryClass="zbiorDanychBundle\Repository\wpisyRepository")
 */
class wpisy
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
	
	 /** 
	
	* @ORM\ManyToOne(targetEntity="kategoria",inversedBy="wpisy")  
	
	*/
	
	protected $kategoria; 

	
	

    /**
     * @var string
     *
     * @ORM\Column(name="moveName", type="string", length=155)
     */
    private $moveName;

    /**
     * @var int
     *
     * @ORM\Column(name="siz", type="bigint")
     */
    private $siz;

    /**
     * @var bool
     *
     * @ORM\Column(name="atribute", type="boolean")
     */
    private $atribute;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="localizacja", type="string", length=255)
     */
    private $localizacja;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set moveName
     *
     * @param string $moveName
     *
     * @return wpisy
     */
    public function setMoveName($moveName)
    {
        $this->moveName = $moveName;

        return $this;
    }

    /**
     * Get moveName
     *
     * @return string
     */
    public function getMoveName()
    {
        return $this->moveName;
    }

    /**
     * Set siz
     *
     * @param integer $siz
     *
     * @return wpisy
     */
    public function setSiz($siz)
    {
        $this->siz = $siz;

        return $this;
    }

    /**
     * Get siz
     *
     * @return int
     */
    public function getSiz()
    {
        return $this->siz;
    }

    /**
     * Set atribute
     *
     * @param boolean $atribute
     *
     * @return wpisy
     */
    public function setAtribute($atribute)
    {
        $this->atribute = $atribute;

        return $this;
    }

    /**
     * Get atribute
     *
     * @return bool
     */
    public function getAtribute()
    {
        return $this->atribute;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return wpisy
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set localizacja
     *
     * @param string $localizacja
     *
     * @return wpisy
     */
    public function setLocalizacja($localizacja)
    {
        $this->localizacja = $localizacja;

        return $this;
    }

    /**
     * Get localizacja
     *
     * @return string
     */
    public function getLocalizacja()
    {
        return $this->localizacja;
    }

    /**
     * Set kategorie
     *
     * @param \zbiorDanychBundle\Entity\kategoria $kategorie
     *
     * @return wpisy
     */
    public function setKategorie(\zbiorDanychBundle\Entity\kategoria $kategorie = null)
    {
        $this->kategorie = $kategorie;

        return $this;
    }

    /**
     * Get kategorie
     *
     * @return \zbiorDanychBundle\Entity\kategoria
     */
    public function getKategorie()
    {
        return $this->kategorie;
    }

    /**
     * Set kategoria
     *
     * @param \zbiorDanychBundle\Entity\kategoria $kategoria
     *
     * @return wpisy
     */
    public function setKategoria(\zbiorDanychBundle\Entity\kategoria $kategoria = null)
    {
        $this->kategoria = $kategoria;

        return $this;
    }

    /**
     * Get kategoria
     *
     * @return \zbiorDanychBundle\Entity\kategoria
     */
    public function getKategoria()
    {
        return $this->kategoria;
    }
}
