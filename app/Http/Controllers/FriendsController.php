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

        echo("..............");
        print_r($friends);

        echo("...........");
        $c = 1;
        foreach($friends as $friend) {
            echo("kkkkkkk");
            print_r($friend);
            echo("kkkkkkkk");
            $friendDetails = friends::all()->where('name', $friend['friends']);
            echo($c);
            array_push($er, $friendDetails);
            $c++;
        }

        $k = 1;
        foreach($er as $fd) {
            echo("*******");
            
            foreach($fd as $f){
                print_r($f['name']);
            }
            echo("*******");
            echo($k);
            $k++;
        }

        return view('index', compact('er','friendDetails'));
    }
}
