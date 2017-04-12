@extends('layouts.master')
@section('title', 'Homepage')
@section('sidebar')
    @include('creator.sidebar')
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
                            <form method="post" action="{{ route('creator.add.mpp') }}">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="name">
                                        PE Name
                                    </label>
                                    <input type="text" class="form-control" name="name" placeholder="Name">
                                </div>

                                <div class="form-group">
                                    <label for="project_name">
                                        Project Name
                                    </label>
                                    <input type="text" class="form-control" name="project_name" placeholder="Project Name">
                                </div>

                                <div class="form-group">
                                    <label for="fiscal_year">
                                        Fiscal Year
                                    </label>
                                    <input type="text" class="form-control" name="fiscal_year" placeholder="Fiscal Year">
                                </div>

                                <div class="form-group">
                                    <label for="budget_sub_head_no">
                                        Budget Sub Head
                                    </label>
                                    <input type="text" class="form-control" name="budget_sub_head_no" placeholder="Budget Sub Head">
                                </div>

                                <div class="form-group">
                                    <label for="procurement_Description">
                                        Procurement Description
                                    </label>
                                    <textarea class="form-control" name="procurement_Description" rows="7">Procurement Description</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="website">
                                        Procurement Category
                                    </label>
                                    <select class="form-control"  name="procurement_category">
                                        <option>Works</option>
                                        <option>Goods</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="contract_type">
                                        Contract Type
                                    </label>
                                    <input type="text" class="form-control" name="contract_type" placeholder="Contract Type">
                                </div>

                                <div class="form-group">
                                    <label for="Address_two">
                                        Duration
                                    </label>
                                    <input type="text" class="form-control" name="duration" placeholder="Duration">
                                </div>

                                <button class="btn btn-info btn-fill" type="submit">Create MPP</button>
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