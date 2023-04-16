<?php

declare(strict_types=1);

namespace App\Entity;


final class User implements UserInterface
{
    private int $id;

    private Collection<NotifierInterface> $notifyiers;

    private NotifierInterface $mainNotifier;

    public function getId(): ?Uuid
    {
        return $this->id;
    }

    public function setId(int $id): User
    {
        $this->id = $id;
        return $this;
    }

    public function getNotifyiers() -> Collection<NotifierInterface>
    {
        
    }

    public function setNotifyiers(NotifierInterface ...$notifyiers)
    {
        // code...
    }

    public function getNotifier() -> NotifierInterface
    {
        return $this->mainNotifier;
    }

    public function setNotifier(NotifierInterface $notifier)
    {
        
    }

}