<?php

namespace biosfera\Http\Controllers;

use Illuminate\Http\Request;

class viewsCtrl extends Controller
{
    //
    public function index (){
    	return view('index');
    }

    public function servicios (){
    	return view('servicios');
    }

    public function contacto (){
    	return view('contacto');
    }
}
