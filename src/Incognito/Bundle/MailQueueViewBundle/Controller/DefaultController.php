<?php

namespace Incognito\Bundle\MailQueueViewBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('IncognitoMailQueueViewBundle:Default:index.html.twig', array('name' => $name));
    }
}
