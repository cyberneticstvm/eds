<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StudentFeedback extends Model
{
    use SoftDeletes;

    protected $casts = ["feedback_date" => "datetime"];

    protected $guarded = [];
}
