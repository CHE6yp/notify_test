<?php
use Symfony\Component\Notifier\Notification\NotificationInterface;

interface MessageInterface extends NotificationInterface
{
    public function getMessage():string;
    public function checkNotificationSource(NotifierInterface $notifier): bool;
    public function getSent():bool;
    public function setSent();
}