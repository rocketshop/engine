@extends('cockpit::layout')

@section('content')

@if (count($errors) > 0)
    @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
@endif

<h1>User {{ $user->name }}</h1>
<span>{{ $user->created_at }}</span>
<br><br>
<form role="form" method="POST" action="{{ url('/admin/user', $user->id) }}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <label>Name:</label>
    <input type="text" name="name" value="{{ old('name', $user->name) }}"/>
    <br>
    <label>Email:</label>
    <input type="text" name="email" value="{{ old('email', $user->email) }}" />
    <br>
    <label>Password:</label>
    <input type="text" name="password" placeholder="New password"/>
    <button type="button">Generate</button>

    <br><br>
    <button type="submit">Spara</button>

</form>

@endsection