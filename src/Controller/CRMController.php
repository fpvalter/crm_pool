<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CRMController extends BaseController
{
    /**
     * @Route("/", name="crm_index")
     */
    public function index(): Response
    {
        return $this->render('index.html.twig');
    }

    /**
     * @Route("/customer", name="customer")
     */
    public function customer(): Response
    {
        return $this->render('customer/index.html.twig');
    }

    /**
     * @Route("/prospect-client", name="prospect_client")
     */
    public function prospectClient(): Response
    {
        return $this->render('client/index.html.twig');
    }
}
