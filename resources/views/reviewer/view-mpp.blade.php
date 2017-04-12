@extends('layouts.master')
@section('title', 'Homepage')
@section('sidebar')
    @include('reviewer.sidebar')
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
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Project Name</th>
                                    <th>Fiscal Year</th>
                                    <th>Budget Sub Head No</th>
                                    <th>Procurement Description</th>
                                    <th>Procurement Category</th>
                                    <th>Contract Type</th>
                                    <th>Duration</th>
                                    <th>Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($mpps as $mpp)
                                    <tr>
                                        <td>{{ $mpp->name }}</td>
                                        <td>{{ $mpp->project_name }}</td>
                                        <td>{{ $mpp->fiscal_year }}</td>
                                        <td>{{ $mpp->budget_sub_head_no }}</td>
                                        <td>{{ $mpp->procurement_description }}</td>
                                        <td>{{ $mpp->procurement_category }}</td>
                                        <td>{{ $mpp->contract_type }}</td>
                                        <td>{{ $mpp->duration }}</td>
                                        @if($mpp->status == 1)
                                            <td>
                                                <div class="p-b"  style="padding-bottom: 5px;">
                                                    <a href="{{ route('reviewer.decline.mpp', ['id'=>$mpp->id]) }}"><button class="btn btn-danger btn-fill">Decline</button></a></div>
                                                <a href="{{ route('reviewer.approve.mpp', ['id'=>$mpp->id]) }}"><button class="btn btn-info btn-fill">Send for Approval</button></a>
                                            </td>
                                        @elseif($mpp->status == 3)
                                            <td style="color: red;">Approval Pending</td>
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