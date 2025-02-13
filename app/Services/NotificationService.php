<?php

namespace App\Services;

class NotificationService
{
    protected $channel;

    public function __construct($channel)
    {
        $this->channel = $channel;
    }

    public function send($message)
    {
        return $this->channel->send($message);
    }
}
