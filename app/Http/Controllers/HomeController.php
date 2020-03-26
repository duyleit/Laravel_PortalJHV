<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\portal_post;

class HomeController extends Controller
{
    public  function index()
    {
         $news = portal_post::where('news',1)
                          ->where ('status',1)
                         ->get();
//             "limit" => 6,
//             "conditions" => "news=1 AND status=1",
//             "order" => "modified DESC"
//         ]);
//        $news =portal_post::where('news')
//               ->orderBy('modified','desc')
//               ->take(10)
//               ->get();


        $activities =portal_post::where('post_group',0)
                               ->where('status',1)
                               ->get();
       // return view('index.index')->with('news',$news)->with('activities',$activities); C1
        return view('index.index',compact('news','activities')); //C2
    }
}
