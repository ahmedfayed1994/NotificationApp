<?php

namespace App\Services;

class SmsService
{
    public function send($message)
    {
        return "📱 تم إرسال رسالة SMS: " . $message;
    }
}
