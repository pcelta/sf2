<?php

namespace Acme\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * @Route("/gelso")
 */
class GelsoController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        print 'sdsds';
        return array(11);
    }

    /**
     * @Route("/fred")
     */
    public function fredAction()
    {
        echo 'fredinnn';
        return array();
    }

}