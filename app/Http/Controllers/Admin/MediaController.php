<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Media;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $media = Media::orderBy('created_at','DESC')->paginate(10);
        return view('admin/media.index',compact('media'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/media.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validation = $request->validate(
            [
                'name' => 'required|max:255',
                'icon' => 'required|max:255',
                'link' => 'required'
            ]
        );
        $media = new Media;
        $media->name = $request->name;
        $media->icon = $request->icon;
        $media->link = $request->link;
        $media->save();
        return redirect('admin/media')->with('success','Social Media has created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Media  $media
     * @return \Illuminate\Http\Response
     */
    public function show(Media $media)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Media  $media
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $media = Media::find($id);
        return view('admin/media.edit',compact('media'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Media  $media
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validation = $request->validate(
            [
                'name' => 'required|max:255',
                'icon' => 'required|max:255',
                'link' => 'required'
            ]
        );
        $media = Media::find($id);
        $media->name = $request->name;
        $media->icon = $request->icon;
        $media->link = $request->link;
        $media->update();
        return redirect('admin/media')->with('success','Social Media has updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Media  $media
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $media = Media::find($request->id);
        $media->delete();
        return response(['message' => 'Media delete successfully']);
    }
}
