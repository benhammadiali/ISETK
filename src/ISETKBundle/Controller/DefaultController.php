<?php

namespace ISETKBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use OpenTok\OpenTok;
use OpenTok\MediaMode;
use OpenTok\Role;

class DefaultController extends Controller
{
    


    public function indexAction()
    {
        return $this->render('ISETKBundle:Template:Home.html.twig', array());
    }
    
    public function roomAction()
    {
        $connecter = array();


        $em = $this->container->get('doctrine')->getEntityManager();
        $query = $em->createQuery('SELECT c FROM UserBundle:User c WHERE c.statut = :e')
                ->setParameter('e', '1');

        $connecter = $query->getResult();
        
        return $this->render('ISETKBundle:Template:joinroom.html.twig', array('connecter' => $connecter));
    }
    
    public function msgAction($id)
    {
        
        $API_KEY ='45595822';
        $API_SECRET ='7d4edb6a7694295d469a6dec2cad9a5ae65f5c90';
        $apiObj = new OpenTok($API_KEY, $API_SECRET);
        
        
        $user = new \UserBundle\Entity\User();
        
        $userManager = $this->container->get('fos_user.user_manager');
        $user = $userManager->findUserByUsername($this->container->get('security.context')
                        ->getToken()
                        ->getUser());
        
        if ($id==0){
        
        $user->setStatut('1');
        
        
        $session = $apiObj->createSession(array('mediaMode' => MediaMode::ROUTED));
        
        $id = $session->getSessionId();
        
        $user->setSession($session->getSessionId());
        
        $em = $this->container->get('Doctrine')->getEntityManager();
            $em->persist($user);
            $em->flush();
        
        }
        
        //echo $session->getSessionId();
        $TOKEN = $apiObj->generateToken($id, array('role' => Role::PUBLISHER, 'expireTime' => time()+(7 * 24 * 60 * 60), 'data' =>  $user->getPrenom()));
        
        
        return $this->render('ISETKBundle:Template:msg.html.twig', array('api_key' => $API_KEY, 'sessionId' => $id, 'token' => $TOKEN));
    }
    
    public function mailHeadAction()
    {
        return $this->render('ISETKBundle:Template:MailHead.html.twig', array());
    }
    
    public function headAction()
    {
        return $this->render('ISETKBundle:Template:Head.html.twig', array());
    }
    
    public function menuAction()
    {
        return $this->render('ISETKBundle:Template:Menu.html.twig', array());
    }
    
    public function bannerAction()
    {
        return $this->render('ISETKBundle:Template:Banner.html.twig', array());
    }
    
    public function mainAction()
    {
        return $this->render('ISETKBundle:Template:Main.html.twig', array());
    }
    
    public function footerAction()
    {
        return $this->render('ISETKBundle:Template:Footer.html.twig', array());
    }
    
}
