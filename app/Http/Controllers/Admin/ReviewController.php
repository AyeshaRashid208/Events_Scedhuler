<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $review = Review::orderBy('id','ASC')->paginate(10);
        return view('admin/review.index',compact('review'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/review/create');
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
                'profession' => 'required|max:255',
                'description' => 'required'
            ]
        );
        $review = new Review;
        $review->name = $request->name;
        $review->profession = $request->profession;
        $review->description = $request->description;
        $review->permission = 0;
        $review->save();
        return redirect('admin/review')->with('success','Review has created!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $review = Review::find($id);
        return view('admin/review.show',compact('review'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $review = Review::find($id);
        return view('admin/review.edit',compact('review'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\review  $review
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $validation = $request->validate(
            [
                'name' => 'required|max:255',
                'profession' => 'required|max:255',
                'description' => 'required',
                'permission' => 'required'
            ]
        );
        $review = Review::find($id);
        $review->name = $request->name;
        $review->profession = $request->profession;
        $review->description = $request->description;
        $review->permission = $request->permission;
        $review->update();
        return redirect('admin/review')->with('success','Review has updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $review = Review::find($request->id);
        $review->delete();
        return response(['message' => 'Review delete successfully']);
    }
}
