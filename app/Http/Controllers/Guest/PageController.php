<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view('home');
    }

    public function film(){

        //query al db

        $film = Film::all();
        dd($film);



        return view('film');
    }
}
