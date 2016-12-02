<?php
/**
 * Created by PhpStorm.
 * User: brian
 * Date: 12/2/16
 * Time: 9:27 AM
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class GenusController
{
    /**
     * @Route("/genus/{genusName2}")
     * @\Symfony\Component\Routing\Annotation\Route()
     */
    public function showAction($genusName)
    {
        return new Response('The genus: '.$genusName);
    }
}