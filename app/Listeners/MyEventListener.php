<?php

namespace App\Listeners;

use App\Events\MyEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Models\Book;

class MyEventListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(MyEvent $event): void
    {
        //行いたい処理
        $event_value = $event->event_value;
        Book::create([
            'title' => $event_value,
            'author' => 'イベント リスナー',
            'price' => 1000000,
        ]);
    }
}
