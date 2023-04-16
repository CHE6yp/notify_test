<?php


namespace App\Entity;

final class Message implements MessageInterface
{
    private string $message;
    private Collection<NotifierInterface> $notifyiers;
    private bool $isSent;

    public function getMessage():string 
    {
        return $this->message;
    }
    public function checkNotificationSource(NotifierInterface $notifier): bool {
        return in_array($notifier, $this->notifyiers);
    }
    public function getSent():bool{
        return $this->isSent;
    }
    public function setSent(){
        $this->isSent = true;
    }

}