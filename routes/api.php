<?php

use Illuminate\Support\Facades\Route;
use codicastudio\NovaScheduledJobs\Http\Controllers\JobsController;
use codicastudio\NovaScheduledJobs\Http\Controllers\DispatchJobController;

/*
|--------------------------------------------------------------------------
| Card API Routes
|--------------------------------------------------------------------------
|
| Here is where you may register API routes for your card. These routes
| are loaded by the ServiceProvider of your card. You're free to add
| as many additional routes to this file as your card may require.
|
 */

Route::get('jobs', JobsController::class . '@index');
Route::post('dispatch-job', DispatchJobController::class . '@create');
