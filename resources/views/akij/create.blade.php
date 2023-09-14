@extends('akij.layout')
@section('content')
    <div>
        <h2>This Is Form Create Page</h2>
    </div>
    <a class="btn btn-primary" href="{{route('akijs.index')}}">Back To Main Page</a>
    <div class="container">
        @if($errors->any())
            <div class="alert alert-danger">
            <strong>Whops@</strong>there are some problem.
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            
            @endforeach
            </div>
        @endif
        <form action="{{route('akijs.store')}}" method="POST">
            @csrf
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Full Name</strong>
                    <input type="text" name="full_name" class="form-control" placeholder="Enter Your Full Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Email</strong>
                    <input type="text" name="email" class="form-control" placeholder="Enter Your Email">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Mobile</strong>
                    <input type="number" name="mobile" class="form-control" placeholder="Enter Your Mobile">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Address</strong>
                    <input type="text" name="address" class="form-control" placeholder="Enter Your Address">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>User Name</strong>
                    <input type="text" name="user_name" class="form-control" placeholder="Enter Your User Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Password</strong>
                    <input type="number" name="password" class="form-control" placeholder="Enter Your Password">
                </div>
            </div>
            <button type="submit" class="btn btn-info">Submit</button>
        </form>
    </div>
@endsection