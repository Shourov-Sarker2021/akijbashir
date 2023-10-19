@extends('resturents.layout')
@section('content')
    <div class="container">
        <h1>This Is Edit Page</h1>
    </div>
    <div class="container">
        <form action="{{route('resturent.update',$resturent->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name</strong>
                    <input type="text" name="name" class="form-control" value="{{$resturent->name}}">
                </div>
            </div>

        

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Location</strong>
                    <input type="text" name="location" class="form-control"  value="{{$resturent->location}}">
                </div>
            </div>


            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Menu</strong>
                    <input type="text" name="menu" class="form-control"  value="{{$resturent->menu}}">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Owner</strong>
                    <input type="text" name="owner" class="form-control"  value="{{$resturent->owner}}">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection