<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Confession;
use Illuminate\Support\Facades\Validator;


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

    public function meetMe(){
        return view('meetme');
    }

    public function store(){
        return  view('store');
    }

    public function others(){
        return view('others');
    }

    public function commingSoon(){
        return view('comming_soon');
    }

    public function confessions(){
        return view('confessions');
    }

    public function confess(){
        return view('confess');
    }

    public function sendConfession(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'body' => 'required|min:5|max:10000',
            'tags' => 'required',
            'categories' => 'required',
        ]);


        $confess = new Confession;

        $confess->body = $request->input('body');
        $confess->tags = $request->input('tags');
        $confess->categories = $request->input('categories');

        $confess->save();
        return redirect('confession');
    }

    public function policy(){
        return view('policy');
    }
}
