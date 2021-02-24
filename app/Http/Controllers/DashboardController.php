<?php

namespace App\Http\Controllers;


use App\Models\User;
use App\Models\Book;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index(){
        $users=User::all()->count();
        $books=BooK::all()->count();
        return view('admin.dashboard',['signups'=> $users,'books'=>$books]);
    }
}
