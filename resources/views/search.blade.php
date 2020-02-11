@extends('welcome')
@section('content')
    <div class="jumbotron">
        <h1 class="display-4">Search Student</h1>
        <hr class="my-4">
        @yield('searchcontent')
        <p>Select the option by which you want to search</p>
        <form action="{{ url('search-result')}}" method="post" role="search">
            @csrf
            <label>Search by </label>
        <select name="searchoption">
            <option value="id">ID</option>
            <option value="fname">First Name</option>
            <option value="lname">Last Name</option>
            <option value="gender">Gender</option>
            <option value="city">City</option>
        </select>
        <input type="search" name="txtsearch" placeholder="Type to Search">
        <input type="submit" value="Search" name="search">
        </form>
    </div>
@stop