<?php

namespace App\Http\Controllers\Api;

use App\DayData;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DayDataController extends Controller
{
    /**
     * @param Request $request
     * @return mixed
     */
    public function saveEvent(Request $request)
    {
        $room = $request->get('room_name');
        $start_hour = $request->get('start_hour');
        $end_hour = $request->get('end_hour');
        $data = date('Y-m-d');

        $dayData = DayData::where('day', $data)->first();
        if (null == $dayData) {
            $dayData = DayData::create(['day' => $data, 'rooms' => []]);
        }

        return $dayData;
    }

    public function getDayData()
    {
        return DayData::where('day', date('Y-m-d'))->first();
    }
}
