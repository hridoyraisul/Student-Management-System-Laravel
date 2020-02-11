@extends('welcome')
@section('content')
    <div class="jumbotron">
        <h1 class="display-4">Student List</h1>
        <hr class="my-4">
        <div class="col-lg-8 col-md-10 mx-auto">
            <a href="{{route('add')}}" class="btn btn-danger">Add New Student</a>
            <table border="2">
                <tr>
                    <th>ID No</th>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
                @foreach($post as $vpost)
                    <tr>
                        <td>{{ $vpost->id }}</td>
                        <td>{{$vpost->fname}} {{$vpost->lname}}</td>
                        <td><img src="{{ URL::to($vpost->image) }}" style="height: 40px; width: 70px;"></td>
                        <td>
                            <a href="{{URL::to('edit/'.$vpost->id)}}" class="btn btn-sm btn-info">Edit</a>
                            <a href="{{URL::to('delete/'.$vpost->id)}}" class="btn btn-sm btn-danger">Delete</a>
                            <a href="{{URL::to('details/'.$vpost->id)}}" class="btn btn-sm btn-success">View</a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@stop