<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Home');
});
// Route::get('/Home', function () {
//     return view('Home');
// });

Route::get('/Contact', function () {
    return view('Contact');
})->name('Contact');

Route::get('/About', function () {
    return view('About');
})->name('About');

Route::get('/Events', function(){
    return view('Events');
})->name('Events');

Route::get('/TeachingStaff', function(){
    return view('TeachingStaff');
})->name('TeachingStaff');

Route::get('/NonTeachingStaff', function(){
    return view('NonTeachingStaff');
})->name('NonTeachingStaff');

Route::get('/undergraduate', function(){
    return view('undergraduate');
})->name('undergraduate');

Route::get('/postgraduate', function(){
    return view('postgraduate');
})->name('postgraduate');

Route::get('/ungradcourse', function(){
    return view('ungradcourse');
})->name('ungradcourse');

Route::get('/comcourse', function(){
    return view('comcourse');
})->name('comcourse');

Route::get('/postgraduateMphil', function(){
    return view('postgraduateMphil');
})->name('postgraduateMphil');

Route::get('/postcoursePhd', function(){
    return view('postcoursePhd');
})->name('postcoursePhd');

