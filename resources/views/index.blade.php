@extends('theme.default')


@section('content')

<div class="row">

    <div class="col-lg-12">

        <h1 class="page-header">Previous stocks</h1>

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

            <th>Suggested Price</th>

        </tr>

    </thead>

    <tbody>

        <tr>

            <td>1</td>

            <td>Infosys Ltd.</td>

            <td>500209</td>

            <td>810.15</td>

        </tr>

        <tr>

            <td>2</td>

            <td>Asian paints</td>

            <td>500820</td>

            <td>1580.00</td>

        </tr>

        <tr>

            <td>3</td>

            <td>Alok Industries</td>

            <td>521070</td>

            <td>3.50</td>

        </tr>

    </tbody>

</table>


@endsection