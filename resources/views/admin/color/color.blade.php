@extends('layouts.admin.master')

@section('content')

<div class="breadcrumb-wrapper breadcrumb-wrapper-2 breadcrumb-contacts">
							<h1>Color</h1>
							<p class="breadcrumbs"><span><a href="/admindashboard">Home</a></span>
								<span><i class="mdi mdi-chevron-right"></i></span>Color</p>
					</div>
					<div class="row">
						<div class="col-xl-4 col-lg-12">
							<div class="ec-cat-list card card-default mb-24px">
								<div class="card-body">
									<div class="ec-cat-form">
										<h4>Add New Color</h4>

										<form method="post" action="{{URL::to('add_color')}}" enctype="multipart/form-data">
                                            @csrf
											<div class="form-group row">
												<label for="text" class="col-12 col-form-label">Name</label> 
												<div class="col-12">
													<input id="text" name="name" class="form-control here slug-title" type="text">
												</div>
											</div>
                                            <div class="form-group row">
												<label for="text" class="col-12 col-form-label">Color</label> 
												<div class="col-12">
													<input id="text" name="color" class="form-control here slug-title" type="text">
												</div>
											</div>
											<div class="form-group row">
												<label for="slug" class="col-12 col-form-label">Slug</label> 
												<div class="col-12">
													<input id="slug" name="slug" class="form-control here set-slug" type="text">
													<small>The “slug” is the URL-friendly version of the name. It is usually all lowercase and contains only letters, numbers, and hyphens.</small>
												</div>
											</div>

											<div class="row">
												<div class="col-12">
													<button name="submit" type="submit" class="btn btn-primary">Submit</button>
												</div>
											</div>

										</form>

									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-8 col-lg-12">
							<div class="ec-cat-list card card-default">
								<div class="card-body">
									<div class="table-responsive">
										<table id="responsive-data-table" class="table">
											<thead>
												<tr>
													<th>Name</th>
                                                    <th>Color</th>
													<th>Slug</th>
													<th>Action</th>
												</tr>
											</thead>
                                            <tbody>
                                                @foreach($fetch as $dd)
												<tr>
													<td>{{$dd->name}}</td>
                                                    <td><div style="background-color:{{$dd->color}}; width:30px; height:30px"></div></td>
													<td>
														<span class="ec-sub-cat-tag">{{$dd->slug}}</span>
														</span>
													</td>
													
													<td>
														<div class="btn-group">
															<a href="/edit_color/{{$dd->id}}" class="btn btn-outline-success">Edit</a>
                                                            <a href="/delete_color/{{$dd->id}}" class="btn btn-outline-danger">Delete</a>
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