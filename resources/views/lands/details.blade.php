@extends('lands.layout')
@section('content')
    <div class="container">
        <h2>This Is Details Page</h2>
    </div>
    <a class="btn btn-info" href="{{route('land.index')}}">Back To Home Page</a>
    <div class="container">
        <form>
             
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Land Name</strong></br>
                     {{$land->land_name}}
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Address</strong></br>
                     {{$land->address}}
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Land Owner Name</strong></br>
                     {{$land->owner}}
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Country Name</strong></br>
                     {{$land->country}}
                </div>
            </div>
            <a class="btn btn-primary" href="{{route('land.create')}}">Create New Land</a>
        </form>
    </div>
@endsection