<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;


Route::get('/', function () {
    return view('home');
});


//Rota para mostrar todos os jobs

Route::get('/jobs', function () {

    $jobs = Job::with('employer')->latest()->simplePaginate(3);

    return view('jobs.index', [
        'jobs' => $jobs
    ]);
});


//Rota para mostrar a página para criar um novo job

Route::get('/jobs/create', function(){
    return view('jobs.create');

});


//Rota para mostrar um job

Route::get('/job/{id}', function ($id){

    $job = Job::find($id);

    return view('jobs.show', ['job' => $job]);

});

Route::post('/jobs', function(){
   //validation

    Job::create([
        'title'=> request('title'),
        'salary'=> request('salary'),
        'employer_id'=>'',
    ]);
    return redirect('/jobs');
});


Route::get('/contact', function () {
    return view('contact');
});

