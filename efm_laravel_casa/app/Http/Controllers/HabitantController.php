<?php

namespace App\Http\Controllers;

use App\Models\Habitant;
use App\Models\Ville;
use Illuminate\Http\Request;

class HabitantController extends Controller
{
    public function index()
    {
        $list = Habitant::all();
        return view("habitants.index", ["list" => $list]);
    }

    public function create()
    {
        $villes = Ville::all();
        return view("habitants.create", ["villes" => $villes]);
    }

    public function store(Request $request)
    {
        if($request->hasFile("photo")){
            $extension = $request->photo->extension();
            $path = $request->cin . "." . $extension;
            $request->photo->storeAs("public/" . $path);
        }
        $habitant = new Habitant();
        $habitant->cin = $request->cin;
        $habitant->nom = $request->nom;
        $habitant->prenom = $request->prenom;
        $habitant->ville_id = $request->ville_id;
        $habitant->photo = @$path;
        $habitant->save();

        return redirect("/habitants");
    }

    public function edit(Request $request ,$id)
    {
        $villes = Ville::all();
        $habitant = Habitant::find($id);
        return view("habitants.edit", ["habitant" => $habitant], ["villes" => $villes]);
    }

    public function update(Request $request)
    {
        if($request->hasFile("photo")){
            $extension = $request->photo->extension();
            $path = $request->cin . "." . $extension;
            $request->photo->storeAs("public/" . $path);
        }
        $habitant = Habitant::find($request->id);
        $habitant->cin = $request->cin;
        $habitant->nom = $request->nom;
        $habitant->prenom = $request->prenom;
        $habitant->ville_id = $request->ville_id;
        if(@$path){
            $habitant->photo = $path;
        }
        $habitant->save();

        return redirect("/habitants");
    }

    public function destroy($id)
    {
        Habitant::destroy($id);
        return redirect("/habitants");
    }
}
