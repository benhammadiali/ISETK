<?php

namespace ISETKBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Matiere
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Matiere
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
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;
    
    /**
    * @ORM\ManyToMany(targetEntity="Classe", cascade={"persist"})
    */
   private $Classe;

   /**
    * @ORM\ManyToMany(targetEntity="Coefficient", cascade={"persist"})
    */
   private $Coefficient;
   
   /**
   * @ORM\OneToMany(targetEntity="UserBundle\Entity\User", mappedBy="Matiere")
   */
   private $Enseignant;
   

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
     * Set nom
     *
     * @param string $nom
     * @return Matiere
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }
    
    function getClasse() {
        return $this->Classe;
    }

    function getCoefficient() {
        return $this->Coefficient;
    }

    function setClasse($Classe) {
        $this->Classe = $Classe;
    }

    function setCoefficient($Coefficient) {
        $this->Coefficient = $Coefficient;
    }

    function getEnseignant() {
        return $this->Enseignant;
    }

    function setEnseignant($Enseignant) {
        $this->Enseignant = $Enseignant;
    }
    
    public function __construct() {
        $this->Enseignant = new ArrayCollection();
        $this->Coefficient = new ArrayCollection();
        $this->Classe = new ArrayCollection();
    }

    /*public function addEnseignant(User $Enseignant)
    {
        $this->Enseignant[] = $Enseignant;

        return $this;
    }*/


}
