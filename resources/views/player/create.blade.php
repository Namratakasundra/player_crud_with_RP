@extends('layouts.admin')
@section('title','Create Player')
@section('content')
  

    <form  action="{{ isset($player) ? route('players.update', ['id' => $player->id]) : route('players.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
            <div class="card">
            <div class="card-body">
              <div class="table-responsive">
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-md-12">
                        <div class="form-group">
                            <label for="sports" ><strong>Sports Name  : </strong></label>
                            <select type="text" class="form-control" name="sports" value="sports">
                                <option>Select your sports</option>
                                <option value="Basketball" @if(isset($player) && ($player->sports == "Basketball")? $player->sports : null) selected @endif>Basketball</option>

                                <option value="Volleyball" @if(isset($player) && ($player->sports == "Volleyball")? $player->sports : null) selected @endif>Volleyball</option>

                                <option value="Football" @if(isset($player) && ($player->sports == "Football")? $player->sports : null) selected @endif>Football</option>

                                <option value="Cricket" @if(isset($player) && ($player->sports == "Cricket")? $player->sports : null) selected @endif>Cricket</option>

                                <option value="Badminton" @if(isset($player) && ($player->sports == "Badminton")? $player->sports : null) selected @endif>Badminton</option>

                                <option value="Hockey" @if(isset($player) && ($player->sports == "Hockey")? $player->sports : null) selected @endif>Hockey</option>
   
                            </select>
                        </div>
                        </div>
                    </div>
                        <Div class="row">
                            <div class="col-md-6">
                            <div class="form-group">
                                <label for="name"><strong>Name : </strong></label>
                                <input type="text" name = "name" id = "name" class="form-control" required placeholder="Your name" value="{{isset($player) ? $player->name : old('name') }}" >
                            </div>
                            </div>

                            <div class="col-md-6">
                            <div class="form-group">
                                <label for="address" ><strong>Address : </strong></label>
                                <input type="textarea" name = "address" id = "address" class="form-control" required placeholder="Your address" value="{{isset($player) ? $player->address : old('address') }}">
                            </div>
                            </div>
                        </Div>

                        <div class="row">
                            <div class="col-md-6">
                            <div class="form-group">
                                <label for="phone_no" ><strong>Phone Number : </strong></label>
                                <input type="text" name = "phone_no" id = "phone_no" class="form-control" required placeholder="Your phone number" value="{{isset($player) ? $player->phone_no : old('phone_no') }}">
                            </div>
                            </div>

                            <div class="col-md-6">
                            <div class="form-group">
                                <label for="email" ><strong>Email : </strong></label>
                                <input type="email" name = "email" id = "email" class="form-control" required placeholder="Your email address" value="{{isset($player) ? $player->email : old('email') }}">
                            </div>
                            </div>
                        </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="gender"><strong>Gender : </strong></label>
                                <br>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="gender" id="gender" value="male" @if(isset($player) && ($player->gender == "male")? $player->gender : null) checked @endif>Male
                                    </label>
                                    <label>                                        
                                        <input type="radio" name="gender" id="gender" value="female" @if(isset($player) && ($player->gender == "female")? $player->gender : null) checked @endif>Female
                                    </label>
                                    <div class="check"></div>
                                    <div class="inside"></div>
                                </div>
                            </div>
                        </div>  
                            
                        <div class="col-md-6" >
                            <div class="radio">
                                <label for="physical_problem"><strong>Physical Problem : </strong></label>
                                <br>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="physical_problem" id="physical_problem" value="yes" @if(isset($player) && ($player->physical_problem == "yes")? $player->physical_problem : null) checked @endif>Yes
                                    </label>
                                    <label>                                        
                                        <input type="radio" name="physical_problem" id="physical_problem" value="no" @if(isset($player) && ($player->physical_problem == "no")? $player->physical_problem : null) checked @endif>No
                                    </label>
                                    <div class="check"></div>
                                    <div class="inside"></div>
                                </div>
                            </div>
                        </div>

                    </div>
                            
                        <div class="row">   
                            <div class="col-md-4">
                            <div class="form-group">
                                <label for="blood_group" ><strong>Blood group : </strong></label>
                                <select class="form-control" name="blood_group" required >
                                    <option>Select your blood group</option>
                                    <option value="A+" @if(isset($player) && ($player->blood_group == "A+")? $player->blood_group : null) selected @endif>A+</option>
        
                                    <option value="A-" @if(isset($player) && ($player->blood_group == "A-")? $player->blood_group : null) selected @endif>A-</option>
        
                                    <option value="B+" @if(isset($player) && ($player->blood_group == "B+")? $player->blood_group : null) selected @endif>B+</option>
        
                                    <option value="B-" @if(isset($player) && ($player->blood_group == "B-")? $player->blood_group : null) selected @endif>B-</option>
        
                                    <option value="AB+" @if(isset($player) && ($player->blood_group == "AB+")? $player->blood_group : null) selected @endif>AB+</option>
        
                                    <option value="AB-" @if(isset($player) && ($player->blood_group == "AB-")? $player->blood_group : null) selected @endif>AB-</option>
        
                                    <option value="O+" @if(isset($player) && ($player->blood_group == "O+")? $player->blood_group : null) selected @endif>O+</option>
        
                                    <option value="O-" @if(isset($player) && ($player->blood_group == "O-")? $player->blood_group : null) selected @endif>O-</option>   
                                </select>
                            </div>
                            </div>
                        
                            <div class="col-md-4">
                            <div class="form-group">
                                <label for="date_of_birth" ><strong>Date of birth  : </strong></label>
                                <input type="date" name = "date_of_birth" id = "date_of_birth" class="form-control" required placeholder="Your date of birth" value="{{isset($player) ? $player->date_of_birth : old('date_of_birth') }}">
                            </div>
                            </div>
                        
                            <div class="col-md-4">
                            <div class="form-group">
                                <label for="age" ><strong>Your Age  : </strong></label>
                                <input type="text" name = "age" id = "age" class="form-control" required placeholder="Your age" value="{{isset($player) ? $player->age : old('age') }}">
                            </div>
                            </div>
                        </div>     
                        
                        <div class="row">
                            <div class="col-md-12">
                            <div class="form-group ">
                                <label for="profile"><strong>Upload your profile : </strong></label>
                                <input type="file" name="profile" id ="profile" class="form-control" >
                                <br> 
                                @if (isset($player->profile))
                                <img src="/storage/player_profile/{{ $player->profile }}" height="120px" width="120px" >
                                @else
                                    <p>No image found</p>
                                @endif 
                                                                
                            </div>
                            </div>
                        </div>
                    
                        
                    <div class="form-group text-right">
                    <div class="button">
                        <a href="/players" class="btn btn-warning mg-r-1">Cancel</a>
                        <button type="submit" class="btn btn-success">@if (isset($player->name))       
                            Update
                            @else 
                            Save
                            @endif</button>
                    </div>
                    </div>
              </div><!-- table-responsive -->
              </div><!-- df-example -->
            </div><!-- card-body -->
            </div><!-- card -->
    </form>
@endsection

               