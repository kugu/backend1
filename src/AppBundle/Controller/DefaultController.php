<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     *
     * @param Request $request
     *
     * @return Response
     */
    public function indexAction(Request $request)
    {
        $arr = ['a' => 'b', 'c' => 123];

        $arr = $this->getDoctrine()->getConnection()->fetchAll('SELECT * FROM user_vk');

        $response = new Response(\json_encode($arr), 200);

        return $response;
    }
}
