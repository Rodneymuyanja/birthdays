<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\friends;
use App\userfriends;
use Auth;


class FriendsController extends Controller
{
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
       /* foreach($er as $fd) {
            echo("*******");
            
            foreach($fd as $f){
                print_r($f['name']);
            }
           
            $k++;
        }*/

        return view('friends', compact('er','friendDetails'));
    }
}
