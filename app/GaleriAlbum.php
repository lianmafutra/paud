<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GaleriAlbum extends Model
{
    protected $table = 'galeri_album';
    protected $appends = ['jumlah_foto'];
    protected $guarded = ['id'];


    public function galeri()
    {
        return $this->hasMany(Galeri::class);
    }

    public function getJumlahFotoAttribute() {

        return count($this->relations['galeri']);

   }
}
