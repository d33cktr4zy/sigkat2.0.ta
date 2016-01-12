<?php

namespace App\Http\Controllers;

use App\Model\ForumPost;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class forumController extends Controller
{
    //
    public static function getForumHighlight($jumlah){
        $forumHighlight = ForumPost::all()
            ->sortByDesc('wkt_kirim')
            ->take($jumlah)
            ->groupBy('id_forum_topik')
        ;

        return $forumHighlight;
    }
}
