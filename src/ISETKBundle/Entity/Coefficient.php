<?php

namespace ISETKBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Coefficient
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Coefficient
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
     * @var integer
     *
     * @ORM\Column(name="coef", type="integer")
     */
    private $coef;
    
    /**
    * @ORM\ManyToMany(targetEntity="Matiere", cascade={"persist"})
    */
   private $Matiere;


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
     * Set coef
     *
     * @param integer $coef
     * @return Coefficient
     */
    public function setCoef($coef)
    {
        $this->coef = $coef;

        return $this;
    }

    /**
     * Get coef
     *
     * @return integer 
     */
    public function getCoef()
    {
        return $this->coef;
    }
    
    function getMatiere() {
        return $this->Matiere;
    }

    function setMatiere($Matiere) {
        $this->Matiere = $Matiere;
    }


}
