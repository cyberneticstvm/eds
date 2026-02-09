<?php

use App\Models\Country;
use App\Models\PropertyCategory;
use App\Models\Setting;
use Illuminate\Support\Facades\Cookie;

function uniqueId($model, $column)
{
    do {
        $code = random_int(100000, 999999);
    } while ($model::where($column, $code)->first());
    return $code;
}
