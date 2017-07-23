@extends('cockpit::layout')

@section('content')

<h1>Appearance</h1>

<form role="form" method="POST" action="{{ url('/admin/appearance') }}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <label>Select theme:</label>&nbsp;
    <select>
        <option>Spaceship</option>
    </select>


</form>

@endsection