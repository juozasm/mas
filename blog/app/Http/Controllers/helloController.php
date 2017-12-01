<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;

class helloController extends Controller
{
    public function createUser(){
        $user = new User();
        $user->password = Hash::make("petras");
        $user->name = "Petras";
        $user->email = "petras@antanas.lt";
        $user->save();

        return $user;
    }

    public function createSession(){
        session(['logged' => '2017-11-22']);

        return session('key');
    }

    public function readSession(){

        if (session()->exists('users')) {
            echo "sesija users egzistuoja<br />";
        }
        else{
            echo "sesija users neegzistuoja<br />";
        }

        if (session()->exists('key')) {
            echo "sesija key egzistuoja<br />";
        }
        else{
            echo "sesija key neegzistuoja<br />";
        }

        return session('key');
    }

    public function flash(){
        return redirect('/')->with('status', 'Laba diena!');
    }

    public function labasVakaras($name){
        echo "Labas vakaras, " . $name;
    }

    public function turis($x, $y, $z){
        $turis = $x * $y * $z;

        $data = array(
            'turis' => $turis,
            'aukstis' => $x
        );

        return view('hello', $data);
    }
}
