<?php

namespace App\Http\Controllers;

use App\Faq;
use App\FaqCategory;
use App\Models\Service;
use App\News;
use App\Brand;
use App\Newsletter;
use App\Review;
use App\Sector;
use App\Support;
use App\WritingPoint;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       
        return view('home');
    }
    public function home()
    {
        $service = Service::all();
        $review = Review::orderBy('created_at','DESC')->where('permission',0)->get();
        return view('welcome',compact('service','review'));
       
    }
    public function newsletter(Request $request)
    {
        $validation = $request->validate(
            [
                'email' => 'required|max:255|unique:newsletters,email'
            ]
        );
       $newsletter = new Newsletter;
       $newsletter->email = $request->email;
       $newsletter->save();
        return back()->with('success1','Thanks for subscribe!');
    }
    // public function Cv_Builder(){
    //     return view('cv_builder');
    // }
    // public function FaqSearch(Request $request){
    //     $service = Service::orderBy('created_at','ASC')->get();
    // 	$writing_point = WritingPoint::orderBy('created_at','ASC')->get();
    // 	$review = Review::orderBy('created_at','ASC')->get();
    // 	$faq_category = FaqCategory::orderBy('created_at','ASC')->get();
    // 	$faq = Faq::where('heading', 'LIKE', '%'.$request->search.'%')->orWhere('description', 'LIKE', '%'.$request->search.'%')->get();
    // 	$news = News::orderBy('created_at','DESC')->get();
    //     return view('welcome',compact('service','writing_point','review','faq_category','faq','news'));
    // }
    public function redirect()
    {
        if (auth()->user()->is_admin) {
        
            return redirect()->route('admin.home')->with('status', session('status'));
        }
      
        return redirect('home')->with('status', session('status'));
    }
}
