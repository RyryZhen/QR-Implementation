<?php

use Illuminate\Support\Facades\Route;

Route::get('/evaluation/{name?}/{prelim?}/{midterm?}/{final?}', function ($name=null, $prelim=null, $midterm=null, $final=null) {

    return view('evaluation', [
        'name' => $name,
        'prelim' => $prelim,
        'midterm' => $midterm,
        'final' => $final
    ]);

});

