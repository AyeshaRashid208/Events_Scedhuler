<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Newsletter;
use Illuminate\Http\Request;
use Mail;

class NewsletterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $newsletter = Newsletter::paginate(10);
        return view('admin/newsletter.index', compact('newsletter'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
                'description' => 'required'
            ]
        );
        $newsletter = Newsletter::all();
        if ($newsletter->count() > 0) {
            foreach ($newsletter as $item) {
                $details = [
                    'body' => $request->description
                ];

                \Mail::to($item->email)->send(new \App\Mail\NewsletterMail($details));
            }
            return redirect('admin/newsletter')->with('success', 'Promo Mails Sent!');
        } else {
            return redirect('admin/newsletter')->with('success', 'Email No found!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Newsletter  $newsletter
     * @return \Illuminate\Http\Response
     */
    public function show(Newsletter $newsletter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Newsletter  $newsletter
     * @return \Illuminate\Http\Response
     */
    public function edit(Newsletter $newsletter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Newsletter  $newsletter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\newsletter  $newsletter
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $newsletter = Newsletter::find($request->id);
        $newsletter->delete();
        return response(['message' => 'Newsletter delete successfully']);
    }
}
