<?php

Route::get('/', 'BlogController@home')->name('home');

Route::get('/school-info/{id}', 'BlogController@schoolInfo')->name('school.info');

Route::get('/export_pdf/{id}', 'BlogController@export_pdf')->name('export.pdf');

Route::get('/schools', 'PagesController@schools')->name('schools');

Route::get('/categories', 'PagesController@categories')->name('categories');

Route::post('/submit', ['as'=>'email.subscribe', 'uses'=>'EmailNotifyController@subscribe']);

Route::match(
    ['GET', 'POST'],
    LaravelLocalization::transRoute('routes.contact'),
    'PagesController@contact'
)->name('contact');

Route::get(
    LaravelLocalization::transRoute('routes.contact-sent'),
    'PagesController@contactSent'
)->name('contact-sent');

if (config('blog.enabled')) {
    Route::get('curriculars', 'BlogController@index')->name('blog.index');
    Route::get('curriculars/{post}', 'BlogController@show')->name('blog.show');
    Route::get('schools/{tag}', 'BlogController@tag')->name('blog.school');
    Route::get('categories/{tag}', 'BlogController@tag')->name('blog.tag');

    Route::get(
        LaravelLocalization::transRoute('routes.redactors'),
        'BlogController@owner'
    )->name('blog.owner');
}
