<?php

namespace App\Services;

class EmailService
{
    public function send($message)
    {
        return "📧 تم إرسال البريد الإلكتروني: " . $message;
    }
}
