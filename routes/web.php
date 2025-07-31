<?php


use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
    
    return view('home');
});
Route::get('/test', function () {
    
    return view('test');
});

Route::get('/jobs', function()  {
    return view("jobs", [
        'jobs' => Job::all()
    ]);
});

Route::get('/contact', function(){
    return view('contact');
});

Route::get('/jobs/{id}', function($id)  {
    
        
        //$job = \Illuminate\Support\Arr::first($jobs, fn($job) => $job['id'] == $id);
           $job = Job::find($id);
         //dd($job);
    return view('job', ['job' => $job]);
});