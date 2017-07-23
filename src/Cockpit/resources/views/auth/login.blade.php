@extends('cockpit::layout')


@section('content')

<form method="post" action="{{ url('admin/login') }}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="row justify-content-center">
        <div class=" col-12 col-md-6 p-0">
            <div class="card">
                <div class="card-block">
                    <h4 class="card-title">Login</h4>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
                    </div>


                    <button class="btn btn-primary">login</button>
                </div>
            </div>
        </div>
    </div>
</form>

@endsection