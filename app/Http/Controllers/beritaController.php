<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use \App\Model\Berita;

class beritaController extends Controller
{
    public static function getHighlightBerita($jumlah=3){
        $kumpulanBerita = Berita::all()->sortByDesc('waktu_berita')->take($jumlah);

        return $kumpulanBerita;
    }
}
