@extends('hotels.layout')
@section('content')
    <div class="container">
        <div class="container">
            <h2>This Is Edit Page</h2>
        </div>
        <a class="btn btn-primary" href="{{route('hotel.index')}}">Back to Home</a>
        <form action="{{route('hotel.update',$hotel->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="col-xs-12 col-sm-12 col-md-11">
                <div class="form-group">
                    <strong>Hotel Name</strong>
                    <input type="text" name="hotel_name" class="form-control" value="{{$hotel->hotel_name}}">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-11">
                <div class="form-group">
                    <strong>Location</strong>
                    <input type="text" name="location" class="form-control" value="{{$hotel->location}}">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-11">
                <div class="form-group">
                    <strong>Category</strong>
                    <input type="text" name="category" class="form-control" value="{{$hotel->category}}">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-11">
                <div class="form-group">
                    <strong>Review</strong>
                    <input type="text" name="review" class="form-control" value="{{$hotel->review}}">
                </div>
            </div>
            <div>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
@endsection