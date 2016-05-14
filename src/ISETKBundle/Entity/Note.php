<?php

namespace ISETKBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Note
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Note
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
     * @var float
     *
     * @ORM\Column(name="TP", type="float")
     */
    private $tP;

    /**
     * @var float
     *
     * @ORM\Column(name="DS", type="float")
     */
    private $dS;

    /**
     * @var float
     *
     * @ORM\Column(name="Exam", type="float")
     */
    private $exam;
    
    /**
    * @ORM\ManyToOne(targetEntity="UserBundle\Entity\User")
    */
   private $Eseignant;
   
   /**
    * @ORM\ManyToOne(targetEntity="UserBundle\Entity\User")
    */
   private $Etudiant;


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
     * Set tP
     *
     * @param float $tP
     * @return Note
     */
    public function setTP($tP)
    {
        $this->tP = $tP;

        return $this;
    }

    /**
     * Get tP
     *
     * @return float 
     */
    public function getTP()
    {
        return $this->tP;
    }

    /**
     * Set dS
     *
     * @param float $dS
     * @return Note
     */
    public function setDS($dS)
    {
        $this->dS = $dS;

        return $this;
    }

    /**
     * Get dS
     *
     * @return float 
     */
    public function getDS()
    {
        return $this->dS;
    }

    /**
     * Set exam
     *
     * @param float $exam
     * @return Note
     */
    public function setExam($exam)
    {
        $this->exam = $exam;

        return $this;
    }

    /**
     * Get exam
     *
     * @return float 
     */
    public function getExam()
    {
        return $this->exam;
    }

    function getEtudiant() {
        return $this->Etudiant;
    }

    function setEtudiant($Etudiant) {
        $this->Etudiant = $Etudiant;
    }

    function getEseignant() {
        return $this->Eseignant;
    }

    function setEseignant($Eseignant) {
        $this->Eseignant = $Eseignant;
    }



}
