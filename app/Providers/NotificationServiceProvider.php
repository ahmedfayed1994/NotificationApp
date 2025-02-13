<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\NotificationService;
use App\Services\EmailService;
use App\Services\SmsService;
use Illuminate\Http\Request;

class NotificationServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(NotificationService::class, function ($app) {
            $request = $app->make(Request::class);
            $channel = $request->input('channel', 'email');

            if ($channel === 'sms') {
                return new NotificationService(new SmsService());
            }

            return new NotificationService(new EmailService());
        });
    }

    public function boot()
    {
        //
    }
}
