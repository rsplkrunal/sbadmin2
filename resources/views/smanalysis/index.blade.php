@extends('theme.default')
@section('content')

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Stocks of the month</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->

<div class="row">
    <div class="card-body">
        <div class="form-group row">
            <label for="type" class="col-md-2 col-form-label text-md-left">{{ __('Company name') }}</label>
            <div class="col-md-6">{{$details['company']['name']}}</div>
        </div>
        <div class="form-group row">
            <label for="type" class="col-md-2 col-form-label text-md-left">{{ __('Tip month') }}</label>
            <div class="col-md-6">
            {{ Carbon\Carbon::parse($details['tip_date'])->format('M-Y') }}
            </div>
        </div>
    </div>
</div>

<table class="table table-striped table-bordered table-hover">
    <thead>
        <tr>
            <th>#</th>
            <th>Type</th>
            <th>Details</th>
            <th>Edit</th>
            <th>Add Analytics</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($records as $value){}
        <tr>
            <td></td>
            <td>{{$value->type}}</td>
            <td>{{$value->details}}</td>
            <td></td>
            <td></td>
        </tr>
    </tbody>
    @endforeach
</table>
@endsection