<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Size;

class SizeController extends Controller
{
    public function size()
    {
        $fetch = Size::all();
        return view('admin.size.size',compact('fetch'));
    }
    public function add_size(Request $request)
    {
        $insert = new Size;
        $name = $request->name;
        $slug=$request->slug;
        if($slug=="")
        {
            $insert->name = $name;
            $slug=str_replace(' ','-',$name);
            $insert->slug=$slug;
            $insert->save();
            return redirect()->back();
        }
        else
        {
            $insert->name = $name;
            $slug=str_replace(' ','-',$slug);
            $insert->slug=$slug;
            $insert->save();
            return redirect()->back();

        }
    }
    public function edit_size(Request $request,$id)
    {
        $edit = Size::find($id);
        $fetch = Size::all();
        return view('admin.size.edit_size',compact('edit','fetch'));
    }
    public function update_size(Request $request,$id)
    {
        $update = Size::find($id);
        $name = $request->uname;
        $slug=$request->uslug;
        if($slug=="")
        {
            $update->name = $name;
            $slug=str_replace(' ','-',$name);
            $update->slug=$slug;
            $update->update();
            return redirect()->back();
        }
        else
        {
            $update->name = $name;
            $slug=str_replace(' ','-',$slug);
            $update->slug=$slug;
            $update->update();
            return redirect()->back();
        }
    }
    public function delete_size($id)
    {
        $delete = Size::find($id);
        $delete->delete();
        return redirect()->back();
    }
    
}
