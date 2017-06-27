<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Moloquent;

class DayData extends Moloquent
{
    protected $fillable = ['day','rooms'];
}
