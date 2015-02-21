<?php

namespace Filmweb\WebsiteBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class MoviesByGenreController extends Controller {


    /**
     * @Route("/genre-ajax/{genre}", name="moviesByGenreAjax")
     */
    public function moviesByGenreAjaxAction($genre) {
        $gatunek = $this->getDoctrine()
            ->getRepository('Filmweb\WebsiteBundle\Entity\Gatunki')
            ->find($genre);
        $filmy = $gatunek->getIdFilm();

        if(count($filmy) == 0) {
            return $this->render('FilmwebWebsiteBundle:MoviesList:movies_not_found_ajax.html.twig');
        }

        return $this->render('FilmwebWebsiteBundle:MoviesList:movies_by_genre_ajax.html.twig',
            array(
                'filmy'=>$filmy,
            )
        );
    }

    /**
     * @Route("/genre/{genre}", name="moviesByGenre")
     */
    public function moviesByGenreAction($genre) {

        $repository = $this->getDoctrine()->getRepository('Filmweb\WebsiteBundle\Entity\Gatunki');
        $gatunki = $repository->findAll();

        $gatunek = $this->getDoctrine()
            ->getRepository('Filmweb\WebsiteBundle\Entity\Gatunki')
            ->find($genre);
        $filmy = $gatunek->getIdFilm();

        if(count($filmy) == 0) {
            return $this->render('FilmwebWebsiteBundle:MoviesList:movies_not_found.html.twig',
                array(
                    'gatunki' => $gatunki,
                )
            );
        }

        return $this->render('FilmwebWebsiteBundle:MoviesList:movies_by_genre.html.twig',
            array(
                'filmy' => $filmy,
                'gatunki' => $gatunki,
            )
        );
    }



}