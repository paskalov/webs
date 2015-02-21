<?php

namespace Filmweb\WebsiteBundle\Controller;

use Filmweb\WebsiteBundle\Entity\Zamowienia;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class OrderController extends Controller
{

    /**
     * @Route("/order", name="order")
     */
    public function orderAction(Request $request)
    {

        if ($request->getMethod() == 'POST') {

            $user = $this->container->get('security.context')->getToken()->getUser();
            $movieId = $this->get('request')->request->get('movieId');

            $repository = $this->getDoctrine()->getRepository('Filmweb\WebsiteBundle\Entity\Filmy');
            $movie = $repository->find($movieId);

            $repository = $this->getDoctrine()->getRepository('Filmweb\WebsiteBundle\Entity\Statuszamowienia');
            $status = $repository->find(2);

            $orderDate = new \DateTime();
            $orderExpiryDate = new \DateTime(date('Y-m-d H:i:s', strtotime('+3 day', time())));

            $em = $this->getDoctrine()->getManager();
            $order = new Zamowienia();

            $order->setIdFilm($movie);
            $order->setIdUzytkownik($user);
            $order->setDataZamowienia($orderDate);
            $order->setDataZwrotu($orderExpiryDate);
            $order->setIdStatus($status);

            $em->persist($order);

            $em->flush();

            return $this->redirect($this->generateUrl('myOrders'));

        } else {

            return $this->redirect($this->generateUrl('index'));
        }
    }

    /**
     * @Route("/order-info", name="orderInfo")
     */
    public function orderInformationAction(Request $request) {

        if ($request->getMethod() == 'POST') {

            $user = $this->container->get('security.context')->getToken()->getUser();

            if($user == 'anon.') {
                return $this->redirect($this->generateUrl('fos_user_security_login'));
            }

            $movieId = $this->get('request')->request->get('movieId');

            $repository = $this->getDoctrine()->getRepository('Filmweb\WebsiteBundle\Entity\Filmy');
            $movie = $repository->find($movieId);

            $repository = $this->getDoctrine()->getRepository('Filmweb\WebsiteBundle\Entity\Gatunki');
            $gatunki = $repository->findAll();

            $orderDate = new \DateTime();
            $orderExpiryDate = new \DateTime(date('Y-m-d H:i:s', strtotime('+3 day', time())));

            return $this->render('FilmwebWebsiteBundle:Order:order_information.html.twig',
                array(
                    'film'=>$movie,
                    'user'=>$user,
                    'gatunki'=>$gatunki,
                    'dataWypozyczenia' => $orderDate->format('Y-m-d H:i:s'),
                    'dataZwrotu' => $orderExpiryDate->format('Y-m-d H:i:s'),
                )
            );
        } else {
            return $this->redirect($this->generateUrl('index'));
        }
    }
}