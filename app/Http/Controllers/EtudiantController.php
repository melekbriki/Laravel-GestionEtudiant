<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use App\Models\Etudiant;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    public function index()
    {
       $liste = Etudiant::with('classes')->orderBy('nom', 'asc')->get(); // Eager loading the classes relationship
       return view('etudiant', compact('liste'));
    }
    public function create()
    {
      $classes=Classe::all();
      return view('create',compact('classes'));
    }
    public function store( Request $request)
    {
      $request->validate([
        'nom'=>'required',
        'prenom'=>'required',
        'classes_id'=>'required'


      ]);
      Etudiant::create($request->all());
      return redirect()->route('etudiant')
      ->with('success','Student created successfully.');
    }

    public function edit(Etudiant $etudiant)
    {
        $classes = Classe::all();
        return view('edit', compact('etudiant', 'classes')); // Corrected line
    }

    public function update(Request $request, Etudiant $etudiant)
    {
        $request->validate([
            'nom'=>'required',
            'prenom'=>'required',
            'classes_id'=>'required'
        ]);
        $etudiant->update([
            'nom'=>$request->nom,
            'prenom'=>$request->prenom,
            'classes_id'=>$request->classes_id,

        ]);
        return redirect()->route('etudiant')
        ->with('success', 'Student updated successfully.');

    }

    public function delete(Etudiant $etudiant)
    {
        $etudiant-> delete();
        return redirect()->route('etudiant')
        ->with('success', 'Student deleted successfully.');

    }

    public function show(Etudiant $etudiant)
    {
        return view('show',compact('etudiant'));
    }
}
