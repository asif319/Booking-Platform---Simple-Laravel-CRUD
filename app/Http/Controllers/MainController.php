<?php

namespace App\Http\Controllers;

use App\Listing;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
class MainController extends Controller
{
    public function getMainPage()
    {
        return view('layouts.dashboard.right-side-content');
    }

    public function getDashboard()
    {
//        $allListing = DB::table('listings')
//            ->join('users','listings.user_id' ,'=','users.id')
//            ->select('listings.*','users.name')
//            ->get();
//        return view('layouts.dashboard.main-dashboard')->with(['allListing'=>$allListing]);
//        return view('layouts.dashboard.main-dashboard');
        $allListing = DB::table('listings')
            ->join('users','listings.user_id' ,'=','users.id')
            ->select('listings.*','users.name')
            ->get();
        return view('layouts.dashboard.main-dashboard')->with(['allListing'=>$allListing]);

    }

}
