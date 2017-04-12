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
                            <h4 class="title">APP List</h4>
                        </div>
                        <div class="content"></div>
                    </div>
                    <div class="card">
                        <div class="content">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>Fiscal Year</th>
                                    <th>Procurement Description</th>
                                    <th>Procurement Category</th>
                                    <th>Contract Type</th>
                                    <th>Estimated Cost</th>
                                    <th>Date for Tender</th>
                                    <th>Date of Agreement</th>
                                    <th>Bid Invitation Date</th>
                                    <th>Date of Consent</th>
                                    <th>Bid Opening Date</th>
                                    <th>Action</th>
                                    <th>Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($apps as $app)
                                    <tr>
                                        <td>{{ $app->fiscal_year }}</td>
                                        <td>{{ $app->procurement_description }}</td>
                                        <td>{{ $app->procurement_category }}</td>
                                        <td>{{ $app->contract_type }}</td>
                                        <td>{{ $app->estimated_cost }}</td>
                                        <td>{{ $app->date_for_tender }}</td>
                                        <td>{{ $app->date_of_agreement }}</td>
                                        <td>{{ $app->bid_invitation_date }}</td>
                                        <td>{{ $app->date_of_consent }}</td>
                                        <td>{{ $app->bid_opening_date }}</td>
                                        <td>
                                            <div class="p-b"  style="padding-bottom: 5px;">
                                                <a href="{{ route('creator.edit.app', ['id'=>$app->id]) }}"><button class="btn btn-default">Edit</button></a>
                                            </div>
                                            <a href="{{ route('creator.delete.app', ['id'=>$app->id]) }}" onclick="return confirm('Are you sure you want to delete this mpp?');"><button class="btn btn-danger">Delete</button></a>
                                        </td>
                                        @if($app->status == 0)
                                            <td><a href="{{ route('creator.review.app', ['id'=>$app->id]) }}"><button class="btn btn-info btn-fill">Send for Review</button></a></td>
                                        @elseif($app->status == 1)
                                            <td style="color: red;";>Approval Pending</td>
                                        @elseif($app->status == 2)
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