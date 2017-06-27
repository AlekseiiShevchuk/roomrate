<?php

use Illuminate\Http\Request;

Route::get('/day', 'Api\DayDataController@getDayData');

Route::post('/day', 'Api\DayDataController@saveEvent');
