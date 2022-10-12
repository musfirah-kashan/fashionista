@extends('layouts.admin.master')

@section('content')
<div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
    <div>
        <h1>Product</h1>
        <p class="breadcrumbs"><span><a href="index-2.html">Home</a></span>
            <span><i class="mdi mdi-chevron-right"></i></span>Product
        </p>
    </div>
    <div>
        <a href="/product" class="btn btn-primary"> Add Product</a>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card card-default">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="responsive-data-table" class="table" style="width:100%">
                        <thead>
                            <tr>
                                <th>Product Name</th>
                                <th>Product Category</th>
                                <th>Product Color</th>
                                <th>Product Size</th>
                                <th>Product Price</th>
                                <th>Product Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($show as $dd)
                            <tr>
                                <td>{{$dd->product_name}}</td>
                                <td>{{$dd->Category_Name}}</td>
                                <td>{{$dd->color_name}}</td>
                                <td>{{$dd->Size_name}}</td>
                                <td>{{$dd->price}}</td>
                                <td><img src="/product_image/{{$dd->Image}}" width="150px" height="150px"/></td>
                                <td>
                                    <div class="btn-group">
                                        <a href="/edit_product/{{$dd->id}}" class="btn btn-outline-success">Edit</a>
                                        <a href="/delete_product/{{$dd->id}}" class="btn btn-outline-danger">Delete</a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection