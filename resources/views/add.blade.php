@extends('welcome')
@section('content')
    <div class="jumbotron">
    <h1 class="display-4">Insert Student Info</h1>
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
        <input type="text" name="fname" placeholder="Enter first name"><br><br>
        <label>Last Name:</label><br>
        <input type="text" name="lname" placeholder="Enter last name"><br><br>
        <label>Birthday:</label><br>
        <input type="date" name="bday"><br><br>
        <label>Gender:</label><br>
        <input type="radio" name="gender" value="male">Male<br>
        <input type="radio" name="gender" value="female">Female<br><br>
        <label>Mobile No:</label><br>
        <input type="number" name="mobile"><br><br>
        <label>Email:</label><br>
        <input type="email" name="email"><br><br>
        <label>City:</label><br>
        <input type="text" name="city"><br><br>
        <label>Upload image</label><br>
        <input type="file" name="image"><br><br>
        <input type="checkbox" name="check"> Agree with all the terms and condition.<br><br>
        <input type="submit" value="Add Student" class="btn btn-primary btn-lg">
    </form>
    </div>
@stop