<?php

Route::group(['namespace' => 'TotalPHP\MeetUp\Http\Controllers', 'middleware' => ['api']], function() {
    Route::get('total/meetup/participants', 'ParticipantController@index');
    Route::get('total/meetup/meetups', 'MeetupController@index');
});
