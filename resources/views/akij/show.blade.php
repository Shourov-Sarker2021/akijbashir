@extends('akij.layout')
@section('content')
    <div class="container">
        <h2>This Is Form Details Page</h2>
    </div>
    <a class="btn btn-primary" href="{{route('akijs.index')}}">Back To Main Page</a>
    <div class="container">
        <div class="table table-bordered">
            @csrf 
             
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Full Name</strong></br>
                        {{$akij->full_name}}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Email</strong></br>
                    <input type="text" name="email" class="form-control"  value="{{$akij->email}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Mobile</strong></br>
                    {{$akij->mobile}}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Address</strong></br>
                    {{$akij->address}}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>User Name</strong></br>
                    {{$akij->user_name}}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Password</strong></br>
                    {{$akij->password}}
                </div>
            </div>
            <a class="btn btn-info" href="{{route('akijs.create')}}">Add New Person</a>
        </div>
    </div>
@endsection