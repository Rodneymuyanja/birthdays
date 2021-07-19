<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\friends;
use Illuminate\Http\Request;
use App\Http\Resources\FriendsResource;
use Illuminate\Support\Facades\Validator;

class FriendsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $friends = friends::all();
        //return response(['friends' => FriendsResource::collection($friends), 'message'=>'retrieved successfully']);
        return response()->json($friends, 200);
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
        $data = $request->all();
        
       /* $validator = Validator::make($data, [
            'name' => 'required|max:255',
            'comments'  => 'required|max:255',
            'birthday' => 'required|max:255', 
            'pets'  => 'required|max:255',
            'gifts' => 'required|max:255',
            'cake' => 'required|max:255',
            'music' => 'required|max:255',
            'movies' => 'required|max:255',
            'places' => 'required|max:255'
        ]);

        if ($validator->fails()) {
            return response(['error'=>$validator->errors()]);
        }*/

        $friends = friends::create($data);

        return response(['friends' => new FriendsResource($friends), 'message'=>'done creating'], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\friends  $friends
     * @return \Illuminate\Http\Response
     */
    public function show(friends $friends)
    {
        //
        //return $friends::find($friends);
        return response(['friends' => new FriendsResource($friends), 'message'=>'done retrieving'], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\friends  $friends
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, friends $friends)
    {
        //
        $friends->update($request->all());
        return response()->json($friends,200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\friends  $friends
     * @return \Illuminate\Http\Response
     */
    public function destroy(friends $friends)
    {
        //
        $friends->delete();
        return response(['message'=>'deleted']);
    }
}
