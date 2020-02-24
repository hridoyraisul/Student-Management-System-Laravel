@extends('welcome')
@section('content')
 <div class="jumbotron">
     <a href="{{URL::to('/fee/')}}" class="btn btn-danger">All Students Fee</a>
    <h1 class="display-4">Entry Student Fee</h1>
    <hr class="my-4">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    <form method="post" action="{{URL::to('/fee/')}}">
        @csrf
        <label>Student's Name:</label><br>
        <input type="text" name="name" placeholder="Enter Student name"><br><br>
        <label>Tution Fee:</label><br>
        <input type="text" name="fee" placeholder="Enter Students Fee"><br><br>
        <input type="submit" value="Insert Data" class="btn btn-primary btn-lg">
    </form>
    </div>
@stop
