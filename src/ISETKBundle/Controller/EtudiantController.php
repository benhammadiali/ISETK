<?php

namespace ISETKBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
//use FOS\UserBundle\Entity;


class EtudiantController extends Controller
{
    public function indexAction()
    {
        return $this->render('ISETKBundle:Etudiant:Home.html.twig', array());
    }
    
    public function emploiAction()
    {
        //$user = new UserListener();
        $user = new \UserBundle\Entity\User();
        
        $userManager = $this->container->get('fos_user.user_manager');
        $user = $userManager->findUserByUsername($this->container->get('security.context')
                    ->getToken()
                    ->getUser());
        
        
        
        return $this->render('ISETKBundle:Etudiant:EmploiDuTemps.html.twig', array('user' => $user));
    }
    
    public function absenceAction()
    {
        $user = new \UserBundle\Entity\User();
        
        $userManager = $this->container->get('fos_user.user_manager');
        $user = $userManager->findUserByUsername($this->container->get('security.context')
                    ->getToken()
                    ->getUser());
        
        
        $Absences = array();
        
        $em=$this->container->get('doctrine')->getEntityManager();
        $query = $em->createQuery( 'SELECT A FROM ISETKBundle:Abcense A WHERE A.Etudiant =:user')
                            ->setParameter('user',$user);
                            
        $Absences=$query->getResult();
        
        return $this->render('ISETKBundle:Etudiant:Absence.html.twig', array('user' => $user, 'absences'=>$Absences));
    }
    
    public function resultatAction()
    {
        $user = new \UserBundle\Entity\User();
        
        $userManager = $this->container->get('fos_user.user_manager');
        $user = $userManager->findUserByUsername($this->container->get('security.context')
                    ->getToken()
                    ->getUser());
        
        $Notes = array();
        
        $em=$this->container->get('doctrine')->getEntityManager();
        $query = $em->createQuery( 'SELECT A FROM ISETKBundle:Note A WHERE A.Etudiant =:user')
                            ->setParameter('user',$user);
                            
        $Notes=$query->getResult();
        
        return $this->render('ISETKBundle:Etudiant:Resultat.html.twig', array('user' => $user, 'notes'=>$Notes));
    }
}
