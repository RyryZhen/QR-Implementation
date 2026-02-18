<?php

use Illuminate\Support\Facades\Route;

Route::get('/student/{id}/{name}', function ($id, $name) {
    return view('student', [
        'id' => $id,
        'name' => $name
    ]);
});

Route::get('/course/{course}/{yearLevel?}', function ($course, $yearLevel = 'Not Specified') {
    return view('course', [
        'course' => $course,
        'yearLevel' => $yearLevel
    ]);
});

Route::get('/ojt/{company}/{city}/{allowance?}', function ($company, $city, $allowance = 'No') {
    return view('ojt', [
        'company' => $company,
        'city' => $city,
        'allowance' => $allowance
    ]);
});

Route::get('/event/{event}/{participant}/{yearLevel}', function ($event, $participant, $yearLevel) {
    return view('event', [
        'event' => $event,
        'participant' => $participant,
        'yearLevel' => $yearLevel
    ]);
});
