@extends('resturents.layout')
@section('content')
    <div class="container">
        <h2>This Is Index Page</h2>
    </div>
    <div class="container">
        <a href="{{route('resturent.create')}}" class="btn btn-primary">Add New Resturent</a>
    </div>
    <div class="container">
        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Location</th>
                <th>Menu</th>
                <th>Owner</th>
                <th width="280 px">Action</th>
            </tr>
            @foreach($resturents as $resturent)
            <tr>
            
                <td>{{++$i}}</td>
                <td>{{$resturent->name}}</td>
                <td>{{$resturent->location}}</td>
                <td>{{$resturent->menu}}</td>
                <td>{{$resturent->owner}}</td>
                <td>
                <form action="{{route('resturent.destroy',$resturent->id)}}" method="POST">
                <a href="{{route('resturent.edit',$resturent->id)}}" class="btn btn-info">Edit</a>
                <a href="{{route('resturent.show',$resturent->id)}}" class="btn btn-success">Details</a>
                @csrf 
                @method('DELETE') 
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            </tr>
                </td>
            @endforeach
            
        </table>
    </div>
@endsection