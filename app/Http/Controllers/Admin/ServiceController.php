<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $service = Service::orderBy('id','ASC')->paginate(10);
        return view('admin/service.index',compact('service'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/service/create');
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
                'title' => 'required|max:255',
                'image' => 'required|max:10248|mimes:jpeg,png,jpg',
                'description' => 'required|'
            ]
        );
        $service = new Service;
        if ($request->hasfile('image')) {
            $image = $request->file('image');
            $upload = 'Images/';
            $filename = time() . $image->getClientOriginalName();
            $path    = move_uploaded_file($image->getPathName(), $upload . $filename);
            $service->image = $upload . $filename;
        }
        $service->name = $request->name;
        $service->title = $request->title;
        $service->description = $request->description;
        $service->save();
        return redirect('admin/service')->with('success','Service has created!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $service = Service::find($id);
        return view('admin/service.show',compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service = Service::find($id);
        return view('admin/service.edit',compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $validation = $request->validate(
            [
                'name' => 'required|max:255',
                'title' => 'required|max:255',
                'image' => 'max:10248|mimes:jpeg,png,jpg',
                'description' => 'required|'
            ]
        );
        $service = Service::find($id);
        if ($request->hasfile('image')) {
            $image = $request->file('image');
            $upload = 'Images/';
            $filename = time() . $image->getClientOriginalName();
            $path    = move_uploaded_file($image->getPathName(), $upload . $filename);
            $service->image = $upload . $filename;
        }
        $service->name = $request->name;
        $service->title = $request->title;
        $service->description = $request->description;
        $service->update();
        return redirect('admin/service')->with('success','Service has updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $service = Service::find($request->id);
        $service->delete();
        return response(['message' => 'Service delete successfully']);
    }
}
