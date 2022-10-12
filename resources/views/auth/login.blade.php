@extends('layouts.auth_admin.master')

@section('content')
<div class="card-body p-5">
							<h4 class="text-dark mb-5">Sign In</h4>
							
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
								<div class="row">
									<div class="form-group col-md-12 mb-4">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
									</div>
									
									<div class="form-group col-md-12 ">
                                    <input id="password" type="password" class="form-control" name="password" required autocomplete="current-password">
									</div>
									
									<div class="col-md-12">
										<div class="d-flex my-2 justify-content-between">
											<div class="d-inline-block mr-3">
												<div class="control control-checkbox">Remember me
													<input type="checkbox" />
													<div class="control-indicator"></div>
												</div>
											</div>
											
											<p><a class="text-blue" href="{{ route('password.request') }}">Forgot Password?</a></p>
										</div>
										
										<button type="submit" class="btn btn-primary btn-block mb-4">Sign In</button>
										
										<p class="sign-upp">Don't have an account yet ?
											<a class="text-blue" href="/register">Sign Up</a>
										</p>
									</div>
								</div>
							</form>
						</div>
@endsection
