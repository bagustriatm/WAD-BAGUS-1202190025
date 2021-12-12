<?php

namespace App\Http\Controllers;
use App\Models\vaccines;
use Illuminate\Http\Request;


class VaccinesController extends Controller
{
    public function index()
    {
        $dataVaccine = vaccines::all();
        return view('vaccine',[
            'title' => 'Vaccine'
        ], compact('dataVaccine'));
    }


    public function create()
    {
        return view('form-vaccine',[
            'title' => 'Vaccine'
        ]);
    }

    public function store(Request $request)
    {
//        ddd($request->all());
        vaccines::create([
            'name' => $request->vaccineName,
            'price'=> $request->price,
            'description' => $request->desc,
            'image'=> $request->file('image')->store('images/vaccines')
            ]);

            return redirect('vaccine');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $editdata= vaccines::findorfail($id);

        return view('edit-vaccine','edit-vaccine', compact('editdata')) ;
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        $vac = vaccines::findorfail($id);
        $vac->delete();
        return redirect('vaccine');
    }
}
