<?php

use Illuminate\Support\Facades\Route;
use Faker\Factory as Faker;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('landing');
});

Route::get('/login', function () {
    if (session('user')) {
        return redirect('home');
    }

    return view('auth.login');
});
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/logout', [LoginController::class, 'logout']);

Route::get('/register', function () {
    if (session('user')) {
        return redirect('home');
    }

    return view('auth.register');
});

Route::get('/home', function () {
    if (!session('user')) {
        return redirect('login');
    }


    $contacts = [];
    $faker = Faker::create();
    for ($i = 1; $i <= 10; $i++) {
        $contacts[] = [
            'name' => $faker->name,
            'email' => $faker->unique()->safeEmail,
            'phone' => $faker->phoneNumber
        ];
    };

    return view('home', ['contacts' => $contacts]);
});