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
                    <div class="card">
                        <div class="content">
                            <form method="post" action="{{ route('admin.add.user') }}">
                                {{ csrf_field() }}
                                <input type="hidden" class="form-control" name="admin_id" value="{{ Sentinel::getUser()->id }}">
                                <div class="form-group">
                                    <label for="first_name">
                                        First Name
                                    </label>
                                    <input type="text" class="form-control" name="first_name" placeholder="First Name">
                                </div>

                                <div class="form-group">
                                    <label for="last_name">
                                        Last Name
                                    </label>
                                    <input type="text" class="form-control" name="last_name" placeholder="Last Name">
                                </div>

                                <div class="form-group">
                                    <label for="email">
                                        Email
                                    </label>
                                    <input type="email" class="form-control" name="email" placeholder="Email">
                                </div>

                                <div class="form-group">
                                    <label for="password">
                                        Password
                                    </label>
                                    <input type="text" class="form-control" name="password" placeholder="password">
                                </div>

                                <div class="form-group">
                                    <label for="name">
                                        Role
                                    </label>
                                    <select class="form-control" name="role">
                                        <option value="creator">Creator</option>
                                        <option value="reviewer">Reviewer</option>
                                        <option value="approver">Approver</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="designation">
                                        Designation
                                    </label>
                                    <input type="text" class="form-control" name="designation" placeholder="Designation">
                                </div>

                                <div class="form-group">
                                    <label for="officer_class">
                                        Officer class
                                    </label>
                                    <input type="text" class="form-control" name="officer_class" placeholder="Office Class">
                                </div>

                                <div class="form-group">
                                    <label for="contact-one">
                                        Contact one
                                    </label>
                                    <input type="text" class="form-control" name="contact_one" placeholder="Contact One">
                                </div>

                                <div class="form-group">
                                    <label for="contact-two">
                                        Contact two
                                    </label>
                                    <input type="text" class="form-control" name="contact_two" placeholder="Contact Two">
                                </div>

                                <button class="btn btn-info btn-fill" type="submit">Add User</button>
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