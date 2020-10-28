@extends('theme.default')
@section('content')

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Stocks of the month</h1>
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
            <th>Month/Year</th>
            <th>Edit</th>
            <th>Add Analytics</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($records as $value)
        <tr>
            <td>{{$value['id']}}</td>
            <td>{{$value['Company']['name']}}</td>
            <td>{{$value['Company']['code']}}</td>
            <td>{{$value['tip_date']}}</td>
            <td><a href="#" class="btn btn-success">Edit</a></td>
            <td><a href="/smanalysis/{{$value['id']}}" class="btn btn-success">Add</a></td>
        </tr>
    @endforeach
    {{ $records->links() }}
    </tbody>
</table>
@endsection