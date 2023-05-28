<?php
//src/Command/SendEmailCommand.php

namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Mailer\Bridge\Google\Smtp\GmailTransport;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;

class SendEmailCommand extends Command
{
    protected static $defaultName = 'send:email';
    private MailerInterface $mailer;



    protected function configure()
    {
        $this
            ->setDescription('Command for send self email')
        ;
    }
    protected function sendemail (MailerInterface $mailer) {
        // If you want use htmlTemplate and context function you need use TemplatedEmail
        // instead of Email object
        $email = (new TemplatedEmail())
            ->from('onartfastsushi@gmail.com')
            ->to('onartfastsushi@gmail.com')
            //->cc('exemple@mail.com')
            //->bcc('exemple@mail.com')
            //->replyTo('test42@gmail.com')
            //->priority(Email::PRIORITY_HIGH)
            ->subject('I love Me')
            // If you want use text mail only
            ->text('Lorem ipsum...')
            // If you want use raw html
            ->html('<h1>Hello World</h1> <p>...</p>')
            // if you want use template from your twig file
            // template/emails/registration.html.twig
            ->htmlTemplate('emails/registration.html.twig')
            // with param
            ->context([
                'username' => 'John',
            ])
        ;
        $mailer->send($email);
    }
    protected function execute(InputInterface $input, OutputInterface $output)
    {

        $output->writeln([
            'Command Send Self Email',
            '============'
        ]);
        sendemail($this);


        $output->writeln('Successful you send a self email');
    }
}