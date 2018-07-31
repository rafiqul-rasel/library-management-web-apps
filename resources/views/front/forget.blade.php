@extends('front.layout.loginsystem')
@section('login')
            <form>
                <div class="form-group">
                    <input class="form-control" id="exampleInputEmail1" type="email" aria-describedby="emailHelp" placeholder="Enter email address">
                </div>
                <a class="btn btn-primary btn-block" href="login.html">Reset Password</a>
            </form>

            <div class="text-center">

                <a class="d-block small" href="{{route('adminpanel')}}">Login Panel</a>
            </div>
    @endsection

    @section('status')
    <div class="card-header">Forgot Password</div>

    @endsection
