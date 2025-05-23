<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;


Route::get('/', function () {
    return view('home');
});


//INDEX - Rota para mostrar todos os jobs

Route::get('/jobs', function () {

    $jobs = Job::with('employer')->latest()->simplePaginate(3);

    return view('jobs.index', [
        'jobs' => $jobs
    ]);
});


//CREATE - Rota para criar um novo job

Route::get('/jobs/create', function () {
    return view('jobs.create');
});


//SHOW -Rota para mostrar um job

Route::get('/jobs/{job}', function (Job $job) {

    return view('jobs.show', ['job' => $job]);
});

//STORE - Rota para guardar um novo job na DB

Route::post('/jobs', function () {
    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required']

    ]);

    Job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'employer_id' => '1',
    ]);
    return redirect('/jobs');
});

//EDIT -Rota para editar um job

Route::get('/jobs/{job}/edit', function (Job $job) {

    return view('jobs.edit', ['job' => $job]);
});

//UPDATE -Rota para salvar a edição de um job

Route::patch('/jobs/{job}', function (Job $job) {

    //authorize

    //validade
    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required']
    ]);

    //update
    $job->update([
        'title' => request('title'),
        'salary' => request('salary'),
    ]);

    //redirect to the job page
    return redirect('/jobs/' . $job->id);
});

//DESTROY -Rota para apagar um job

Route::delete('/jobs/{job}', function (Job $job) {
    //authorize

    //delete the job
    $job->delete();

    //redirect
    return redirect('/jobs');
});


Route::get('/contact', function () {
    return view('contact');
});
