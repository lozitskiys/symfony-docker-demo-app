<?php

namespace App\Controller;

use FOS\RestBundle\Controller\AbstractFOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\Routing\Annotation\Route;

class LuckyController extends AbstractFOSRestController
{
    /**
     * @Route("/lucky/number", name="lnumber")
     */
    public function number()
    {
        $number = random_int(0, 100);

        return $this->json($number);
    }

    /**
     * @Rest\Post("/list", name="testlist")
     */
    public function list()
    {
        $number = random_int(0, 100);

        return $this->json([$number]);
    }
}
