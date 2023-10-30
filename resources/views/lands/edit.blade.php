@extends('lands.layout')
@section('content')
    <div class="container">
        <h2>This Is Edit Page</h2>
    </div>
    <a class="btn btn-info" href="{{route('land.index')}}">Back To Home Page</a>
    <div class="container">
        <form action="{{route('land.update',$land->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Land Name</strong>
                    <input type="text" name="land_name" class="form-control" value="{{$land->land_name}}">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Address</strong>
                    <input type="text" name="address" class="form-control"  value="{{$land->address}}">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Land Owner Name</strong>
                    <input type="text" name="owner" class="form-control" value="{{$land->owner}}">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Country Name</strong>
                    <input type="text" name="country" class="form-control" value="{{$land->country}}">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection