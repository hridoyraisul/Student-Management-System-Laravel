@extends('welcome')
@section('content')
    <div class="jumbotron">
        <h1 class="display-4">You're welcome to Contact page!!!</h1>
        <hr class="my-4">
        <table border="2">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Phone No</th>
                <th>Email</th>
                <th>Details</th>
            </tr>
            @foreach($post as $vpost)
                <tr>
                    <td>{{ $vpost->id }}</td>
                    <td>{{$vpost->fname}} {{$vpost->lname}}</td>
                    <td>{{$vpost->mobile}}</td>
                    <td>{{$vpost->email}}</td>
                    <td>
                        <a href="{{URL::to('details/'.$vpost->id)}}" class="btn btn-sm btn-success">View Details</a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@stop