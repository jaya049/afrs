<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\AddFlight;
use App\Models\Airport;

class AirlineController extends Controller
{
    //
    function addflight(Request $req)
    {
        $data=new AddFlight;
        $data->airlinename=$req->airlinename;
        $data->departure=$req->departure;
        $data->arrival=$req->arrival;
        $data->date=$req->date;
        $data->dtime=$req->dtime;
        $data->atime=$req->atime;
        $data->seatcapacity=$req->seatcapacity;
        $data->business=$req->business;
        $data->economy=$req->economy;
        $data->first=$req->first;
        $data->bcost=$req->bcost;
        $data->ecost=$req->ecost;
        $data->fcost=$req->fcost;
        $query=$data->save();
        
        if($query)
        {
            return view('flightreg');
        }
        // if($query)
        // {
        //     return back()->with('success','successfully Added Flight Details');
        // }
        // else{
        //     return back()->with('fail','something went wrong');
        // } 
    }
    function addairport(Request $req)
    {
        $data=new Airport;
        $data->aname=$req->aname;
        $data->abbreviation=$req->abbreviation;
        $data->city=$req->city;
        $data->state=$req->state;
        $data->zipcode=$req->zipcode;
        $data->timezone=$req->timezone;
        $query=$data->save();
        if($query)
        {
            return redirect()->back();
        }
    }
    function viewairport()
    {
        $data=Airport::all();
        return view('airportdetails_view',['row'=>$data]);
    }
    function searchflight(Request $req)
    {
        $data=DB::table('add_flights')->where('departure', $req->departure)
                                    ->where('arrival', $req->arrival)
                                    ->get();
        if(!$data)
        {
            return redirect()->back();
        }
        else{
            return view('searchflightresult',['flights'=>$data]);


        }

    }
    function flightbook()
    {
        $data=Airport::all();
        return view('airportdetails_view',['row'=>$data]);
    }


    // public function index()
    // {
    //     $users = DB::table('users')->select('id','name','email')->get();
    //     Post::with('user:id,username')->get();
    //     return view('some-view')->with('users', $users);
    // }
    // function check(Request $req)
    // {
    //     $req->validate([
    //         'email'=>'required',
    //         'password'=>'required'
    //     ]);
    //     $userinfo=Auth::where('email','=',$req->email)->first();
    //     if(!$userinfo)
    //     {
    //         return back()->with('fail','Your email is not recognized!');
    //     }
    //     else{
    //         if(Hash::check($req->password,$userinfo->password))
    //         {
    //             $req->Session()->put('LoggedUser',$userinfo->id);
    //             return view('auth.dashboard');
    //         }
    //         else
    //         {
    //             return back()->with('fail','invalid password');
    //         }
    //     }
    // }

}
