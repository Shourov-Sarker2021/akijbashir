@extends('hotels.layout')
@section('content')
    <div class="container">
        <div class="container">
            <h2>This Is Details Page</h2>
        </div>
        <a class="btn btn-primary" href="{{route('hotel.index')}}">Back</a>
        <form>
            @csrf
             
            <div class="col-xs-12 col-sm-12 col-md-11">
                <div class="form-group">
                    <strong>Hotel Name</strong></br>
                     {{$hotel->hotel_name}}
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-11">
                <div class="form-group">
                    <strong>Location</strong></br>
                     {{$hotel->location}}
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-11">
                <div class="form-group">
                    <strong>Category</strong></br>
                     {{$hotel->category}}
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-11">
                <div class="form-group">
                    <strong>Review</strong></br>
                     {{$hotel->review}}
                </div>
            </div>
            <div>
                <a class="btn btn-primary" href="{{route('hotel.create')}}">Create New Hotel</a>
            </div>
        </form>
    </div>
@endsection