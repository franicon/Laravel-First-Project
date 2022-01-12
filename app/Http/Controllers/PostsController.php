<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    public function index(){
        
        $id =7;
        $post = DB::table('posts')->select('body')->get();
        dd($post);
    }
}