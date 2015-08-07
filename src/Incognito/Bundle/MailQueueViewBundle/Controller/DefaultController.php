<?php

namespace Incognito\Bundle\MailQueueViewBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $messages = $this->getDoctrine()
            ->getRepository('IncognitoMailQueueViewBundle:Message')
            ->findAll()
        ;

        return $this->render('IncognitoMailQueueViewBundle:Default:index.html.twig',
            array('messages' => $messages)
        );
    }
}
