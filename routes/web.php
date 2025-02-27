<?php

use Illuminate\Support\Facades\Route;


Route::get('/{locale}', function (string $locale) {
    if(!in_array($locale, ['en', 'es'])) {
        abort(400);
    }

    App::setLocale($locale);

    return view('landing');
});
Route::get('/', function () {
    return view('landing');
});
