<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\SessionController;
use App\Jobs\TranslateJob;
use App\Mail\JobsPosted;
use App\Models\Job;
use Illuminate\Contracts\Mail\Mailer;
use Illuminate\Mail\Mailer as MailMailer;

Route::get('test', function () {
    $job = Job::first();
    
    TranslateJob::dispatch($job);
    return "Done";
});

Route::view('/', 'home');
Route::view('/contact', 'contact');

route::get('/jobs', [JobController::class, 'index']);
route::get('/jobs/create', [JobController::class, 'create']);

Route::resource('jobs', JobController::class);
route::get('/jobs/{$job}', [JobController::class, 'show']);
Route::get('/jobs/{job}/edit', [JobController::class, 'edit'])
    ->middleware('auth')
    ->can('edit', 'job');

route::patch('/jobs/{$job}', [JobController::class, 'update']);
route::delete('/jobs/{$job}', [JobController::class, 'destroy']);

Route::get('/register', [RegisterUserController::class, 'create']);
Route::post('/register', [RegisterUserController::class, 'store']);

Route::get('/login', [SessionController::class, 'create'])->name('login');
Route::post('/login', [SessionController::class, 'store']);
Route::post('/logout', [SessionController::class, 'destroy']);
