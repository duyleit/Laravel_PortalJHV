<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\portal_post;

class PostController extends Controller
{
    public function index()
    {
//
//       $posts= portal_post::simplePaginate()
//                            ->where
//        return view('post.index')->with('posts',$posts);
    }
    public function detail($id)
    {
         $post=portal_post::where('id',$id)
                            ->get();
//
//       foreach($post as $p)
//       {
//           echo $p['title'];
//       }
//       die();
        return view('post.detail')->with('post',$post);
    }
}
