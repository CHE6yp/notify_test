<?php
namespace App\Service;

use Symfony\Component\Notifier\NotifierInterface;
use Symfony\Component\Notifier\Recipient\RecipientInterface;

final class NotificationService
{
    public function __construct(
    ) {
    }

    public function notify(MessageInterface $message, RecipientInterface ...$recepients): void
    {  
        foreach ($recepients as $recepient) {
            $notifier = $recepient->getNotifier();
            if (!$message->checkNotifier($notifier))
                continue;
            $notifier->send($message, $recepient);
        }
        $message->setSent(true);
    }
}