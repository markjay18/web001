<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('component.index');
});
