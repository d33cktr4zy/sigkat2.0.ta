<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    //
    protected $primaryKey = 'id_berita';
    protected $table = 'tbl_berita';
    public $timestamps = false;

    protected $fillable = [
        'waktu_berita',
        'id_pengirim',
        'jdl_berita',
        'isi_berita',
        'id_sakramen',
        'id_kategorial'
    ];

    //relations
    public function penulis() {
        return $this->hasOne('\App\Model\User', 'id', 'id_pengirim');
    }

    public function sakramen(){
        return $this->belongsTo('\App\Model\Sakramen','id_sakramen','id_sakramen');
    }

    public function kategorial(){
        return $this->belongsTo('\App\Model\Kategorial', 'id_kategorial','id_kategorial');
    }
}
