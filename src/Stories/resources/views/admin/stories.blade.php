@extends('cockpit::layout')

@section('content')

<div class="row pb-4">
    <div class="col">
        <h1>{{ trans('stories::default.stories') }}</h1>
    </div>
</div>

<div class="row">
    <div class="col">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>title</th>
                    <th>slug</th>
                    <th>story</th>
                    <th>category</th>
                    <th>user</th>
                    <th>created</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            @foreach($stories as $story)
                <tr>
                    <th scope="row">{{ $story->id }}</th>
                    <td class="text-capitalize">{{ $story->title }}</td>
                    <td class="text-capitalize">{{ $story->slug }}</td>
                    <td class="text-capitalize">{{ $story->story }}</td>
                    <td class="text-capitalize">{{ $story->category->name }}</td>
                    <td class="text-capitalize">{{ $story->user->name }}</td>
                    <td class="text-capitalize">{{ $story->created_at }}</td>
                    <td><a href="/admin/story/{{ $story->id }}">edit</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>


@endsection