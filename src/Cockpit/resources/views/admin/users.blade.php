@extends('cockpit::layout')

@section('content')

<style>
th {
    text-align: left;
}
</style>

<h1>Users</h1>


<table style="width: 100%;">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Active</th>
            <th>Created</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>1</td>
            <td>{{ $user->created_at }}</td>
            <td><a href="/admin/user/{{ $user->id }}">edit</a></td>
        </tr>
        @endforeach
    </tbody>
    <tfoot></tfoot>
</table>


@endsection