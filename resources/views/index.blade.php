@extends('welcome')
@section('content')
    <div class="jumbotron">
        <h1 class="display-4">You're welcome here !!!</h1>
        <hr class="my-4">
        <p>Click the button below for entry new student to the system.</p>
        <p class="lead">
            <a class="btn btn-primary btn-lg" href="{{route('add')}}" role="button">Add Student</a>
        </p>
    </div>
    @stop