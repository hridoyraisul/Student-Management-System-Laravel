@extends('welcome')
@section('content')
    <div class="jumbotron">
        <h1 class="display-4">Edit {{$ed->fname}}'s Info</h1>
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
        <form method="post" action="{{route('store')}}" enctype="multipart/form-data">
            @csrf
            <label>First Name:</label><br>
            <input type="text" name="fname" value="{{$ed->fname}}"><br><br>
            <label>Last Name:</label><br>
            <input type="text" name="lname" value="{{$ed->lname}}"><br><br>
            <label>Birthday:</label><br>
            <input type="date" name="bday" value="{{$ed->bday}}"><br><br>
            <label>Gender:</label><br>
            <input type="radio" name="gender" value="male" checked>Male<br>
            <input type="radio" name="gender" value="female">Female<br><br>
            <label>Mobile No:</label><br>
            <input type="number" name="mobile" value="{{$ed->mobile}}"><br><br>
            <label>Email:</label><br>
            <input type="email" name="email" value="{{$ed->email}}"><br><br>
            <label>City:</label><br>
            <input type="text" name="city" value="{{$ed->city}}"><br><br>
            <label>Uploaded Image: </label>
            <img src="{{ URL::to($ed->image) }}" style="height: 40px; width: 80px; " ><br><br>
            <input type="checkbox" name="check" checked> Agree with all the terms and condition.<br><br>
            <input type="submit" value="Add Student" class="btn btn-primary btn-lg">
        </form>
    </div>
@stop