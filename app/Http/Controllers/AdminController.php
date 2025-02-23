<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\salle;

class AdminController extends Controller
{
    public function index()
    {
        return view('AdminDashboard');
    }

    public function SalleIndex()
    {
        return view('SalleAdmin');
    }


    public function CreateSalle(Request $request)
    {
        $request->session()->put('id','2');
        salle::create([
            'name' => $request['name'],
            'Description' => $request['Description'],
            'Picture' => $request['Picture'],
            'capacité' => $request['capacité'],
            'Type' => $request['Type'],
        ]);

        return redirect('/admin/salle');
    }

    public function SalleRender()
    {
        $salles = salle::get();
        return view('SalleAdmin', compact('salles'));
    }

    public function DeleteSalle(Request $request)
    {
       $idsalle =  $request['id_delete'];
       $salle = salle::find($idsalle);
       $salle->delete();
       return redirect('/admin/salle');
    }

    public function Edit($id)
    {
        $salle = salle::find($id);
        return view('ModifierSalle', compact('salle'));
    }

    public function EditSalle(Request $request,$id)
    {
           
        $salle = salle::find($id);
        $salle->name = $request->input('name');
        $salle->Description = $request->input('Description');
        $salle->save();
        return redirect('/admin/salle/')->with('success', 'Item updated successfully');

    }
}
