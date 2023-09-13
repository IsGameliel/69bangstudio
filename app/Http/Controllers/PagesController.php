<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function freeVideos(){
        return view('freeVideos');
    }

    public function PaidVideos(){
        return view('paidVideos');
    }
}
