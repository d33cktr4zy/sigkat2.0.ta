<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\beritaController;

class homeController extends Controller
{
    //
    public function index(){
        $hiliteBerita = beritaController::getHighlightBerita(3);
        $highlightPengumuman = pengumumanController::getPengumumanHighlight(3);
        $highlightForum = forumController::getForumHighlight(3);

        return view('home', [
            'berita' => $hiliteBerita,
            'highlightPengumuman' => $highlightPengumuman,
            'forumHighlight' => $highlightForum
        ]);
    }


}
