<?php


namespace Filmweb\WebsiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class UserOrdersController extends Controller {

    /**
     * @route("my-orders", name="myOrders")
     */

    public function showMyOrdersAction() {
        $user = $this->container->get('security.context')->getToken()->getUser();

        if($user == 'anon.') {
            return $this->redirect($this->generateUrl('fos_user_security_login'));
        }
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery('
            SELECT p
            FROM Filmweb\WebsiteBundle\Entity\Zamowienia p
            WHERE p.dataZwrotu > :currentDate and p.idUzytkownik = :user
        ')->setParameters(array(
            'currentDate'=> new \DateTime(),
            'user' => $user,
            ));

        $orders = $query->getResult();

        $query = $em->createQuery('
            SELECT p
            FROM Filmweb\WebsiteBundle\Entity\Zamowienia p
            WHERE p.dataZwrotu < :currentDate and p.idUzytkownik = :user
        ')->setParameters(array(
            'currentDate'=> new \DateTime(),
            'user' => $user,
        ));
        $expiredOrders = $query->getResult();

        $repository = $this->getDoctrine()->getRepository('Filmweb\WebsiteBundle\Entity\Gatunki');
        $gatunki = $repository->findAll();

        return $this->render('FilmwebWebsiteBundle:UserOrders:user_orders.html.twig', array(
            'orders' => $orders,
            'expiredOrders' => $expiredOrders,
            'gatunki' => $gatunki,
        ));

    }
}