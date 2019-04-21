<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

$posts = DB::table('post')
                                                ->select('post.*')
                                                ->where('post.user_id', '=', auth()->id())
                                                ->get();
   



        return view('profile',compact('posts'));
    }
}
