<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;

class imageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $image = Image::get();
        return view('showImages',compact('image'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $img = new Image();
        $img->name = $request->imageName;
        $img->type = $request->imageType;
        if ($request->file('image')){
            $image = $request->file('image');
            $filename = time().'.'.$image->getClientOriginalExtension();
            $image->storeAs('public',$filename);
            $img->image = $filename;
        }
        $img->save();
        return redirect('/show');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $getimg = Image::find($id);
        return view('editImage',compact('getimg'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $img = Image::find($id);
        $img->name = $request->imageName;
        $img->type = $request->imageType;
        if ($request->file('image')){
            $image = $request->file('image');
            $filename = time().'.'.$image->getClientOriginalExtension();
            $image->storeAs('public',$filename);
            $img->image = $filename;
        }
        $img->save();
        return redirect('/show');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $img = Image::find($id);
        $img->delete();
        return redirect('/show');
    }
}
