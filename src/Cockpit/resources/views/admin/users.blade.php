@extends('cockpit::layout')

@section('content')

<div class="row pb-4">
    <div class="col">
        <h1>Users</h1>
    </div>
</div>

<div class="row">
    <div class="col">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th class="text-center">Active</th>
                    <th>Created</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <th scope="row">{{ $user->id }}</th>
                    <td class="text-capitalize">{{ $user->name }}</td>
                    <td class="text-lowercase">{{ $user->email }}</td>
                    <td class="text-success text-uppercase font-weight-bold text-center">yes</td>
                    <td>{{ $user->created_at }}</td>
                    <td><a href="/admin/user/{{ $user->id }}">edit</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>


@endsection