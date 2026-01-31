<?php

use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Features;
use Livewire\Volt\Volt;
use App\Http\Controllers\BookController;
use App\Livewire\Counter; // Livewire Counter
use App\Livewire\Books; // Livewire Books
use App\Livewire\SpreadSheet; // Livewire SpreadSheet
use App\Livewire\ParamerterUrl; // Livewire ParamerterUrl
use App\Livewire\Middleware; // Livewire Middleware
use App\Livewire\Myconfigdata;
use App\Http\Middleware\MyMiddleware; // MyMiddleware
use App\Livewire\Myoriginalservice; // Myoriginalservice
use App\Livewire\MyJob; //Myjob 
use App\Livewire\Filecontroll; //File

Route::get('/', function () {
    return view('welcome');
})->name('home');

// Livewire Counter
Route::get('/counter', Counter::class);

//store book
Volt::route('/books/add', 'books.add')->name('books.add');

//add book process
Route::post('/books/add' , [BookController::class, 'store'])->name('books.store');

//Book index
Route::get('/books', Books::class)->name('books.index');

Route::get('/spreadsheet', SpreadSheet::class)->name('spreadsheet.index');


//パラメータにwhereで制限つける
Route::get('/paramerter-url/{id}', ParamerterUrl::class)->where('id', '[0-9]+');

//configから値の利用
Route::get('/cocnfig/data/use',Myconfigdata::class);

//ファイル内容取得
Route::get('/file/get',Filecontroll::class)->name('file.get');

//自作のサービス
Route::get('/myoriginalservice', Myoriginalservice::class)->name('myoriginalservice.index');

//ミドルウェア確認ページ
Route::get('/middleware/false', Middleware::class)->name('middleware.index')->name('middleware.false');
Route::get('/middleware/true', Middleware::class)->name('middleware.index')->middleware(MyMiddleware::class)->name('middleware.true');


//ジョブの確認
Route::get('/myjob', MyJob::class)->name('myjob.index');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('profile.edit');
    Volt::route('settings/password', 'settings.password')->name('user-password.edit');
    Volt::route('settings/appearance', 'settings.appearance')->name('appearance.edit');

    Volt::route('settings/two-factor', 'settings.two-factor')
        ->middleware(
            when(
                Features::canManageTwoFactorAuthentication()
                    && Features::optionEnabled(Features::twoFactorAuthentication(), 'confirmPassword'),
                ['password.confirm'],
                [],
            ),
        )
        ->name('two-factor.show');
});
