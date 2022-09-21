<?php

namespace App\Http\Controllers;

use App\Models\FlightSchedule;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class PageController extends Controller
{
    public function welcome(){
        $data=[
            'name'=>'shreejesh raj joshi',
            'age'=>17
        ];
        return view ('welcome')->with($data);
    }


    public function create(){
        return view('flight');
    }

    public function store(Request $request){
        $Flight_booking_system = new FlightSchedule();
        $Flight_booking_system->date=$request->date;
        $Flight_booking_system->time=$request->time;
        $Flight_booking_system->flight_number=$request->flight_number;
        $Flight_booking_system->created_at=$request->createdat;
        $Flight_booking_system->updated_at=$request->updatedat;
        $filenameWithExt = $request->file('image')->getClientOriginalName();
        $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);
        $extension =  $request->file('image')->getClientOriginalExtension();
        $filenametostore= $filename."_".time().".".$extension;
        $img = Image::make($request->file('image'));
        $img-> save('storage/image'.$filenametostore);

        $Flight_booking_system->image= 'storage/image'.$filenametostore;


        $Flight_booking_system->save();
    }

    public function list(){
        $Flight_booking_system = FlightSchedule::get();
        return view();
    }


}









