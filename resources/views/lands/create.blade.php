@extends('lands.layout')
@section('content')
    <div class="container">
        <h2>This Is Create Page</h2>
    </div>
    <div class="container">
        <form action="{{route('land.store')}}" method="POST">
            @csrf
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Land Name</strong>
                    <input type="text" name="land_name" class="form-control" placeholder="Enter Land Name">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Address</strong>
                    <input type="text" name="address" class="form-control" placeholder="Enter Land Address">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Land Owner Name</strong>
                    <input type="text" name="owner" class="form-control" placeholder="Enter Land Owner Name">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Country Name</strong>
                    <input type="text" name="country" class="form-control" placeholder="Enter Country Name">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection