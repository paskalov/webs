<?php

namespace Filmweb\WebsiteBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Filmweb\WebsiteBundle\Entity\Recenzje;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ReviewController extends Controller {

    /**
     * @Route("/review", name="addReview")
     */
    public function addReviewAction(Request $request) {

        if($request->getMethod() == 'POST') {
            $user = $this->container->get('security.context')->getToken()->getUser();
            $reviewContent = $this->get('request')->request->get('review');
            $movieId = $this->get('request')->request->get('movieId');

            $repository = $this->getDoctrine()->getRepository('Filmweb\WebsiteBundle\Entity\Filmy');
            $movie = $repository->find($movieId);

            $em = $this->getDoctrine()->getManager();
            $review = new Recenzje();

            $review->setIdFilm($movie);
            $review->setIdUzytkownik($user);

            $review->setCzasZlozenia(new \DateTime());
            $review->setTresc($reviewContent);

            $em->persist($review);
            $em->flush();

            return $this->render('FilmwebWebsiteBundle:SingleMovie:review_confirmation.html.twig');

        }

        return $this->redirect($this->generateUrl('index'));
    }

}