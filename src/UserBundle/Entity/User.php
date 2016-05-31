<?php

namespace UserBundle\Entity;

use FOS\UserBundle\Entity\User as BaseUser;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;
    
    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255)
     */
    private $prenom;
    
    /**
     * @var string
     *
     * @ORM\Column(name="emploi", type="string", length=255, nullable=true)
     */
    private $emploi;
    
    /**
     * @var string
     *
     * @ORM\Column(name="statut", type="string", length=255, nullable=true)
     */
    private $statut;
    
    /**
     * @var string
     *
     * @ORM\Column(name="session", type="string", length=255, nullable=true)
     */
    private $session;
    
    /**
    * @ORM\ManyToOne(targetEntity="ISETKBundle\Entity\Classe")
    */
   private $Classe;

   /**
    * @ORM\ManyToOne(targetEntity="ISETKBundle\Entity\Matiere", inversedBy="Enseignant")
    */
   private $Matiere;

    public function __construct()
    {
        parent::__construct();
        //$this->Matiere = new ArrayCollection();
    }
    
    public function getParent()

 {

 return 'FOSUserBundle';

 }
 function getId() {
     return $this->id;
 }

 function getNom() {
     return $this->nom;
 }

 function getPrenom() {
     return $this->prenom;
 }

 function setId($id) {
     $this->id = $id;
 }

 function setNom($nom) {
     $this->nom = $nom;
 }

 function setPrenom($prenom) {
     $this->prenom = $prenom;
 }

 function getClasse() {
     return $this->Classe;
 }

 function setClasse($Classe) {
     $this->Classe = $Classe;
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

 function getStatut() {
     return $this->statut;
 }

 function setStatut($statut) {
     $this->statut = $statut;
 }

 function getSession() {
     return $this->session;
 }

 function setSession($session) {
     $this->session = $session;
 }

    public function addMatiere(Matiere $Matiere)
    {
        $this->Matiere[] = $Matiere;

        return $this;
    }

    public function removeMatiere(Matiere $Matiere)
    {
        $this->Matiere->removeElement($Matiere);

        // Et si notre relation était facultative (nullable=true, ce qui n'est pas notre cas ici attention) :
        // $application->setAdvert(null);
    }



}

