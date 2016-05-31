<?php

namespace ISETKBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ChefController extends Controller
{
    public function indexAction()
    {
        return $this->render('ISETKBundle:Chef:Home.html.twig', array());
    }
    
    public function emploiAction()
    {
        return $this->render('ISETKBundle:Chef:EmploiDuTemps.html.twig', array());
    }
    
    public function compteAction()
    {
        return $this->render('ISETKBundle:Chef:Compte.html.twig', array());
    }

    public function profilAction()
    {
        return $this->render('ISETKBundle:Chef:Profil.html.twig', array());
    }
    
    public function absenceAction() {
        $user = new \UserBundle\Entity\User();

        $userManager = $this->container->get('fos_user.user_manager');
        $user = $userManager->findUserByUsername($this->container->get('security.context')
                        ->getToken()
                        ->getUser());


        $classes = array();


        $em = $this->container->get('doctrine')->getEntityManager();
        $query = $em->createQuery('SELECT c FROM ISETKBundle:Classe c JOIN c.Matiere m JOIN m.Enseignant u WHERE u = :e')
                ->setParameter('e', $user->getId());

        $classes = $query->getResult();

        $request = $this->getRequest();
        if ($request->getMethod() == "GET") {
            $v = $this->getRequest()->query->get("cla");

            $etudiant = array();

            $em = $this->container->get('doctrine')->getEntityManager();
            $query = $em->createQuery('SELECT u FROM UserBundle:User u JOIN u.Classe c WHERE c.id =:n')
                    ->setParameter('n', $v);

            $etudiant = $query->getResult();
        }



        return $this->render('ISETKBundle:Chef:Absence.html.twig', array('user' => $user, 'etudiants' => $etudiant, 'classes' => $classes));
    }

    public function doAbsenceAction() {

        $user = new \UserBundle\Entity\User();

        $userManager = $this->container->get('fos_user.user_manager');
        $user = $userManager->findUserByUsername($this->container->get('security.context')
                        ->getToken()
                        ->getUser());


        $request = $this->getRequest();
        if ($request->getMethod() == "GET") {
            $v = $this->getRequest()->query->get("cl");

            $em = $this->container->get('doctrine')->getEntityManager();
            $etudiant = $em->getRepository('UserBundle:User')->find($v);

//        $em = $this->container->get('doctrine')->getEntityManager();
//        
//        
//            $query = $em->createQuery('SELECT u FROM UserBundle:User u WHERE u.id =:n')
//                    ->setParameter('n', $v);
//
//            $etudiant = $query->getResult();

            $absence = new \ISETKBundle\Entity\Abcense();

            $date = new \DateTime('now');

            $absence->setDate($date);
            $absence->setEnseignant($user);
            $absence->setEtudiant($etudiant);

            $em = $this->container->get('Doctrine')->getEntityManager();
            $em->persist($absence);
            $em->flush();
        }
        //return absenceAction();
    }

    public function noteAction() {
        $user = new \UserBundle\Entity\User();

        $userManager = $this->container->get('fos_user.user_manager');
        $user = $userManager->findUserByUsername($this->container->get('security.context')
                        ->getToken()
                        ->getUser());


        $classes = array();


        $em = $this->container->get('doctrine')->getEntityManager();
        $query = $em->createQuery('SELECT c FROM ISETKBundle:Classe c JOIN c.Matiere m JOIN m.Enseignant u WHERE u = :e')
                ->setParameter('e', $user->getId());

        $classes = $query->getResult();

        $request = $this->getRequest();
        if ($request->getMethod() == "GET") {
            $v = $this->getRequest()->query->get("cla");

            $etudiant = array();

            $em = $this->container->get('doctrine')->getEntityManager();
            $query = $em->createQuery('SELECT u FROM UserBundle:User u JOIN u.Classe c WHERE c.id =:n')
                    ->setParameter('n', $v);

            $etudiant = $query->getResult();
        }



        return $this->render('ISETKBundle:Chef:Note.html.twig', array('user' => $user, 'etudiants' => $etudiant, 'classes' => $classes));
    }

    public function doNoteAction() {

        $user = new \UserBundle\Entity\User();

        $userManager = $this->container->get('fos_user.user_manager');
        $user = $userManager->findUserByUsername($this->container->get('security.context')
                        ->getToken()
                        ->getUser());

        $request = $this->getRequest();
        if ($request->getMethod() == "GET") {
            $v = $this->getRequest()->query->get("cl");
            $DS = $this->getRequest()->query->get("ds");
            $TP = $this->getRequest()->query->get("tp");
            $Exam = $this->getRequest()->query->get("exam");

            $em = $this->container->get('doctrine')->getEntityManager();
            $etudiant = $em->getRepository('UserBundle:User')->find($v);


            $note = new \ISETKBundle\Entity\Note();

            if ($TP == "") {
                $note->setTP(NULL);
            } else
                $note->setTP($TP);

            $note->setDS($DS);
            $note->setExam($Exam);
            $note->setEseignant($user);
            $note->setEtudiant($etudiant);

            $em = $this->container->get('Doctrine')->getEntityManager();
            $em->persist($note);
            $em->flush();
        }
        return new RedirectResponse($this->generateUrl('isetk_NoteEnseignant'));
//        $this->redirect('http://symfony.com/doc');
    }
    
    public function listeEtudiantAction(){
        
        $Etudiant = array();


        $em = $this->container->get('doctrine')->getEntityManager();
        $query = $em->createQuery('SELECT c FROM UserBundle:User c WHERE c.roles LIKE :e')
                ->setParameter('e', '%{}%');

        $Etudiant = $query->getResult();
        
        return $this->render('ISETKBundle:Chef:ListEtudiant.html.twig', array('etudiant' => $Etudiant));
    }

    public function ListeEnseignantAction(){

        $Etudiant = array();


        $em = $this->container->get('doctrine')->getEntityManager();
        $query = $em->createQuery('SELECT c FROM UserBundle:User c WHERE c.roles LIKE :e')
            ->setParameter('e', '%ROLE_ENSEIGNANT%');

        $Etudiant = $query->getResult();

        return $this->render('ISETKBundle:Chef:ListEnseignant.html.twig', array('etudiant' => $Etudiant));
    }

}
