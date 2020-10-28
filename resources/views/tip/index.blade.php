@extends('theme.default')
@section('content')

@if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Tips of the day</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<table class="table table-striped table-bordered table-hover">
    <thead>
        <tr>
            <th>#</th>
            <th>Company Name</th>
            <th>Code</th>
            <th>Details</th>
            <th>Day/Month</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($records as $value)
        <tr>
            <td>{{$value['id']}}</td>
            <td>{{$value['Company']['name']}}</td>
            <td>{{$value['Company']['code']}}</td>
            <td>{{$value['details']}}</td>
            <td>{{$value['tip_date']}}</td>
            <td><a href="/tip/{{$value['id']}}/edit" class="btn btn-success">Edit</a></td>
        </tr>
    @endforeach
    {{ $records->links() }}
    </tbody>
</table>
@endsection