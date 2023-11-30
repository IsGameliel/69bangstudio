<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Store;

class StoreController extends Controller
{
    public function index(){
        $store = Store::all();
        return view('admin.store.index', compact('store'));
    }

    public function create(){
        return view('admin.store.create');
    }

    public function store(Request $request){
        // $request->validate([
        //     'title' => 'required',
        //     'description' => 'required',
        //     'image' => 'required|mimetypes:image/jpg,image/gif'
        // ]);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $file->move('store',$file->getClientOriginalName());
            $file_name=$file->getClientOriginalName();
        } else {
            dd('no video');
        }

        $store = new Store();

        $store->title = $request->input('title');
        $store->description = $request->input('description');
        $store->title = $request->input('title');
        $store->image = $file_name;

        $store->save();
        return redirect()->route('store');
    }
}
