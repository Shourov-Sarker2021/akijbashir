@extends('akij.layout')
@section('content')
    <div class="container" style="background-color: #51a8ff">
        <h2 style="text-align:center;">This Is Main Page</h2>
    </div>
    <a class="btn btn-primary" href="{{route('akijs.create')}}">Add New Person</a>
    <div class="container">
        <table class="table table-bordered">
            <tr style="text-align:center; background-color: #808080;">
                <th>No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Contact</th>
                <th>Address</th>
                <th>User Name</th>
                <th>Password</th>
                <th width="280 px">Action</th>
            </tr>
            @foreach($akijs as $akij)
                <tr>
                    <td>{{++$i}}</td>
                    <td>{{$akij->full_name}}</td>
                    <td>{{$akij->email}}</td>
                    <td>{{$akij->mobile}}</td>
                    <td>{{$akij->address}}</td>
                    <td>{{$akij->user_name}}</td>
                    <td>{{$akij->password}}</td>
                    <td>
                        <form  action="{{route('akijs.destroy',$akij->id)}}" method="POST">
                            <a class="btn btn-info" href="{{route('akijs.edit',$akij->id)}}">Edit</a>
                            <a class="btn btn-primary" href="{{route('akijs.show',$akij->id)}}">Details</a>
                            @csrf 
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection