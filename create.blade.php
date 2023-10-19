@extends('student.layout');
@section('content')
    <div class="container" style="text-align:center">
        <h2>This is Create Page</h2>
    </div>
        <div>
            <a class="btn btn-primary" href="{{route('students.index')}}">Back To Home Page</a>
        </div>
         
    <div class="container">
        
        <div class="row">
             <form action="{{route('students.store')}}" method="POST">
                @csrf
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-control">
                        <strong>Name</strong>
                        <input type="text" name="name" class="form-control" placeholder="Enter Your Name">
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-control">
                        <strong>Contact</strong>
                        <input type="number" name="contact" class="form-control" placeholder="Enter Your Contact">
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-control">
                        <strong>Address</strong>
                        <input type="text" name="address" class="form-control" placeholder="Enter Your Address">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary" style="text-align:center" >Submit</button>
             </form>
        </div>
    </div>
@endsection