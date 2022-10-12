@extends('layouts.admin.master')

@section('content')

<div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
    <div>
        <h1>Add Product</h1>
        <p class="breadcrumbs"><span><a href="index-2.html">Home</a></span>
            <span><i class="mdi mdi-chevron-right"></i></span>Product
        </p>
    </div>
    <div>
        <a href="/showproducts" class="btn btn-primary"> View All
        </a>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card card-default">
            <div class="card-header card-header-border-bottom">
                <h2>Add Product</h2>
            </div>
            <form method="post" class="row g-3" action="{{URL::to('add_variate')}}" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="row ec-vendor-uploads">
                        <div class="col-lg-12">
                            <div class="ec-vendor-upload-detail">

                                <div class="col-md-6">
                                    <label for="inputEmail4" class="form-label">Product name</label>
                                    <input type="hidden" name="product" value="{{$product->id}}" />
                                    <input name="" type="text" class="form-control slug-title" id="" value="{{$product->name}}" disabled>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Select Color</label>
                                    <select name="color" id="Color" class="form-select" required>
                                        @foreach($color as $dd)
                                        <option value="{{$dd->id}}">{{$dd->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Select Size</label>
                                    <select name="size" id="Size" class="form-select" required>
                                        @foreach($size as $dd)
                                        <option value="{{$dd->id}}">{{$dd->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <label for="slug" class="col-12 col-form-label">Price</label>
                                    <div class="col-12">
                                        <input id="price" name="price" class="form-control here set-slug" type="number">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label">Image</label>
                                    <input type="file" name="image" class="form-control" />
                                </div>
                                <br>
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
            </form>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>

@endsection