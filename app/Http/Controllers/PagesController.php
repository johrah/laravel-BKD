<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome to LaraBlog!';
        return view('pages.index')->with('title',$title);
    }

    public function service(){
       //untuk 2 
       $data = array(
           'title'=> 'Our Service',
           'services'=> ['AAA', 'BBB','CCC']
        );
           return view('pages.service')->with($data); 
       
    }

    public function contact(){
        $title = 'Welcome to LaraBlog!';
        return view('pages.contact')->with('title',$title);
    }
    
}

