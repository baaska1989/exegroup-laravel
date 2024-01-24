<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\TeacherController;



Route::group(['as' => 'api.'], function ()
{
    //Auth
    Route::post('/auth/login', [LoginController::class, 'login']);
    Route::post('/auth/user', [UserController::class, 'check']);

    //Clients
    Route::post('/saveClient', [ClientController::class, 'insertClient']);
    Route::post('/getClients', [ClientController::class, 'getClients']);

    //Teachers
    Route::post('/saveTeacher', [TeacherController::class, 'saveTeacher']);
    Route::post('/getTeachers', [TeacherController::class, 'getTeachers']);
    Route::get('/getTeacher/{id}', [TeacherController::class, 'getTeacher']);
    Route::get('/deleteTeacher/{id}', [TeacherController::class, 'deleteTeacher']);
    //Get RestAPI

    //Users
    Route::get('/getUsers', [UsersController::class, 'getUsers']);
    Route::get('/getUser/{id}', [UsersController::class, 'getUser']);
    Route::get('/getShop/{id}', [AccountController::class, 'editShop']);
    Route::post('/getAccounts', [HomeController::class, 'getAccounts']);
    Route::post('/changePassword/{id}', [UsersController::class, 'changePassword']);
    Route::post('/changePassword', [UsersController::class, 'changePassword']);
    Route::post('/saveUser', [UsersController::class, 'insertUpdateUser']);
    Route::post('/updateShop', [AccountController::class, 'updateShop']);
    Route::post('/editUser/{id}', [UsersController::class, 'editUser']);
    Route::post('/deleteShop/{id}', [AccountController::class, 'deleteShop']);
    Route::post('/deleteUser/{id}',[UsersController::class, 'deleteUser']);
    Route::post('/search', [UsersController::class, 'search']);
    Route::get('/getShops', [AccountController::class, 'getShops']);
    Route::post('/saveShop', [AccountController::class, 'saveShop']);
});
