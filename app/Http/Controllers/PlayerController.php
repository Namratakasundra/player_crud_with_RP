<?php

namespace App\Http\Controllers;
use App\Player;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        //Show all players from the database and return to view
        $players = Player::paginate(5);
        return view('player.index',['players'=>$players]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('player.create');
    }

    public function search_player(Request $request)
    {
        $search = $request->get('search');
        $players = Player::where('name','like','%'.$search.'%')->paginate(5);
        return view('player.index',['players'=>$players]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Persist the player in the database
        //form data is available in the request object
        $player = new Player();
        //input method is used to get the value of input with its
        //name specified
        $player->sports = $request->input('sports');
        $player->name = $request->input('name');
        $player->address = $request->input('address');
        $player->phone_no = $request->input('phone_no');
        $player->email = $request->input('email');
        $player->gender = $request->input('gender');
        $player->blood_group = $request->input('blood_group');
        $player->date_of_birth = $request->input('date_of_birth');
        $player->age = $request->input('age');
        $player->physical_problem = $request->input('physical_problem');
        
        if($request->hasfile('profile'))
        {
            $file = $request->file('profile');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.' .$extension;
            $file->move('storage/player_profile',$filename);
            $player->profile = $filename;
        }
        else
        {
        }
        $player->save(); //persist the data 
        \Toastr::success('player created successfully', '', ["positionClass" => "toast-top-center"]);       
        return redirect()->route('player.index');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $player = Player::find($id);
        return view('player.show',compact('player'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Find the player
        $player = Player::find($id);
        return view('player.create',['player'=> $player]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Retrieve the player and update
        $player = Player::find($id);
        $player->sports = $request->input('sports');
        $player->name = $request->input('name');
        $player->address = $request->input('address');
        $player->phone_no = $request->input('phone_no');
        $player->email = $request->input('email');
        $player->gender = $request->input('gender');
        $player->blood_group = $request->input('blood_group');
        $player->date_of_birth = $request->input('date_of_birth');
        $player->age = $request->input('age');
        $player->physical_problem = $request->input('physical_problem');

        if($request->hasfile('profile'))
        {
            $file = $request->file('profile');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.' .$extension;
            $file->move('storage/player_profile/',$filename);
            $player->profile = $filename;
        }
        else
        {
        }
        
        $player->save(); //persist the data 
        \Toastr::success('Player updated successfully', '', ["positionClass" => "toast-top-center"]);       
        return redirect()->route('player.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Retrieve the player
        $player = Player::find($id);
        //delete
        $player->delete();
        \Toastr::success('Deleted successfully', '', ["positionClass" => "toast-top-center"]);
        return redirect()->route('player.index');
    }
}
