<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DropzoneController;


Route::get('/', function () {
    return view('welcome');
});
Route::post('dropzone',[DropzoneController::class,"upload"])->name("dropzone");
