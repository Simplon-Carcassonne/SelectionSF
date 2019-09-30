<?php

// src/Service/MailManager.php

namespace App\Service;

use Symfony\Component\DependencyInjection\ContainerInterface;

class MailManager
{

    private $mailer;
    private $templating;

    /**
     * @var string 
     */
    private $ccEmail1;
    private $mxEmailDomain;

    public function __construct(\Swift_Mailer $mailer, \Twig_Environment $templating, string $ccEmail1, string $mxEmailDomain)
    {
        $this->mailer = $mailer;
        $this->templating = $templating;
        $this->ccEmail1 = $ccEmail1;
        $this->mxEmailDomain = $mxEmailDomain;
    }

    public function sendEmail($title, $fromEmail, $toEmail, $emailTemplate, $params = [], $addCc = true)
    {
        if(!is_array($toEmail)){
            //https://swiftmailer.symfony.com/docs/messages.html
            // Set the To addresses with an associative array (setTo/setCc/setBcc)
            //->setTo(['receiver@domain.org', 'other@domain.org' => 'A name'])

        }
        $message = (new \Swift_Message($title))
            ->setSender( $this->mxEmailDomain)
            ->setFrom( $this->mxEmailDomain)
            ->setTo($toEmail)  //emails are visible for all fo us

            //->setTo($this->ccEmail1)
            //->setReplyTo($this->mxEmailDomain);
            ->setReplyTo('ataurisano.ext@simplon.co');
           /* ->setBody(
            $this->templating->render(
                $emailTemplate, $params
            ), 'text/html'
        );*/

        if ($addCc)
            $message->setCc($this->ccEmail1);

        //$message->setBcc($toEmail);

        //https://medium.com/@vanessaasse/symfony-afficher-une-image-dans-un-mail-avec-swiftmailer-45bc96bff63e
        //$img = $message->embed(\Swift_Image::fromPath('assets/pics/logoSimplon.png'));

        $img = $message->embed(\Swift_Image::fromPath('http://51.68.44.195/SelectionSF/public/pics/logoSimplonCarcassonne.png'));
        $params['img'] = $img;

        $message->setBody(
            $this->templating->render(
                $emailTemplate, $params
            ), 'text/html'
        );

        if ($this->mailer->send($message))
            return true;
        else
            return false;
    }

}
