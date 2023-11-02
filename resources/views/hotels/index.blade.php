@extends('hotels.layout')
@section('content')
    <div class="container">
        <h2>This is Index Page</h2>
    </div>
    <a class="btn btn-primary" href="{{route('hotel.create')}}">Create New Hotel</a>
    <div class="container">
        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Hotel Name</th>
                <th>Hotel Location</th>
                <th>Hotel Category</th>
                <th>Hotel Review</th>
                <th width="280 px">Action</th>
            </tr>
            @foreach($hotels as $hotel)
            <tr>
                <td>{{++$i}}</td>
                <td>{{$hotel->hotel_name}}</td>
                <td>{{$hotel->location}}</td>
                <td>{{$hotel->category}}</td>
                <td>{{$hotel->review}}</td>
                <td>
                    <form action="{{route('hotel.destroy',$hotel->id)}}" method="POST">
                        <a class="btn btn-info" href="{{route('hotel.edit',$hotel->id)}}">Edit</a>
                        <a class="btn btn-success" href="{{route('hotel.show',$hotel->id)}}">Details</a>
                        @csrf 
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
             
        </table>
    </div>
@endsection