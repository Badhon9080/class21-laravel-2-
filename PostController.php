<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    function home(){
        return view('addPost');
    }
    function allPosts(){
        return view('allPost');
    }
    function storePost(Request $request){
       // print_r($request->all());
        //  dd($request->all());
        //dd($request->title);
        //dd($request->author);


       //validation
       $request->validate([
           'title' => 'required|min:5',
           'detail' => 'required|max:9',
       ],
       /*
        [
             'title.required' => "please enter the title",
             'title.min' => "how much bro!",
             'detail.required' => "please enter the detail",
       ]
       */
    );

    }
}
