<?php

use Carbon\Carbon;

function content(){
        $contents  = App\Content::get();
        $data      = array();
        foreach($contents as $content){
            $data[$content->key] = [
                'page'      => $content->page,
                'heading'   => $content->heading,
                'key'       => $content->key,
                'description'      => $content->description,
                'image'     => $content->image,
                'created_at'        => $content->created_at,
                'updated_at'        => $content->updated_at,

            ];
        }
        return $data;
    }
    function media(){
        $media  = App\Media::orderBy('id','ASC')->get();
        return $media;
    }
    // function news(){
    //     $news  = App\News::orderBy('created_at','DESC')->get();
    //     return $news;
    // }
    // function user()
    // {
    //     $user  =  App\Models\User::where('created_at', '>', Carbon::now()->subHours(24)->toDateTimeString())->get();
    //     return $user;
    // }
    // function contact()
    // {
    //     $contact  =  App\Models\Contact::where('seen',0)->get();
    //     return $contact;
    // }
    
    // function product()
    // {
    //     $product  =  App\Models\Product::where('created_at','DESC')->take(10)->get();
    //     $data      = array();
    //     foreach($product as $item){
    //         $data[] = [
    //             'id'                 => $item->id,
    //             'product_id'      => $item->product_id,
    //             'description'      => $item->description,
    //             'created_at'        => $item->created_at,
    //             'updated_at'        => $item->updated_at,
    //         ];
    //     }
    //     return $data;
    // }
    
    
    

?>