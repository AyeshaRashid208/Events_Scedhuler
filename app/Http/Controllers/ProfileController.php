<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ProfileController extends Controller
{
    public function index()
    {
        return view('client.profile');
    }

    public function update(Request $request, $id)
    {
        $validation = $request->validate(
            [
                'name' => 'required|max:255',
                'address' => 'required|max:255'
            ]
        );
        //dd('asdsad');
        $user = User::find($id);
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $upload = 'Images';
            $filename = time() . $file->getClientOriginalName();
            $path    = move_uploaded_file($file->getPathName(), $upload . $filename);
            $user->image =  $upload . $filename;
        }
        $user->name = $request->name;
        // $user->website = $request->website;
        // $user->profession = $request->profession;
        $user->address = $request->address;
        // $user->city = $request->city;
        // $user->country_id = $request->country;
        // $user->postcode = $request->postcode;
        // $user->bio = $request->bio;
        // 
        // $user->level = $request->level;
        // $user->active_flag = $request->active_flag;
        // $user->id_ERP_customer_1 = $request->id_ERP_customer_1;
        // $user->id_ERP_customer_2 = $request->id_ERP_customer_2;
        // $user->id_ERP_customer_3 = $request->id_ERP_customer_3;
        // $user->RFC = $request->RFC;
        // $user->business_name = $request->business_name;
        // $user->user_ip = $request->user_ip;
        $user->update();
        return back()->with('success', 'Profile has updated!');
    }
}
