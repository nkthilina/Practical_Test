<?php

use App\Http\Controllers\TaskController;
use App\Jobs\SendTaskNotification;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/task', [TaskController::class, "index"])->name('task.index');
Route::get('/task/create', [TaskController::class, "create"])->name('task.create');
Route::post('/task', [TaskController::class, "store"])->name('task.store');
Route::get('/task/{task}/edit', [TaskController::class, "edit"])->name('task.edit');
Route::put('/task/{task}/update', [TaskController::class, "update"])->name('task.update');
// Route::get('/task/{task}', [TaskController::class, "show"])->name('task.show');
Route::delete('/task/{task}/destroy', [TaskController::class, "destroy"])->name('task.destroy');

Route::get('/sendEmail', [TaskController::class, "sendEmail"])->name('sendEmail');
Route::get('/send-email', function(){
    $userMail = 'nkthilinamadhusanka@gmail.com';
    dispatch(new SendTaskNotification($userMail));
    dd('Send mail successfully.');
});

Route::get('/laravel_ten_queue_test_mail', function () {
    $data['text'] = "We are learning laravel 10 mail from laravelia.com";
    $data['email'] = 'nkthilinamadhusanka@gmail.com';
    dispatch(new App\Jobs\SendTaskNotification($data));

    dd('Mail send successfully.');
});
