<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function profile()
    {
        return view('profile');
    }
    public function update_profile(Request $request,$id)
    {
        $update = User::find($id);
        $name = $request->name;
        $contact = $request->contact;
        $email = $request->email;
        $pass = $request->password;
        $conf_pass = $request->confirm_password;
        $image=$request->file('image');
        if($pass == "")
        {
            if($image != "")
            {
                $update->name = $name;
                $update->contact = $contact;
                $update->email = $email;
                $extension = rand().".".$image->getClientOriginalName();
                $image->move('profile_image/',$extension);
                $update->image=$extension;
                $update->update();
                return redirect()->back();
            }
            else
            {
                $update->name = $name;
                $update->contact = $contact;
                $update->email = $email;
                $update->update();
                return redirect()->back();
            }
        }
        else
        {
            if($image != "")
            {
                if($pass == $conf_pass)
                {
                    $update->name = $name;
                    $update->contact = $contact;
                    $update->email = $email;
                    $enc = Hash::make($pass);
                    $update->password=$enc;
                    $extension = rand().".".$image->getClientOriginalName();
                    $image->move('profile_image/',$extension);
                    $update->image=$extension;    
                    $update->update();
                    return redirect()->back();
                }
                else
                {
                    return redirect()->back()->with('error',"Password not match");
                }
            }
            else
            {
                if($pass == $conf_pass)
                {
                $update->name = $name;
                $update->contact = $contact;
                $update->email = $email;
                $enc = Hash::make($pass);
                $update->password=$enc;
                $update->update();
                return redirect()->back();
                }
                else
                {
                    return redirect()->back()->with('error',"Password not match");
                }
            }
        }
    }
    public function userprofile()
    {
        return view('userprofile');
    }
}
