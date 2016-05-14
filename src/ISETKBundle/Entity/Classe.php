<?php

namespace ISETKBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Classe
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Classe
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="niveau", type="string", length=255)
     */
    private $niveau;

    /**
     * @var string
     *
     * @ORM\Column(name="filiere", type="string", length=255)
     */
    private $filiere;

    /**
     * @var string
     *
     * @ORM\Column(name="classes", type="string", length=255)
     */
    private $classes;
    
    /**
     * @var string
     *
     * @ORM\Column(name="emploi", type="string", length=255)
     */
    private $emploi;
    
    /**
    * @ORM\ManyToMany(targetEntity="Matiere", cascade={"persist"})
    */
   private $Matiere;


   public function __construct()
    {
        $this->Matiere = new ArrayCollection();
    }
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set niveau
     *
     * @param string $niveau
     * @return Classe
     */
    public function setNiveau($niveau)
    {
        $this->niveau = $niveau;

        return $this;
    }

    /**
     * Get niveau
     *
     * @return string 
     */
    public function getNiveau()
    {
        return $this->niveau;
    }

    /**
     * Set filiere
     *
     * @param string $filiere
     * @return Classe
     */
    public function setFiliere($filiere)
    {
        $this->filiere = $filiere;

        return $this;
    }

    /**
     * Get filiere
     *
     * @return string 
     */
    public function getFiliere()
    {
        return $this->filiere;
    }

    /**
     * Set classes
     *
     * @param string $classes
     * @return Classe
     */
    public function setClasses($classes)
    {
        $this->classes = $classes;

        return $this;
    }

    /**
     * Get classes
     *
     * @return string 
     */
    public function getClasses()
    {
        return $this->classes;
    }
    
    function getEmploi() {
        return $this->emploi;
    }

    function setEmploi($emploi) {
        $this->emploi = $emploi;
    }

    function getMatiere() {
        return $this->Matiere;
    }

    function setMatiere($Matiere) {
        $this->Matiere = $Matiere;
    }


}
