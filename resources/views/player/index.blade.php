@extends('layouts.admin')
@section('title','Player Index')
@section('content')

    <div class="row">
        {{-- For creating new record --}}
        <div class="col-sm-6 form-group pull-left">
        <div class="pull-left">
          @role('Sports Manager|Coach')
          <a class="btn btn-success" href="{{ route('players.create') }}" > <i class="icon ion-md-add"></i></a>     
          @endrole
        </div>
        </div>

        {{-- For searching --}}
        <div class="col-sm-6 form-group pull-right" >
          <form action="/search_player" method="get">
            <div class="input-group">
              <input class="form-control" id="search" value placeholder="Search Name" name="search" type="search">
              <div class="input-group-btn">
                <button type="submit" class="btn btn-warning"><i class="fa fa-search" aria-hidden="true"></i></button>
              </div>
            </div>
          </form>
        </div>
      </div>
    
      <div class="card">
      <div class="card-body">
        <div class="bs-example container-fluid" data-example-id="striped-table">
        <table class="table table-striped table-bordered table-hover">
              <thead>
                <tr>
                    <th style="text-align:center;color:#0168fa;">Id</th>
                    <th style="font-size:14px;color:#0168fa;text-align:center;">Sports Name</th>
                    <th style="text-align:center;">@sortablelink('name','Name')</th>
                    <th style="text-align:center;">@sortablelink('phone_no','Phone No.')</th>
                    <th style="font-size:14px;color:#0168fa;text-align:center;">Email</th>
                    <th style="text-align:center;">@sortablelink('gender','Gender')</th>
                    <th style="font-size:14px;color:#0168fa;text-align:center;">Profile Picture</th>
                    <th width="300px" style="font-size:14px;color:#0168fa;text-align:center;">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($players as $player)
                  <tr class = "text-center">
                    <td>{{ $player->id }}</td>
                    <td>{{ $player->sports }}</td>
                    <td>{{ $player->name }}</td>
                    <td>{{ $player->phone_no }}</td>
                    <td>{{ $player->email }}</td>
                    <td>{{ $player->gender }}</td> 
                    <td><img src="{{URL::asset('storage/player_profile/'.$player->profile)}}" height="70px" width="70px" class="rounded-circle"></td>
                    
                    <td>
                      <a class = "btn" href="{{route('players.show',['id'=>$player->id])}}" >
                        <i class="fa fa-th-list xlarge"  style="color:RoyalBlue;" aria-hidden="true"></i>
                      </a>

                      @role('Sports Manager|Captain')
                      <a class = "btn" href="{{route('players.edit',['id'=>$player->id])}}" >
                        <i class="far fa-edit" style="color:Green;" aria-hidden="true"></i>
                      </a>
                      @endrole

                      @role('Sports Manager|Coach')
                      <a class = "btn" href="{{route('players.destroy',['id'=>$player->id])}}" >
                        <i class="fa fa-trash" style="color:Red;" aria-hidden="true"></i>
                      </a>
                      @endrole
                    </td> 
                  </tr>
                @endforeach
            </tbody>
            
          </table>
        </div>
      </div>
      </div>
  
  </div>

  
  <div class="row">
  <div class="col-sm-12  pull-right">
  <ul class="pagination justify-content-center">
          {!! $players->appends(\Request::except('page'))->render() !!}
  </ul>
  </div>
  </div>

@endsection
