<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'TotalPHP\MeetUp\Http\Controllers', 'middleware' => ['api']], function() {
    Route::get('total/meetup/participants', 'ParticipantController@index');
    Route::post('total/meetup/participants', 'ParticipantController@store');
    Route::get('total/meetup/meetups', 'MeetupController@index');
});
