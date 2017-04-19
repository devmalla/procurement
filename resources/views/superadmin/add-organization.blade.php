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
                                    <label for="acronym">
                                        Acronym
                                    </label>
                                    <input type="text" class="form-control" name="acronym" placeholder="Acronym">
                                </div>

                                <div class="form-group">
                                    <label for="email">
                                        Email
                                    </label>
                                    <input type="email" class="form-control" name="email" placeholder="Email">
                                </div>

                                <div class="form-group">
                                    <label for="description">
                                        Description
                                    </label>
                                    <textarea class="form-control" name="description" rows="7">Description</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="office_category">
                                        Office Category
                                    </label>
                                    <select class="form-control" name="office_category">
                                        <option value="govt">GOVT</option>
                                        <option value="pvt">PVT</option>
                                        <option value="etc">ETC</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="website">
                                        Website
                                    </label>
                                    <input type="text" class="form-control" name="website" placeholder="Website">
                                </div>

                                <div class="form-group">
                                    <label for="Address_one">
                                        Address Line 1
                                    </label>
                                    <input type="text" class="form-control" name="address_one" placeholder="Address Line 1">
                                </div>

                                <div class="form-group">
                                    <label for="Address_two">
                                        Address Line 2
                                    </label>
                                    <input type="text" class="form-control" name="address_two" placeholder="Address Line 2">
                                </div>

                                <div class="form-group">
                                    <label for="Address_three">
                                        Address Line 3
                                    </label>
                                    <input type="text" class="form-control" name="address_three" placeholder="Address Line 3">
                                </div>

                                <div class="form-group">
                                    <label for="city">
                                        City
                                    </label>
                                    <input type="text" class="form-control" name="city" placeholder="City">
                                </div>

                                <div class="form-group">
                                    <label for="district">
                                        District
                                    </label>
                                    <input type="text" class="form-control" name="district" placeholder="District">
                                </div>

                                <div class="form-group">
                                    <label for="municipality">
                                        Municipality
                                    </label>
                                    <input type="text" class="form-control" name="municipality" placeholder="Municipality">
                                </div>

                                <div class="form-group">
                                    <label for="vdc">
                                        VDC
                                    </label>
                                    <input type="text" class="form-control" name="vdc" placeholder="VDC">
                                </div>

                                <div class="form-group">
                                    <label for="contact_one">
                                        Contact 1
                                    </label>
                                    <input type="text" class="form-control" name="contact_one" placeholder="Contact 1">
                                </div>

                                <div class="form-group">
                                    <label for="contact_two">
                                        Contact 2
                                    </label>
                                    <input type="text" class="form-control" name="contact_two" placeholder="Contact 2">
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