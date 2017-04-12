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
                            <form method="post" action="{{ route('creator.add.app') }}">
                                {{ csrf_field() }}

                                <div class="form-group">
                                    <label for="fiscal_year">
                                        Fiscal Year
                                    </label>
                                    <input type="text" class="form-control" name="fiscal_year" placeholder="Fiscal Year">
                                </div>

                                <div class="form-group">
                                    <label for="procurement_description">
                                        Procurement Description
                                    </label>
                                    <textarea name="procurement_description" class="form-control" rows="7">Procurement Description</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="procurement_category">
                                        Procurement Category
                                    </label>
                                    <select class="form-control" name="procurement_category">
                                        <option value="works">Works</option>
                                        <option value="goods">Goods</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="contract_type">
                                        Contract Type
                                    </label>
                                    <input type="text" class="form-control" name="contract_type" placeholder="Contract Type">
                                </div>

                                <div class="form-group">
                                    <label for="estimated_cost">
                                        Estimated Cost
                                    </label>
                                    <input type="text" class="form-control" name="estimated_cost" placeholder="Estimated Cost">
                                </div>

                                <div class="form-group">
                                    <label for="date_for_tender">
                                        Date for Tender
                                    </label>
                                    <input type="date" class="form-control" name="date_for_tender">
                                </div>

                                <div class="form-group">
                                    <label for="date_of_agreement">
                                        Date of Agreement
                                    </label>
                                    <input type="date" class="form-control" name="date_of_agreement">
                                </div>

                                <div class="form-group">
                                    <label for="bid_invitation_date">
                                        Bid invitation Date
                                    </label>
                                    <input type="date" class="form-control" name="bid_invitation_date">
                                </div>

                                <div class="form-group">
                                    <label for="date_of_consent">
                                        Date of Consent
                                    </label>
                                    <input type="date" class="form-control" name="date_of_consent">
                                </div>

                                <div class="form-group">
                                    <label for="bid_opening_date">
                                        Bid Opening Date
                                    </label>
                                    <input type="date" class="form-control" name="bid_opening_date">
                                </div>

                                <div class="form-group">
                                    <label for="bid_evalutaion_completion_date">
                                        Bid Evalutaion Completion Date
                                    </label>
                                    <input type="date" class="form-control" name="bid_evalutaion_completion_date">
                                </div>

                                <div class="form-group">
                                    <label for="date_fo_approval">
                                        Date of Approval
                                    </label>
                                    <input type="date" class="form-control" name="date_fo_approval">
                                </div>

                                <div class="form-group">
                                    <label for="loi_issue_date">
                                       LOI issue Date
                                    </label>
                                    <input type="date" class="form-control" name="loi_issue_date">
                                </div>

                                <div class="form-group">
                                    <label for="contract_signing_date">
                                        Contract Signing Date
                                    </label>
                                    <input type="date" class="form-control" name="contract_signing_date">
                                </div>

                                <div class="form-group">
                                    <label for="work_initiation_date">
                                        Work Inititaion Date
                                    </label>
                                    <input type="date" class="form-control" name="work_initiation_date">
                                </div>

                                <div class="form-group">
                                    <label for="work_completion_date">
                                        Work Completion Date
                                    </label>
                                    <input type="date" class="form-control" name="work_completion_date">
                                </div>

                                <button class="btn btn-info btn-fill" type="submit">Create APP</button>
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