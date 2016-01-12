<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class pengumumanController extends Controller
{
    public static function getPengumumanHighlight($jumlah){
        $highlightPengumuman = \App\Model\Pengumuman::all()
            ->sortByDesc('tgl_pengumuman')
            ->take($jumlah)
            ->groupBy('tgl_pengumuman');
        return $highlightPengumuman;
    }
}
