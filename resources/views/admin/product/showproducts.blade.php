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
                                <th>Name</th>
                                <th>Slug</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($product as $dd)
                            <tr>
                                <td>{{$dd->name}}</td>
                                <td>{{$dd->slug}}</td>
                                <td>{{$dd->description}}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="/variate/{{$dd->id}}" class="btn btn-outline-warning">Variate</a>
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