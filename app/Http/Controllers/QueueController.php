<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\MyJob;
class QueueController extends Controller
{
    //
    public function on_queue(Request $request){
        // "/myjob/on_queue/(数字)" にアクセスして奇数の場合はoddキューに偶数の場合はevenキューにジョブを投入
        $q_name = $request->number % 2 == 0 ? 'even' : 'odd';
        MyJob::dispatch($request->number)->onQueue($q_name);
        return redirect()->route('books.index');
    }
}
