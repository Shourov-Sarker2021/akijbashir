@extends('resturents.layout')
@section('content')
    <div class="container">
        <h1>This Is Details Page</h1>
    </div>
    <div class="container">
        <a href="{{route('resturent.index')}}" class="btn btn-primary">Back To Home Page</a>
    </div>
    <div class="container">
        <form >
            @csrf
             
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name</strong><br>
                     {{$resturent->name}}
                </div>
            </div>

        

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Location</strong><br>
                     {{$resturent->location}}
                </div>
            </div>


            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Menu</strong><br>
                    {{$resturent->menu}}
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Owner</strong><br>
                     {{$resturent->owner}}
                </div>
            </div>
            <a class="btn btn-primary" href="{{route('resturent.create')}}">Add New Resturent</button>
        </form>
    </div>
@endsection