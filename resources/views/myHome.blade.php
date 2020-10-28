@extends('theme.default')


@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="col-xl-12 col-lg-12">
    <div class="card shadow mb-4">
      <!-- Card Header - Dropdown -->
      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Tips of the day</h6>

      </div>
      <!-- Card Body -->
      <div class="card-body">
        <ul>
            @foreach($data as $val)
            <li><b>{{$val['company']['name']}} ({{$val['company']['code']}}) -> {{$val['details']}}</b></li>
            @endforeach
        </ul>
      </div>
    </div>
  </div>

  <div class="row">
    <!-- Pie Chart -->
    <div class="col-xl-6 col-lg-5">
      <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">Stock of the month</h6>
          <div class="dropdown no-arrow">
            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
              <div class="dropdown-header">Dropdown Header:</div>
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </div>
        </div>
        <!-- Card Body -->
        <div class="card-body bg-grey ">
          <div class="pt-4 pb-2">
            <img class="rounded" src="https://upload.wikimedia.org/wikipedia/en/thumb/9/99/Reliance_Industries_Logo.svg/330px-Reliance_Industries_Logo.svg.png" width="200" border=1>

            <span style="float:right">
              Name : {{$stockMonth['company']['name']}}
              <br /><br />
              Code : {{$stockMonth['company']['code']}}
              <br />
            </span>

          </div>
          <div class="mt-4 text-left border-bottom-primary">
            <span class="mr-2">
              <i class="badge badge-primary badge-counter">S</i>
            </span>
            <span class="mr-8">Strength Analysis({{ $stockMonth['strength_cnt']}})
            </span>
            <span data-toggle="modal" data-target="#sModal" class="mr-2" style="float:right;"><i class="fas fa-arrow-right"></i>
            </span>
          </div>
          <div class="mt-4 text-left border-bottom-danger">
            <span class="mr-2">
              <i class="badge badge-danger badge-counter">W</i>Weekness Analysis({{ $stockMonth['weekness_cnt']}})
            </span>
            <span data-toggle="modal" data-target="#wModal" class="mr-2" style="float:right;"><i class="fas fa-arrow-right"></i>
            </span>
          </div>
          <div class="mt-4 text-left border-bottom-success">
            <span class="mr-2">
              <i class="badge badge-success badge-counter">O</i>opportunity Analysis({{ $stockMonth['opportunity_cnt']}})
            </span>
            <span data-toggle="modal" data-target="#oModal"  class="mr-2" style="float:right;"><i class="fas fa-arrow-right"></i>
            </span>
          </div>
          <div class="mt-4 text-left border-bottom-warning">
            <span class="mr-2">
              <i class="badge badge-warning badge-counter">T</i>Threats Analysis({{ $stockMonth['threats_cnt']}})
            </span>
            <span data-toggle="modal" data-target="#tModal"  class="mr-2" style="float:right;"><i class="fas fa-arrow-right"></i>
            </span>
          </div>
        </div>
      </div>
    </div>


    <!-- Area Chart -->
    <div class="col-xl-6 col-lg-6">
      <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">Targets achieved</h6>
          <div class="dropdown no-arrow">
            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
              <div class="dropdown-header">Dropdown Header:</div>
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </div>
        </div>
        <!-- Card Body -->
        <div class="card-body">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Advise details</th>
                <th scope="col">Given call</th>
                <th scope="col">Duration</th>
                <th scope="col">Target achieved</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">Alok industries</th>
                <td>Will be Rs 50 by 1st-July</td>
                <td>5</td>
                <td>2 months</td>
                <td>50</td>
              </tr>
              <tr>
                <th scope="row">Tata Motors</th>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>1500</td>
              </tr>
              <tr>
                <th scope="row">Multibagger Stock</th>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>5000</td>
              </tr>
            </tbody>
          </table>
          <div>
          </div>
        </div>
      </div>
    </div>

  </div>

</div>
<!-- /.container-fluid -->

<!-- Modal -->
<div class="modal fade" id="sModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Strength Analysis({{ $stockMonth['strength_cnt']}})</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      {{ $stockMonth['strength']}}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="wModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Weekness Analysis({{ $stockMonth['weekness_cnt']}})</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      {{ $stockMonth['weekness']}}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="oModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Opportunity Analysis({{ $stockMonth['opportunity_cnt']}})</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      {{ $stockMonth['opportunity']}}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="tModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Threats  Analysis({{ $stockMonth['threats_cnt']}})</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      {{ $stockMonth['threats']}}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

@endsection