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
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Organization List</h4>
                        </div>
                        <div class="content"></div>
                    </div>
                    <div class="card">
                        <div class="content">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Acronym</th>
                                    <th>Email</th>
                                    <th>Description</th>
                                    <th>Office Category</th>
                                    <th>Website</th>
                                    <th>Adress One</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($organizations as $organization)
                                    <tr>
                                        <td>{{ $organization->name }}</td>
                                        <td>{{ $organization->acronym }}</td>
                                        <td>{{ $organization->email }}</td>
                                        <td>{{ $organization->description }}</td>
                                        <td>{{ $organization->office_category }}</td>
                                        <td>{{ $organization->website }}</td>
                                        <td>{{ $organization->address_one }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
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