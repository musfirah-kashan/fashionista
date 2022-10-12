<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\indexmodel;
use App\Models\Category;
use App\Models\Size;
use App\Models\Color;

class indexcontroller extends Controller
{
    public function index()
    {
        $show=Category::all();
        return view('index',compact('show'));
    }
    public function about()
    {
        $show=Category::all();
        return view('aboutus',compact('show'));
    }
    public function contact()
    {
        $show=Category::all();
        return view('contactus',compact('show'));
    }
    public function faqs()
    {
        $show=Category::all();
        return view('faqs',compact('show'));
    }
    public function productadd()
    {
        $show=Category::all();
        $size = Size::all();
        $colors = Color::all();
        return view('products',compact('show','size','colors'));
    }
    public function userdashboard()
    {
    return view('home');
    }
public function orders()
{
    return view ('myorders');
}
public function ordertracking()
{
    return view ('ordertrack');
}


}
