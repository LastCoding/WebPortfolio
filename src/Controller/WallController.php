<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

class WallController extends Controller {
	/**
	 * @Route("/")
	 * @Method({"GET"})
	 */
	public function index() {
		return $this->render( 'wall/index.html.twig');
	}
}