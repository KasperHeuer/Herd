<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;
use App\Http\Controllers\customer\AuthController;

Route::get('/', function () {
    return view(
        'home'
    );
});


Route::get('/jobs', function () {
    $jobs = Job::with('employer')->simplePaginate(3);
    return view("jobs.index", [
        'jobs' => $jobs
    ]);
});

Route::get('/jobs/create', function () {
    return view("jobs.create");
});


Route::get('/jobs/{id}', function ($id) {
    $job = Job::find($id);

    return view("jobs.show", ["job" => $job]);
});


Route::post('/jobs', function () {
    dd(request()->all());
});

Route::get('/contact', function () {
    return view("contact");
});
