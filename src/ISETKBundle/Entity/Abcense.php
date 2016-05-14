<?php

namespace ISETKBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Abcense
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Abcense
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
     * @var \DateTime
     *
     * @ORM\Column(name="Date", type="date")
     */
    private $date;
    
    /**
    * @ORM\ManyToOne(targetEntity="UserBundle\Entity\User")
    */
   private $Etudiant;
   
   /**
    * @ORM\ManyToOne(targetEntity="UserBundle\Entity\User")
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
     * Set date
     *
     * @param \DateTime $date
     * @return Abcense
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
    
    function getEtudiant() {
        return $this->Etudiant;
    }

    function getEnseignant() {
        return $this->Enseignant;
    }

    function setEtudiant($Etudiant) {
        $this->Etudiant = $Etudiant;
    }

    function setEnseignant($Enseignant) {
        $this->Enseignant = $Enseignant;
    }


}
