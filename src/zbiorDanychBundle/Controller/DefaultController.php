<?php

namespace zbiorDanychBundle\Controller;
use zbiorDanychBundle\Entity\kategoria;
use zbiorDanychBundle\Entity\wpisy;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;


class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
		$wynik = $this->getDoctrine()->getEntityManager()->getRepository('zbiorDanychBundle:kategoria')->findAll();
		
        return $this->render('zbiorDanychBundle:Default:index.html.twig',array('kategoria'=>$wynik)
		
		);
    }
}
