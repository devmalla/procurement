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
                    <div class="card">
                        <div class="header">
                            <h4 class="title">MPP List</h4>
                        </div>
                        <div class="content"></div>
                    </div>
                    <div class="card">
                        <div class="content">
                            <table class="table table-bordered table-striped text-center">
                                <thead>
                                <tr>
                                    <th>Project Name</th>
                                    <th>Fiscal Year</th>
                                    <th>Procurement Category</th>
                                    <th>Contract Type</th>
                                    <th>Duration</th>
                                    <th>Action</th>
                                    <th>Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($mpps as $mpp)
                                    <tr>
                                        <td>{{ $mpp->project_name }}</td>
                                        <td>{{ $mpp->fiscal_year }}</td>
                                        <td>{{ $mpp->procurement_category }}</td>
                                        <td>{{ $mpp->contract_type }}</td>
                                        <td>{{ $mpp->duration }}</td>
                                        <td>
                                            <div class="p-b"  style="padding: 5px 0px;">
                                                <a href="{{ route('creator.edit.mpp', ['id'=>$mpp->id]) }}"><button class="btn btn-default">Edit</button></a>
                                            </div>
                                            <a href="{{ route('creator.delete.mpp', ['id'=>$mpp->id]) }}" onclick="return confirm('Are you sure you want to delete this mpp?');"><button class="btn btn-danger">Delete</button></a>
                                        </td>
                                        @if($mpp->status == 0)
                                            <td><a href="" class="btn btn-primary" data-toggle="modal" data-target="#view-{{ $mpp->id }}">Send for Review</a></td>
                                        @elseif($mpp->status == 1)
                                            <td style="color: red;";>Approval Pending</td>
                                        @elseif($mpp->status == 3)
                                            <td style="color: red;";>Approval Pending</td>
                                        @elseif($mpp->status == 2)
                                            <td style="color: green;";>Approved</td>
                                        @endif
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
@foreach($mpps as $mpp)
<!-- Modal -->
    <div class="modal fade bs-example-modal-lg" id="view-{{ $mpp->id }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">View MPP</h4>
                </div>
                <div class="modal-body">
                    <form>
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="name">
                                PE Name
                            </label>
                            <input type="text" class="form-control" disabled name="name" value="{{ $mpp->name }}">
                        </div>

                        <div class="form-group">
                            <label for="project_name">
                                Project Name
                            </label>
                            <input type="text" class="form-control" disabled name="project_name" value="{{ $mpp->project_name }}">
                        </div>

                        <div class="form-group">
                            <label for="fiscal_year">
                                Fiscal Year
                            </label>
                            <input type="text" class="form-control" disabled name="fiscal_year" value="{{ $mpp->fiscal_year }}">
                        </div>

                        <div class="form-group">
                            <label for="budget_sub_head_no">
                                Budget Sub Head
                            </label>
                            <input type="text" class="form-control" disabled name="budget_sub_head_no" value="{{ $mpp->budget_sub_head_no }}">
                        </div>

                        <div class="form-group">
                            <label for="procurement_Description">
                                Procurement Description
                            </label>
                            <textarea class="form-control" name="procurement_Description" disabled rows="7">{{ $mpp->procurement_description }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="website">
                                Procurement Category
                            </label>
                            <select class="form-control" disabled name="procurement_category">
                                <option value="">{{ $mpp->procurement_category }}</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="contract_type">
                                Contract Type
                            </label>
                            <input type="text" class="form-control" name="contract_type" disabled value="{{ $mpp->contract_type }}">
                        </div>

                        <div class="form-group">
                            <label for="Address_two">
                                Duration
                            </label>
                            <input type="text" disabled class="form-control" name="duration" value="{{ $mpp->duration }}">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <a href="{{ route('creator.review.mpp', ['id'=>$mpp->id]) }}"><button class="btn btn-info btn-fill">Send for Review</button></a>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endforeach



