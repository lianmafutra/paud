<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TahunAjaran extends Model
{
    protected $table = 'tahun_ajaran';
    protected $guarded = [];
  

    public function pendaftaran()
    {
        return $this->hasMany(Pendaftaran::class);
    }

    protected function getJadwalPengumumanAttribute()
    {
        return \Carbon\Carbon::parse($this->attributes["jadwal_pengumuman"])->format("d-m-Y");
    }

  

}
