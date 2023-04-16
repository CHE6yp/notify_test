<?php

use Symfony\Component\Notifier\Recipient\RecipientInterface;
use Symfony\Component\Notifier\NotifierInterface;

interface UserInterface extends RecipientInterface
{
    public function getNotifier(): NotifierInterface;
}