<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         $rooms = Room::paginate(5); // DB::table("rooms")->get() //get data from rooms table
        return view("room.index", compact("rooms")); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $rooms = Room::pluck("type");
        return view("room.create", compact("rooms"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validated_data = $request->validate([
            'type' => 'required|min:5',
            'rooms'  => 'required|min:1',
           /* 'category_id'   => 'required'*/
        ]);
        Room::create([
            'type' => $validated_data['type'],
            'rooms'  => $validated_data['rooms'],
            /*'category_id'   => $validated_data['category_id'],
            'user_id'   => \Auth::id()*/
        ]);
        return redirect()->route("rooms.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
       /* $room = Room::findOrFail($id);
        var_dump($room);*/
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $room = Room::findOrFail($id);
        return view("room.edit", compact("room"));
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
        //
        $validated_data = $request->validate([
        'type' => 'required|min:5',
        'rooms'  => 'required|min:1',
        

           /* 'category_id'   => 'required'*/
        ]);

         Room::where('id',$id)->update(['type'=>$request->type,'rooms'=>$request->rooms]);
        return redirect()->route("rooms.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // return redirect()->route("rooms.index");
        $room = Room::findOrFail($id);
        // $room->delete();
        $room->forceDelete();
            return redirect()->route("rooms.index");
    }
}
