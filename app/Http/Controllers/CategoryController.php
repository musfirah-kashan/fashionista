<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function category()
    {
        try
        {
            if(Auth()->user()->admin == 0)
            {
                $fetch = Category::all();
                return view('admin.category.category',compact('fetch'));
            }
            else
            {
                return redirect('/');
            }

        }
        catch(\Exception $e)
        {
            return redirect('/');
        }
        
    }
    public function add_category(Request $request)
    {
        $insert = new Category;
        $name = $request->name;
        $slug=$request->slug;
        if($slug=="")
        {
            $insert->name=$name;
            $name=str_replace(' ','-',$name);
            $insert->slug=$name;
            $insert->feature=$request->feature;
            $image=$request->file('image');
            $extension = rand().".".$image->getClientOriginalName();
            $image->move('category_image/',$extension);
            $insert->image=$extension;
            $insert->save();
            return redirect()->back();
        }
        else
        {
            $insert->name=$name;
            $slug=str_replace(' ','-',$slug);
            $insert->slug=$slug;
            $insert->feature=$request->feature;
            $image=$request->file('image');
            $extension = rand().".".$image->getClientOriginalName();
            $image->move('category_image/',$extension);
            $insert->image=$extension;
            $insert->save();
            return redirect()->back();
        }
        
                
    }
    public function edit_category(Request $request,$id)
    {
        try
        {
            if(Auth()->user()->admin == 0)
            {
                $fetch = Category::all();
                $current_category = Category::find($id);
                return view('admin.category.edit_category',compact('fetch','current_category','current_product'));
            }
            else
            {
                return redirect('/');
            }

        }
        catch(\Exception $e)
        {
            return redirect('/');
        }
    }
    public function update_category(Request $request,$id)
    {
        $update = Category::find($id);
        $name = $request->uname;
        $slug=$request->uslug;
        $image=$request->file('uimage');
        if($slug=="")
        {
            $update->name=$name;
            $name=str_replace(' ','-',$name);
            $update->slug=$name;
            $update->feature=$request->ufeature;
            $image=$request->file('uimage');
            $extension = rand().".".$image->getClientOriginalName();
            $image->move('category_image/',$extension);
            $update->image=$extension;
            $update->update();
            return redirect()->back();
        }
        else
        {
            if($image!="")
            {
                $update->name=$name;
                $slug=str_replace(' ','-',$slug);
                $update->slug=$slug;
                $update->feature=$request->ufeature;
                $image=$request->file('uimage');
                $extension = rand().".".$image->getClientOriginalName();
                $image->move('category_image/',$extension);
                $update->image=$extension;
                $update->update();
                return redirect()->back();
            }
            else
            {
                $update->name=$name;
                $slug=str_replace(' ','-',$slug);
                $update->slug=$slug;
                $update->feature=$request->ufeature;
                $update->update();
                return redirect()->back();

            }

        }
        
    }
    public function delete_category($id)
    {
        $delete=Category::find($id);
        $delete->delete();
        return redirect()->back();
    }
    public function show()
    {
        $show = Category ::all();
        return view('index', compact('show'));
    }
}
