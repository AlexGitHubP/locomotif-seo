<?php


Route::middleware(['seo'])->group(function () {
    Route::get('/contact', function () {
        return 'Hello from the contact form package';
    });
});

Route::middleware(['seo'])->group(function () {
    Route::get('/dapaicum', function () {
        return 'Shit works dapaicum sa nu';
    });
});

?>