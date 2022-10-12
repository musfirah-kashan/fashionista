<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\Size;
use App\Models\Color;
use App\Models\variations;
use DB;

class VariationController extends Controller
{
    public function variations($id)
    {
        $product = product::find($id);
        $color = Color::all();
        $size = Size::all();
        return view('admin.variate.add_variation',compact('product','color','size'));
    }
    public function add_vartiations(Request $request)
    {
        $insert = new variations;
        $insert->product_id =$request->product;
        $insert->color_id = $request->color;
        $insert->size_id = $request->size;
        $insert->price = $request->price;
        $image=$request->file('image');
        $extension = rand().".".$image->getClientOriginalName();
        $image->move('Product_Image/',$extension);
        $insert->image=$extension;
        $insert->save();
        return redirect()->back();
    }
    public function variant_list()
    {
        $show = DB::select('SELECT variations.id as id ,products.name as product_name,categories.name as Category_Name, colors.name as color_name, sizes.name as Size_name,variations.price as price ,variations.image as Image FROM variations JOIN products ON product_id = products.id JOIN sizes ON size_id = sizes.id JOIN colors ON color_id = colors.id JOIN categories ON products.category_id = categories.id');
        return view('admin.variate.variate_products',compact('show'));
    }
}