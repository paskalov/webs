<?php

namespace Filmweb\WebsiteBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
     * 
     * @Route("/", name="index")
     */
    public function indexAction()
    {
        $repository = $this->getDoctrine()->getRepository('Filmweb\WebsiteBundle\Entity\Gatunki');
        $gatunki = $repository->findAll();

        $repository = $this->getDoctrine()->getRepository('Filmweb\WebsiteBundle\Entity\Filmy');
        $filmy = $repository->findAll();

        return $this->render('FilmwebWebsiteBundle:Default:index.html.twig',
                array(
                    'gatunki'=> $gatunki,
                    'filmy' => $filmy,
                )
            );
    }
}
