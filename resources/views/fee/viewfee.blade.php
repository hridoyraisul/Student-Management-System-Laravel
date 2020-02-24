@extends('welcome')
@section('content')
<div class="jumbotron">
        <h1 class="display-4">Student Fee List</h1>
        <hr class="my-4">
        <div class="col-lg-8 col-md-10 mx-auto">
            <a href="{{URL::to('/fee/create')}}" class="btn btn-danger">Entry Students Fee</a>
            <table border="2">
                <tr>
                    <th>ID No</th>
                    <th>Name</th>
                    <th>Fee</th>
                    <th>Action</th>
                </tr>
                @foreach($data as $vpost)
                    <tr>
                        <td>{{ $vpost->id }}</td>
                        <td>{{$vpost->name}}</td>
                        <td>{{$vpost->fee}}</td>
                        <td>
                            <a href="{{URL::to('fee/'.$vpost->id.'/edit')}}" class="btn btn-sm btn-info">Edit</a>
                            <form action="{{URL::to('fee/'.$vpost->id)}}" method="post">
                            	@csrf
                            	@method('DELETE')
                            	<button class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@stop
