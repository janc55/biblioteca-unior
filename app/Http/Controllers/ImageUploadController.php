<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageUploadController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('imageUpload');
    }      
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'foto_est' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
      
        $imageName = time().'.'.$request->foto_est->extension();         
        $request->foto_est->move(public_path('foto_est'), $imageName);    
        /* 
            Write Code Here for
            Store $imageName name in DATABASE from HERE 
        */      
        return back()
            ->with('success','You have successfully upload image.')
            ->with('foto_est',$imageName); 
    }
}
