@extends('layouts.master')
@section('title', 'Homepage')
@section('sidebar')
    @include('approver.sidebar')
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
                                    <th>Procurement Category</th>
                                    <th>Contract Type</th>
                                    <th>Estimated Cost</th>
                                    <th>Date for Tender</th>
                                    <th>Bid Opening Date</th>
                                    <th>Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($apps as $app)
                                    <tr>
                                        <td>{{ $app->fiscal_year }}</td>
                                        <td>{{ $app->procurement_category }}</td>
                                        <td>{{ $app->contract_type }}</td>
                                        <td>{{ $app->estimated_cost }}</td>
                                        <td>{{ $app->date_for_tender }}</td>
                                        <td>{{ $app->bid_opening_date }}</td>
                                        @if($app->status == 3)
                                            <td>
                                                <a href="" class="btn btn-primary" data-toggle="modal" data-target="#view-{{ $app->id }}">Review</a>
                                            </td>
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
@foreach($apps as $app)
    <!-- Modal -->
    <div class="modal fade bs-example-modal-lg" id="view-{{ $app->id }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
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
                            <label for="fiscal_year">
                                Fiscal Year
                            </label>
                            <input type="text" disabled class="form-control" name="fiscal_year" value="{{ $app->fiscal_year }}">
                        </div>

                        <div class="form-group">
                            <label for="procurement_description">
                                Procurement Description
                            </label>
                            <textarea name="procurement_description" disabled class="form-control" rows="7">{{ $app->procurement_description }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="procurement_category">
                                Procurement Category
                            </label>
                            <select class="form-control" disabled name="procurement_category">
                                <option value="works">{{ $app->procurement_category }}</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="contract_type">
                                Contract Type
                            </label>
                            <input type="text" disabled class="form-control" name="contract_type" value="{{ $app->contract_type }}">
                        </div>

                        <div class="form-group">
                            <label for="estimated_cost">
                                Estimated Cost
                            </label>
                            <input type="text" disabled class="form-control" name="estimated_cost" value="{{ $app->estimated_cost }}">
                        </div>

                        <div class="form-group">
                            <label for="date_for_tender">
                                Date for Tender
                            </label>
                            <input type="date" disabled class="form-control" name="date_for_tender" value="{{ $app->date_for_tender }}">
                        </div>

                        <div class="form-group">
                            <label for="date_of_agreement">
                                Date of Agreement
                            </label>
                            <input type="date" disabled class="form-control" name="date_of_agreement" value="{{ $app->date_of_agreement }}">
                        </div>

                        <div class="form-group">
                            <label for="bid_invitation_date">
                                Bid invitation Date
                            </label>
                            <input type="date" disabled class="form-control" name="bid_invitation_date" value="{{ $app->bid_invitation_date }}">
                        </div>

                        <div class="form-group">
                            <label for="date_of_consent">
                                Date of Consent
                            </label>
                            <input type="date" disabled class="form-control" name="date_of_consent" value="{{ $app->date_of_consent }}">
                        </div>

                        <div class="form-group">
                            <label for="bid_opening_date">
                                Bid Opening Date
                            </label>
                            <input type="date" disabled class="form-control" name="bid_opening_date" value="{{ $app->bid_opening_date }}">
                        </div>

                        <div class="form-group">
                            <label for="bid_evalutaion_completion_date">
                                Bid Evalutaion Completion Date
                            </label>
                            <input type="date" disabled class="form-control" name="bid_evalutaion_completion_date" value="{{ $app->bid_evalutaion_completion_date }}">
                        </div>

                        <div class="form-group">
                            <label for="date_fo_approval">
                                Date of Approval
                            </label>
                            <input type="date" disabled class="form-control" name="date_fo_approval" value="{{ $app->date_fo_approval }}">
                        </div>

                        <div class="form-group">
                            <label for="loi_issue_date">
                                LOI issue Date
                            </label>
                            <input type="date" disabled class="form-control" name="loi_issue_date" value="{{ $app->loi_issue_date }}">
                        </div>

                        <div class="form-group">
                            <label for="contract_signing_date">
                                Contract Signing Date
                            </label>
                            <input type="date" disabled class="form-control" name="contract_signing_date" value="{{ $app->contract_signing_date }}">
                        </div>

                        <div class="form-group">
                            <label for="work_initiation_date">
                                Work Inititaion Date
                            </label>
                            <input type="date" disabled class="form-control" name="work_initiation_date" value="{{ $app->work_initiation_date }}">
                        </div>

                        <div class="form-group">
                            <label for="work_completion_date">
                                Work Completion Date
                            </label>
                            <input type="date" disabled class="form-control" name="work_completion_date" value="{{ $app->work_completion_date }}">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <a href="{{ route('approver.decline.app', ['id'=>$app->id]) }}"><button class="btn btn-danger btn-fill">Decline</button></a>
                    <a href="{{ route('approver.approve.app', ['id'=>$app->id]) }}"><button class="btn btn-info btn-fill">Approve</button></a>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endforeach