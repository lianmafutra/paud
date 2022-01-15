<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    protected $table = 'berita';

    protected $fillable = ['judul','isi','poster'];

    protected function getCreatedAtAttribute()
    {
        return \Carbon\Carbon::parse($this->attributes["created_at"])->format("d-m-Y H:i");
    }

    protected function getWaktuAttribute()
    {
        return \Carbon\Carbon::parse($this->attributes["created_at"])->format("d-m-Y H:i");
    }


}
