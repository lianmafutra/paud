<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    protected $table = 'pendaftaran';
    protected $guarded = [];


    protected function getCreatedAtAttribute()
    {
        return \Carbon\Carbon::parse($this->attributes["created_at"])->format("d-m-Y H:i:s");
    }

    protected function getTanggalLahirAttribute()
    {
        return \Carbon\Carbon::parse($this->attributes["tanggal_lahir"])->format("d-m-Y");
    }




}
