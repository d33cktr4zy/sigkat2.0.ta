<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Keluarga extends Model
{
    //
    protected $primaryKey = 'id_keluarga';
    protected $table = 'tbl_keluarga';
    public $timestamps = false;

    protected $fillable = [
        'id_keluarga',
        'id_kk',
        'id_lingkungan',
    ];

    //relationships
    public function umat(){
        return $this->hasMany('\App\Model\Umat', 'id_keluarga', 'id_keluarga');
    }

    public function kepalaKeluarga(){
        return $this->belongsTo('\App\Model\Umat', 'id_kk');
    }

    public function lingkungan(){
        return $this->belongsTo('\App\Model\Lingkungan','id_lingkungan', 'id_lingkungan');
    }
}
