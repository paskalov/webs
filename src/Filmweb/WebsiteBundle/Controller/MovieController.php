<?php

namespace Filmweb\WebsiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class MovieController extends Controller
{
    /**
     * 
     * @Route("/movie/{slug_id}/{slug_name}", name="movie")
     */

    public function movieAction($slug_id)
    {
        $id_film = $slug_id;

        $repository = $this->getDoctrine()->getRepository('Filmweb\WebsiteBundle\Entity\Gatunki');
        $gatunki = $repository->findAll();

        $repository = $this->getDoctrine()->getRepository('Filmweb\WebsiteBundle\Entity\Filmy');
        $film = $repository->find($id_film);

        if (!$film) {
            return $this->redirect($this->generateUrl('index'));
        }

        $em = $this->getDoctrine()->getManager();
        $user = $this->container->get('security.context')->getToken()->getUser();

        $query = $em->createQuery('
            SELECT p
            FROM Filmweb\WebsiteBundle\Entity\Zamowienia p
            WHERE p.dataZwrotu > :currentDate and p.idUzytkownik = :user and p.idFilm = :id_film
        ')->setParameters(array(
            'currentDate'=> new \DateTime(),
            'user' => $user,
            'id_film' => $id_film,
        ));

        $userOrder = $query->getResult();

        $doesUserHavePermissionToWatch = true;
        if(!$userOrder) {
            $doesUserHavePermissionToWatch = false;
        }

        return $this->render('FilmwebWebsiteBundle:SingleMovie:single_movie.html.twig',
            array(
                'gatunki' => $gatunki,
                'film' => $film,
                'doesUserHavePermissionToWatch' => $doesUserHavePermissionToWatch,
            )
        );

    }
}
