@extends('welcome')
@section('content')
    <div class="jumbotron">
        <h1 class="display-4">Details about {{$pt->fname}}</h1>
        <hr class="my-4">
        <div class="col-lg-8 col-md-10 mx-auto">
            <a href="{{Route('add')}}" class="btn btn-danger">Add New Student</a>
            <a href="{{route('list')}}" class="btn btn-info">Show All Student</a>
            <div>
                <ol>
                    <li>Id No: {{$pt->id}}</li>
                    <li>Name: {{$pt->fname}} {{$pt->lname}}</li>
                    <li>Picture:</li>
                    <img src="{{ URL::to($pt->image) }}" style="height: 340px;">
                    <li>Phone No: {{$pt->mobile}}</li>
                    <li>Email: {{$pt->email}}</li>
                    <li>Gender: {{$pt->gender}}</li>
                    <li>Birthday: {{$pt->bday}}</li>
                    <li>City: {{$pt->city}}</li>
                </ol>
            </div>
        </div>
    </div>
@stop