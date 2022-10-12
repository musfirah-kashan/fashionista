<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SizeController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\indexController;
use App\Http\Controllers\VariationController;
use App\Models\Category;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/index',[indexcontroller::class,'index']);
Route::get('/about',[indexcontroller::class,'about']);
Route::get('/contact',[indexcontroller::class,'contact']);
Route::get('/faqs',[indexcontroller::class,'faqs']);
Route::get('/productadd',[indexcontroller::class,'productadd']);

                      //user dashboard
Route::get('/userdashboard',[indexcontroller::class,'userdashboard']);
Route::get('/myorders',[indexcontroller::class,'orders']);
Route::get ('/ordertrack',[indexcontroller::class,'ordertracking']);


Auth::routes();

Route::get('/dashboard', [HomeController::class, 'index'])->name('user.home')->middleware('user');
Route::get('/admindashboard',[HomeController::class,'adminHome'])->name('admin.home')->middleware('admin');

Route::get('/profile',[ProfileController::class,'profile'])->name('profile');
Route::post('/update_profile/{id}',[ProfileController::class,'update_profile']);
Route::get('/userprofile',[ProfileController::class,'userprofile'])->name('userprofile');

 

                    // Category
Route::get('/category',[CategoryController::class,'category']);
Route::post('/add_category',[CategoryController::class,'add_category']);
Route::get('/edit_category/{id}',[CategoryController::class,'edit_category']);
Route::post('/update_category/{id}',[CategoryController::class,'update_category']);
Route::get('/delete_category/{id}',[CategoryController::class,'delete_category']);
Route::get('/',[CategoryController::class,'show']);

                    // Product
Route::get('/product',[ProductController::class,'product']);
Route::post('/addproduct',[ProductController::class,'addproduct']);
Route::get('/showproducts',[ProductController::class,'showproducts']);
Route::get('/delete_product/{id}',[ProductController::class,'delete_product']);
Route::get('/edit_product/{id}',[ProductController::class,'edit_product']);
Route::get('/update_product/{id}',[ProductController::class,'update_product']);




                    // Size
Route::get('/size',[SizeController::class,'size']);
Route::post('/add_size',[SizeController::class,'add_size']);
Route::get('/edit_size/{id}',[SizeController::class,'edit_size']);
Route::post('/update_size/{id}',[SizeController::class,'update_size']);
Route::get('/delete_size/{id}',[SizeController::class,'delete_size']);

                    // Color
Route::get('/color',[ColorController::class,'color']);
Route::post('/add_color',[ColorController::class,'add_color']);
Route::get('/edit_color/{id}',[ColorController::class,'edit_color']);
Route::post('/update_color/{id}',[ColorController::class,'update_color']);
Route::get('/delete_color/{id}',[ColorController::class,'delete_color']);

                   //variations
Route::get('/variate/{id}',[VariationController::class,'variations']); 
Route::post('/add_variate',[VariationController::class,'add_vartiations']);
Route::get('/variant_product',[VariationController::class,'variant_list']);
