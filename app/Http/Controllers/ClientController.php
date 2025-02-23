<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\salle;
use App\Models\resérvation;

class ClientController extends Controller
{
    public function index()
    {
        return view('DashboardClient');
    }

    public function SalleRender()
    {
        $salles = salle::get();
        // var_dump($salles);
        return view('DashboardClient', compact('salles'));
    }

    public function CheckoutReservation(Request $request)
    {
        // dd($request['id']);
      $infos = $request;
        // var_dump($request['selecttime']);
        return view('CheckoutReservation',compact('infos'));
    }

    public function CheckoutreservationSend(Request $request)
    {
        // dd($request);
        $salleid = $request->id;
        $date_time = $request->datetime;
        $select_time = $request->selecttime;
        $note = $request->note;

        $reservationcheck = resérvation::where('salle_id',$salleid)->where('reservation_date',$date_time)->exists();

        var_dump($reservationcheck);

        if($reservationcheck)
        {
            return redirect()->back()->with('error','Cette salle est déjà réservée pour cette période.');
        }
        else
        {
            resérvation::create(
                [
                    'Description' => $note,
                    'salle_id' => $salleid,
                    'client_id' => 2,
                    'reservation_date' => $date_time,
                    'reservation_time' => $select_time,
                    'status' => 'Pending',
                ]
                
                );
                return redirect('/confirmation');

        }

    }
    public function reservationlist()
    {
        return view('reservationlist');
    }
}
