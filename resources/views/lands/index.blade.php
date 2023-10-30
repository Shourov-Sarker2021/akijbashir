@extends('lands.layout')
@section('content')
    <div class="container">
        <h2>This Is Index Page</h2>
    </div>
    <a class="btn btn-success" href="{{route('land.create')}}">Create New Land</a>
    <div class="container">
        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Land Name</th>
                <th>Address</th>
                <th>Owner</th>
                <th>Country</th>
                <th width="280 px">Action</th>
            </tr>
            @foreach($lands as $land)
            <tr>
                <td>{{++$i}}</td>
                <td>{{$land->land_name}}</td>
                <td>{{$land->address}}</td>
                <td>{{$land->owner}}</td>
                <td>{{$land->country}}</td>
                <td>
                    <form action="{{route('land.destroy',$land->id)}}" method="POST">
                        <a class="btn btn-info" href="{{route('land.edit', $land->id)}}">Edit</a>
                        <a class="btn btn-primary" href="{{route('land.show', $land->id)}}">Details</a>
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