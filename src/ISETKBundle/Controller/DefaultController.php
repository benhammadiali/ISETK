<?php

namespace ISETKBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ISETKBundle:Template:Home.html.twig', array());
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
