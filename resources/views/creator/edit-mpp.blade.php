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
                            <form method="post" action="{{ route('creator.edit.mpp', ['id'=>$mpp->id]) }}">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="name">
                                        PE Name
                                    </label>
                                    <input type="text" class="form-control" name="name" value="{{ $mpp->name }}">
                                </div>

                                <div class="form-group">
                                    <label for="project_name">
                                        Project Name
                                    </label>
                                    <input type="text" class="form-control" name="project_name" value="{{ $mpp->project_name }}">
                                </div>

                                <div class="form-group">
                                    <label for="fiscal_year">
                                        Fiscal Year
                                    </label>
                                    <input type="text" class="form-control" name="fiscal_year" value="{{ $mpp->fiscal_year }}">
                                </div>

                                <div class="form-group">
                                    <label for="budget_sub_head_no">
                                        Budget Sub Head
                                    </label>
                                    <input type="text" class="form-control" name="budget_sub_head_no" value="{{ $mpp->budget_sub_head_no }}">
                                </div>

                                <div class="form-group">
                                    <label for="procurement_Description">
                                        Procurement Description
                                    </label>
                                    <textarea class="form-control" name="procurement_Description" rows="7">{{ $mpp->procurement_description }}</textarea>
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
                                    <input type="text" class="form-control" name="contract_type" value="{{ $mpp->contract_type }}">
                                </div>

                                <div class="form-group">
                                    <label for="Address_two">
                                        Duration
                                    </label>
                                    <input type="text" class="form-control" name="duration" value="{{ $mpp->duration }}">
                                </div>

                                <button class="btn btn-info btn-fill" type="submit">Update MPP</button>
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