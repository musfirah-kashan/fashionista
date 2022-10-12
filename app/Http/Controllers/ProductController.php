<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Color;
use App\Models\product;
use App\Models\Size;


class ProductController extends Controller
{
    public function product()
    {
        $category = Category::all();
        $color = Color::all();
        return view('admin.product.product',compact('category','color'));
    }
    public function addproduct(Request $req)
    {
        $insert=new product();
        $insert->name=$req->p_name;
        $insert->slug=$req->slug;
        $insert->category_id=$req->categories;
        $insert->description=$req->description;
        $insert->save();
        return redirect()->back();
    }
      public function showproducts()
      {
        $product=product::all();
        return view('admin.product.showproducts',compact('product'));
      }
      public function delete_product($id)
      {
          $delete=product::find($id);
          $delete->delete();
          return redirect()->back();
      }

      public function edit_product($id)
    {
        $category=Category::all();
        $color=Color::all();
      $product= product::find($id);
      $current_product=product::find($id);
      return view('admin.product.editproducts',compact('product','category','color','current_product'));
    }

      public function update_product(Request $request,$id)
    {
       $update->name= $request->p_name;
       $update->categoryid= $request->categories;
       $update->slug= $request->slug;
       $update->description= $request->description;
       $update->colorid= $request->color;       
       $update->size= $request->size1;
       $update->price= $request->price;
       $update->quantity= $request->quantity;
       $update->detail= $request->detail;
       $update->producttags= $request->group_tag;
       $update->update();
       return view('/showproducts');

    }
     

}
