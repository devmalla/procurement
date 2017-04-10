@extends('layouts.master')
@section('title', 'Homepage')
@section('sidebar')
    @include('superadmin.sidebar')
@endsection
@section('navigation')
    @include('layouts.navigation')
@endsection
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if (isset($message))
                        <div class="alert alert-success">
                           fdf {{ $message }}
                        </div>
                    @endif
                    <div class="card">
                        <div class="content">
                            <form method="post" action="{{ route('admin.add.organization') }}">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="name">
                                        Name
                                    </label>
                                    <input type="text" class="form-control" name="name" placeholder="Name">
                                </div>

                                <div class="form-group">
                                    <label for="name">
                                        Email
                                    </label>
                                    <input type="email" class="form-control" name="email" placeholder="Email">
                                </div>

                                <div class="form-group">
                                    <label for="name">
                                        Address
                                    </label>
                                    <input type="text" class="form-control" name="address" placeholder="Address">
                                </div>

                                <button class="btn btn-info btn-fill" type="submit">Add Organization</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('footer')
    @include('layouts.footer')
@endsection