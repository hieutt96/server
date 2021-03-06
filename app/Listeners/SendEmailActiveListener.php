<?php

namespace App\Listeners;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Events\SendEmailActive;
use Bschmitt\Amqp\Facades\Amqp;
use Pusher;
use Illuminate\Support\Facades\Redis;

class SendEmailActiveListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(SendEmailActive $event)
    {
        // Amqp::publish('', json_encode(['name' => 'EmailActive', 'data' =>['user' => $event->user]]) , ['queue' => 'wallet-queue']);

        Redis::subscribe(['hieutt-channel'], function () {
            echo 1;
        });
    }
}
