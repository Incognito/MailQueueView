<?php

namespace Incognito\Bundle\MailQueueViewBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Message
 */
class Message
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $headers;

    /**
     * @var string
     */
    private $subject;

    /**
     * @var string
     */
    private $body;

    /**
     * @var string
     */
    private $contentType;

    /**
     * @var string
     */
    private $charset;

    /**
     * @var \DateTime
     */
    private $queuedAt;

    /**
     * @var \DateTime
     */
    private $sendAt;

    /**
     * @var string
     */
    private $sender;

    /**
     * @var string
     */
    private $recipients;

    /**
     * @var string
     */
    private $recipientsCC;

    /**
     * @var string
     */
    private $recipientsBCC;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set headers
     *
     * @param string $headers
     * @return Message
     */
    public function setHeaders($headers)
    {
        $this->headers = $headers;

        return $this;
    }

    /**
     * Get headers
     *
     * @return string 
     */
    public function getHeaders()
    {
        return $this->headers;
    }

    /**
     * Set subject
     *
     * @param string $subject
     * @return Message
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;

        return $this;
    }

    /**
     * Get subject
     *
     * @return string 
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Set body
     *
     * @param string $body
     * @return Message
     */
    public function setBody($body)
    {
        $this->body = $body;

        return $this;
    }

    /**
     * Get body
     *
     * @return string 
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Set contentType
     *
     * @param string $contentType
     * @return Message
     */
    public function setContentType($contentType)
    {
        $this->contentType = $contentType;

        return $this;
    }

    /**
     * Get contentType
     *
     * @return string 
     */
    public function getContentType()
    {
        return $this->contentType;
    }

    /**
     * Set charset
     *
     * @param string $charset
     * @return Message
     */
    public function setCharset($charset)
    {
        $this->charset = $charset;

        return $this;
    }

    /**
     * Get charset
     *
     * @return string 
     */
    public function getCharset()
    {
        return $this->charset;
    }

    /**
     * Set queuedAt
     *
     * @param \DateTime $queuedAt
     * @return Message
     */
    public function setQueuedAt($queuedAt)
    {
        $this->queuedAt = $queuedAt;

        return $this;
    }

    /**
     * Get queuedAt
     *
     * @return \DateTime 
     */
    public function getQueuedAt()
    {
        return $this->queuedAt;
    }

    /**
     * Set sendAt
     *
     * @param \DateTime $sendAt
     * @return Message
     */
    public function setSendAt($sendAt)
    {
        $this->sendAt = $sendAt;

        return $this;
    }

    /**
     * Get sendAt
     *
     * @return \DateTime 
     */
    public function getSendAt()
    {
        return $this->sendAt;
    }

    /**
     * Set sender
     *
     * @param string $sender
     * @return Message
     */
    public function setSender($sender)
    {
        $this->sender = $sender;

        return $this;
    }

    /**
     * Get sender
     *
     * @return string 
     */
    public function getSender()
    {
        return $this->sender;
    }

    /**
     * Set recipients
     *
     * @param string $recipients
     * @return Message
     */
    public function setRecipients($recipients)
    {
        $this->recipients = $recipients;

        return $this;
    }

    /**
     * Get recipients
     *
     * @return string 
     */
    public function getRecipients()
    {
        return $this->recipients;
    }

    /**
     * Set recipientsCC
     *
     * @param string $recipientsCC
     * @return Message
     */
    public function setRecipientsCC($recipientsCC)
    {
        $this->recipientsCC = $recipientsCC;

        return $this;
    }

    /**
     * Get recipientsCC
     *
     * @return string 
     */
    public function getRecipientsCC()
    {
        return $this->recipientsCC;
    }

    /**
     * Set recipientsBCC
     *
     * @param string $recipientsBCC
     * @return Message
     */
    public function setRecipientsBCC($recipientsBCC)
    {
        $this->recipientsBCC = $recipientsBCC;

        return $this;
    }

    /**
     * Get recipientsBCC
     *
     * @return string 
     */
    public function getRecipientsBCC()
    {
        return $this->recipientsBCC;
    }
}
