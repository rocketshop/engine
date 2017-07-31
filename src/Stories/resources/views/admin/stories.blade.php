@extends('cockpit::layout')

@section('content')

<div class="row pb-4">
    <div class="col">
        <h1>{{ trans('stories::stories') }}Stories</h1>
    </div>
</div>

<div class="row">
    <div class="col">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th class="text-center">Enabled</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
                <tr>
                    <th scope="row">{{ $product->id }}</th>
                    <td class="text-capitalize">{{ $product->name }}</td>
                    <td class="text-success text-uppercase font-weight-bold text-center {{ $product->id % 5 ? 'text-success' : 'text-danger' }}">{{ $product->id % 5 ? 'Yes' : 'No' }}</td>
                    <td><a href="/admin/product/{{ $product->id }}">edit</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>


@endsection