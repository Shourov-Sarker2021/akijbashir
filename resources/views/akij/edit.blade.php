@extends('akij.layout')
@section('content')
    <div>
        <h2>This Is Form Edit Page</h2>
    </div>
    <a class="btn btn-primary" href="{{route('akijs.index')}}">Back To Main Page</a>
    <div class="container">
        <form action="{{route('akijs.update',$akij->id)}}" method="POST">
            @csrf 
            @method('PUT')
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Full Name</strong>
                    <input type="text" name="full_name" class="form-control" value="{{$akij->full_name}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Email</strong>
                    <input type="text" name="email" class="form-control"  value="{{$akij->email}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Mobile</strong>
                    <input type="number" name="mobile" class="form-control"  value="{{$akij->mobile}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Address</strong>
                    <input type="text" name="address" class="form-control"  value="{{$akij->address}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>User Name</strong>
                    <input type="text" name="user_name" class="form-control"  value="{{$akij->user_name}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Password</strong>
                    <input type="number" name="password" class="form-control" value="{{$akij->password}}">
                </div>
            </div>
            <button type="submit" class="btn btn-info">Update</button>
        </form>
    </div>
@endsection