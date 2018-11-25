<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class NewsController extends Controller
{
    public function Viewpost($id)
    {
    	$post=DB::table('newss')->where('id',$id)->first();

    	return view('single_post', compact('post'));
    }
}
