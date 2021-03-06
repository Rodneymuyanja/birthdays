<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\friends;
use App\userfriends;
use Auth;
use Illuminate\Support\Facades\DB;

class FriendsController extends Controller
{

    protected $name; 

    public function getFriends(){
        $friends = array();
        $friendDetails = array();
        $er = array();

        $username = Auth::user()->name;

        $friends = userfriends::select('friends')->where('user', $username)->get()->toArray();

       
        $c = 1;
        foreach($friends as $friend) {
           
            $friendDetails = friends::all()->where('name', $friend['friends']);
            
            array_push($er, $friendDetails);
            $c++;
        }

        $k = 1;
       

        return view('friends', compact('er','friendDetails','c'));
    }


    public function addFriend(Request $request){
        $friend      = new friends;
        $friend->name = $request->name;
        $friend->birthday = $request->birthday;
        $friend->comments = $request->comments;

        $friend->save();

        $this->addUserAndFriend($request);
        //setting global $name to name
        $this->name = $this->setName($request);

        return redirect()->back();
        
    }

    public function editfriend(Request $request){

        $fields = [
            'pets'=>$request->pets,
            'cake'=>$request->cake,
            'places'=>$request->places,
            'email' => $request->email,
            'message'=>$request->message, 
            'music'=>$request->music,
            'movies'=>$request->movies,
            'gifts'=>$request->gifts,
        ];

        $nonULLs = Array();

        foreach($fields as $column => $value) {
            if ($value != ""){
                $nonULLs[$column] = $value;
            }
        }

        DB::table('friends')->where('name', $request->name)->update($nonULLs);
        
        return redirect()->intended('friends');
    }

    public function getFriendsEdit($name) {
        return view('editfriend', compact('name'));
    }

    /*updating the userandfriends table*/
    protected function addUserAndFriend(Request $request){
        $username = Auth::user()->name;
        $friendname = $request->name;

        $userAndfriend = new userfriends;

        $userAndfriend->user = $username;
        $userAndfriend->friends = $friendname;

        $userAndfriend->save();
    }

    /**setting the name */
    protected function setName(Request $request){
        $name = $request->name;
        return $name;
    }

    protected function getName(){
        return $this->name;
    }

    /**API methods */

    public function index() {
        $friends = friends::all();

        
    }
}
