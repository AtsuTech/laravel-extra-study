<div>
    {{-- The Master doesn't talk, he acts. --}}
    <h1>ジョブの確認</h1>

    <p>
        キューの非同期モード<code class="bg-slate-300 rounded-md p-1">php artisan queue:work</code>で
        このページ<code class="bg-slate-300 rounded-md p-1">/myjob</code>にアクセスすると実行される
    </p>
    
    <pre><code class="language-php">
        //jobs>MyJob.php
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
                    'title' => 'ジョブ 非同期確認',
                    'author' => 'ジョブで追加',
                    'price' => 1000000,
                ]);
            }
        }

    </code></pre>

    この<code class="bg-slate-300 rounded-md p-1">MyJob.php</code>をプロバイダーに登録
    <pre><code class="language-php">
        namespace App\Providers;

        use Illuminate\Support\ServiceProvider;

        class MyJobProvider extends ServiceProvider
        {
            /**
            * Register services.
            */
            public function register(): void
            {
                //
                $this->app->bindMethod(MyJob::class.'@handle',function($job , $app){ return $job->handle();});
            }

            /**
            * Bootstrap services.
            */
            public function boot(): void
            {
                //
            }
        }
    </code></pre>

</div>
