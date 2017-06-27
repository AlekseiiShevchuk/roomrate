<?php

Route::get('/', function () {
//    \App\DayData::create([
//        'day' => date('Y-m-d'),
//        'rooms' => [
//            [
//                'name' => 'room_1',
//                'events' => [['start_hour' => 1, 'end_hour' => 12], ['start_hour' => 11, 'end_hour' => 14]]
//            ],
//            [
//                'name' => 'room_2',
//                'events' => [['start_hour' => 0, 'end_hour' => 1], ['start_hour' => 1, 'end_hour' => 4]]
//            ],
//        ]
//    ]);
    return view('welcome');
});
