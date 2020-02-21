@extends('layouts.admin')
@section('title','Show Player')
@section('content')

            <div class="card">
            <div class="card-body">
              <div class="table-responsive">
                <div class="container-fluid">
                    
                    <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Profile Picture : </strong>
                        <br>    
                        @if ($player->profile)
                            <img src="/storage/player_profile/{{ $player->profile }}" height="150px" width="150px" class="rounded-circle" >
                        @else
                            <p>No image found</p>
                        @endif
                    </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Sports Name  : </strong>
                            {{$player->sports}}                    
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Name : </strong>
                            {{$player->name}}                    
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Address : </strong>
                            {{$player->address}}                    
                        </div>
                    </div>
                    
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Phone Number : </strong>
                            {{$player->phone_no}}                    
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Email : </strong>
                            {{$player->email}}                    
                        </div>
                    </div>  
                    
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Gender  : </strong>
                            {{$player->gender}}                    
                        </div>
                    </div>
                           
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Physical Problem : </strong>
                            {{$player->physical_problem}}                    
                        </div>
                    </div> 

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Blood Group : </strong>
                            {{$player->blood_group}}                    
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Date of Birth : </strong>
                            {{$player->date_of_birth}}                    
                        </div>
                    </div> 
                    
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Your Age : </strong>
                            {{$player->age}}                    
                        </div>
                    </div>
                        
                    <div class="form-group text-right">
                    <div class="button">
                      <a href="/players" class="btn btn-warning mg-r-1">Okay</a>
                      
                    </div>
                    </div>
                </div><!-- table-responsive -->
                </div><!-- df-example -->
            </div><!-- card-body -->
            </div><!-- card -->

          
@endsection