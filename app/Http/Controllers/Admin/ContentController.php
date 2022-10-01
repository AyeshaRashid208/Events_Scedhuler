<?php

namespace App\Http\Controllers\Admin;

use App\Content;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Gate;

class ContentController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        abort_if(Gate::denies('content_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $content = Content::orderBy('created_at','DESC')->paginate(10);
        return view('admin/content.index',compact('content'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        abort_if(Gate::denies('content_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        return view('admin/content.create');
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
                'key' => 'required|unique:contents,key'
            ]
        );
        $content = new Content;
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $upload = 'Images';
            $filename = time() . $file->getClientOriginalName();
            $path    = move_uploaded_file($file->getPathName(), $upload . $filename);
            $content->image =  $upload . $filename;
        }
        $content->page = $request->page;
        $content->heading = $request->heading;
        $content->key = $request->key;
        $content->description = $request->description;
        $content->save();
        return redirect('admin/content')->with('success','Content has created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\content  $content
     * @return \Illuminate\Http\Response
     */
    public function show(content $content)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\content  $content
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        abort_if(Gate::denies('content_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $content = Content::find($id);
        return view('admin/content.edit',compact('content'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $content = Content::find($id);
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $upload = 'Images';
            $filename = time() . $file->getClientOriginalName();
            $path    = move_uploaded_file($file->getPathName(), $upload . $filename);
            $content->image =  $upload . $filename;
        } 
        $content->page = $request->page;
        $content->heading = $request->heading;
        $content->description = $request->description;
        $content->update();
        return redirect('admin/content')->with('success','Content has updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
    }
}
