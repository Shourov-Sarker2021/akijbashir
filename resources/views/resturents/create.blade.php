@extends('resturents.layout')
@section('content')
    <div class="container">
        <h1>This Is Create Page</h1>
    </div>
    <div class="container">
        <form action="{{route('resturent.store')}}" method="POST">
            @csrf
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name</strong>
                    <input type="text" name="name" class="form-control" placeholder="Input Resturent Name">
                </div>
            </div>

        

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Location</strong>
                    <input type="text" name="location" class="form-control" placeholder="Input Resturent Location">
                </div>
            </div>


            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Menu</strong>
                    <input type="text" name="menu" class="form-control" placeholder="Input Resturent Menu">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Owner</strong>
                    <input type="text" name="owner" class="form-control" placeholder="Input Resturent Owner Name">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection