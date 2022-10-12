@extends('layouts.auth_admin.master')

@section('content')


<div class="card-body p-5">
    <h4 style="color: #0000;" class="text-dark mb-5">Sign Up</h4>
        <form method="POST" action="{{ route('register') }}">
            @csrf
          <div class="row">
            <div class="form-group col-md-12 mb-4">
                <input type="text" class="form-control  @error('name') is-invalid @enderror" id="name" placeholder="Name" name="name" >
            </div>

            <div class="form-group col-md-12 mb-4">
                <input type="email" class="form-control" id="email" placeholder="Email" name="email">
            </div>

                <div class="form-group col-md-12 ">
                  <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                </div>

                <div class="form-group col-md-12 ">
                  <input type="password" class="form-control" id="cpassword" placeholder="Confirm Password" name="password_confirmation">
                </div>

                <div class="col-md-12">
                  <div class="d-inline-block mr-3">
                    <div class="control control-checkbox">
                      <input type="checkbox" />
                      <div class="control-indicator"></div>
                      I Agree the terms and conditions
                    </div>
                  </div>

                  <button style="background-color: #000; color: #fff;" type="submit" class="btn btn-dark btn-block mb-4">Sign Up</button>

                  <p class="sign-upp">Already have an account?
                    <a class="text-blue" href="/login">Sign in</a>
                  </p>
                </div>
              </div>
            </form>
          </div>
@endsection
