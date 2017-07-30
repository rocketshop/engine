@extends('cockpit::layout')

@section('content')

<div class="row pb-4">
    <div class="col">
        <h1>Articles</h1>
    </div>
</div>

<div class="row">
    <div class="col">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>SKU</th>
                    <th class="text-center">Stock</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            @foreach($articles as $article)
                <tr>
                    <th scope="row">{{ $article->id }}</th>
                    <td class="text-capitalize">{{ $article->name }}</td>
                    <td class="text-lowercase">{{ $article->sku }}</td>
                    <td class="text-uppercase font-weight-bold text-center {{ $article->stock ? "" : "text-danger" }}">{{ $article->stock }}</td>
                    <td><a href="/admin/article/{{ $article->id }}">edit</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>


@endsection