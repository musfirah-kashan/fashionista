<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Color;

class ColorController extends Controller
{
    public function color()
    {
        $fetch = Color::all();
        return view('admin.color.color',compact('fetch'));
    }
    public function add_color(Request $request)
    {
        $insert = new Color;
        $name = $request->name;
        $slug=$request->slug;
        $color = $request->color;
        if($slug=="")
        {
            $insert->name = $name;
            $slug=str_replace(' ','-',$name);
            $insert->slug=$slug;
            $insert->color=$color;
            $insert->save();
            return redirect()->back();
        }
        else
        {
            $insert->name = $name;
            $slug=str_replace(' ','-',$slug);
            $insert->slug=$slug;
            $insert->color=$color;
            $insert->save();
            return redirect()->back();

        }
    }
    public function edit_color(Request $request,$id)
    {
        $edit = Color::find($id);
        $fetch = Color::all();
        return view('admin.color.edit_color',compact('edit','fetch'));
    }
    public function update_color(Request $request,$id)
    {
        $update = Color::find($id);
        $name = $request->uname;
        $slug=$request->uslug;
        $color=$request->ucolor;
        if($slug=="")
        {
            $update->name = $name;
            $slug=str_replace(' ','-',$name);
            $update->slug=$slug;
            $insert->color=$color;
            $update->update();
            return redirect()->back();
        }
        else
        {
            $update->name = $name;
            $slug=str_replace(' ','-',$slug);
            $update->slug=$slug;
            $update->color=$color;
            $update->update();
            return redirect()->back();
        }
    }
    public function delete_color($id)
    {
        $delete = Color::find($id);
        $delete->delete();
        return redirect()->back();
    }
}
