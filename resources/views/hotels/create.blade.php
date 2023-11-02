@extends('hotels.layout')
@section('content')
    <div class="container">
        <div class="container">
            <h2>This Is Create Page</h2>
        </div>
        <form action="{{route('hotel.store')}}" method="POST">
            @csrf
            <div class="col-xs-12 col-sm-12 col-md-11">
                <div class="form-group">
                    <strong>Hotel Name</strong>
                    <input type="text" name="hotel_name" class="form-control" placeholder="Enter Hotel Name">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-11">
                <div class="form-group">
                    <strong>Location</strong>
                    <input type="text" name="location" class="form-control" placeholder="Enter Hotel Location">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-11">
                <div class="form-group">
                    <strong>Category</strong>
                    <input type="text" name="category" class="form-control" placeholder="Enter Hotel Category">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-11">
                <div class="form-group">
                    <strong>Review</strong>
                    <input type="text" name="review" class="form-control" placeholder="Enter Hotel Review">
                </div>
            </div>
            <div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection