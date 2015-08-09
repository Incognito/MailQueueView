<?php

namespace Incognito\Bundle\MailQueueViewBundle\Controller;

use Incognito\Bundle\MailQueueViewBundle\Entity\Message;
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

    // Don't consider this part of an API
    public function messageAction(Message $message)
    {
        return $this->render('IncognitoMailQueueViewBundle:Default:emailTemplate.html.twig',
            array('message' => $message)
        );
    }
}
