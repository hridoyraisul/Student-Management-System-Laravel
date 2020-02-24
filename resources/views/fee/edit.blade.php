@extends('welcome')
@section('content')
 <div class="jumbotron">
     <a href="{{URL::to('/fee/create')}}" class="btn btn-danger">Entry Students Fee</a>
    <h1 class="display-4">Edit Students Fee</h1>
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
    <form method="post" action="{{URL::to('/fee/'.$data->id)}}">
        @csrf
        @method('PUT')
        <label>Student's Name:</label><br>
        <input type="text" name="name" value="{{$data->name}}"><br><br>
        <label>Tution Fee:</label><br>
        <input type="text" name="fee" value="{{$data->fee}}"><br><br>
        <input type="submit" value="Update Data" class="btn btn-primary btn-lg">
    </form>
    </div>
@stop
