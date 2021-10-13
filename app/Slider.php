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

    public function getPoster(){

        if($this->poster){
            return asset('/uploads/'.$this->poster);
        }

        return 'https://via.placeholder.com/150x200.png?text=No+Cover';

    }
}
