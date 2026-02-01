<?php

namespace App\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Foundation\Bus\Dispatchable; //add
use Illuminate\Queue\InteractsWithQueue; //add
use Illuminate\Queue\SerializesModels; //add
use App\Models\Book;

class MyJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle():void
    {

        //ジョブの動作でテーブルに新しいデータを保存
        Book::create([
            'title' => '特定のキュー',
            'author' => 'ジョブで追加',
            'price' => 1000000,
        ]);
    }
}
