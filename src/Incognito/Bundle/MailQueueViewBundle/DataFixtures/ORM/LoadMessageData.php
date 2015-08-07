<?php

namespace Incognito\Bundle\MailQueueViewBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Incognito\Bundle\MailQueueViewBundle\Entity\Message;

class LoadUserData implements FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $message = new Message();
        $message
            ->setHeaders('')
            ->setSubject('Test subject')
            ->setBody('Hello world')
            ->setContentType('')
            ->setCharset('')
            ->setQueuedAt(new \DateTime())
            ->setSendAt(new \DateTime())
            ->setSender('Sender sender@example.com')
            ->setRecipients('recip@example.com')
            ->setRecipientsCC('')
            ->setRecipientsBCC('')
        ;

        $manager->persist($message);
        $manager->flush();
    }
}
