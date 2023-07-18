<?php

namespace App\Http\Controllers;

use App\Models\Stagiaire;
use Illuminate\Http\Request;

class StagiaireController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stagiaires = Stagiaire::all();
        return view('stagiaires.index', ['stagiaire'=>$stagiaires]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('stagiaires.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nom'=>'required | string | max:100',
            'prenom'=>'required | string | max:100',
            'email'=>'required | email',
            'photo'=>'required | image',
            'dateNaissance'=>'required | date'
        ]);

        $photo = $request->file('photo')->store('public');

        $stagiaire = new Stagiaire();
        $stagiaire->nom = $request->nom;
        $stagiaire->prenom = $request->prenom;
        $stagiaire->email = $request->email;
        $stagiaire->photo = $photo;
        $stagiaire->dateNaissance = $request->dateNaissance;
        $stagiaire->save();

        $data['photo'] = $photo;
        Stagiaire::create($data);

        return redirect()->route('stagiaires.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $stagiaire = Stagiaire::find($id);
        return view('stagiaires.show', ['stagiaire'=>$stagiaire]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $stagiaire = Stagiaire::find($id);
        return view('stagiaires.edit', ['stagiaire'=>$stagiaire]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'nom'=>'required | string | max:100',
            'prenom'=>'required | string | max:100',
            'email'=>'required | email',
            'photo'=>'required | image',
            'dateNaissance'=>'required | date'
        ]);

        $photo = $request->file('photo')->store('public');

        $stagiaire = Stagiaire::find($id);
        $stagiaire->nom = $request->nom;
        $stagiaire->prenom = $request->prenom;
        $stagiaire->email = $request->email;
        $stagiaire->photo = $photo;
        $stagiaire->dateNaissance = $request->dateNaissance;
        $stagiaire->save();

        $data['photo'] = $photo;
        Stagiaire::create($data);

        return redirect()->route('stagiaires.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $stagiaire = Stagiaire::find($id);
        $stagiaire->delete();
        
        return redirect()->route('stagiaires.index');
    }
}
