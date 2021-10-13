<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $table = 'sliders';


    protected $guarded = [];
    protected function getCreatedAtAttribute()
    {
        return \Carbon\Carbon::parse($this->attributes["created_at"])->format("d-m-Y H:i:s");
    }
}
