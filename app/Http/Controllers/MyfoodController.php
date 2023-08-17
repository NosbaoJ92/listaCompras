<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Controllers;

class MyfoodController extends Controller
{
    public function index(){
        return view('index');
    }

    public function restaurantes(){
        return view('restaurantes');
    }

    public function mcdonalds(){
        return view('mcdonalds');
    }

    public function habibs(){
        return view('habibs');
    }
    public function opastelao(){
        return view('opastelao');
    }
    public function tiosamjapa(){
        return view('tiosamjapa');
    }
}
