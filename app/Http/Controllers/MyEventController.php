<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\MyEvent;

class MyEventController extends Controller
{
    //
    public function event(){
        $event_value = 'イベント コントローラー';
        MyEvent::dispatch($event_value);
        return redirect()->route('books.index');
    }
}
