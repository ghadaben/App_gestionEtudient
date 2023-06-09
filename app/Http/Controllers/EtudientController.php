<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etudients;


class EtudientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Etudients = Etudients::all();
        return view('admin.home')->with('Etudients',$Etudients);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input =$request->all();
        Etudients::create($input);
        return redirect('home')->with('flsh_message','Etudient est ajouté');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($idEtudient)
    {
        $Etudients = Etudients::where('idEtudient', $idEtudient)->get();
        return view('admin.show')->with('Etudients',$Etudients);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($idEtudient)
    {
        $Etudients =  Etudients::where('idEtudient', $idEtudient)->get();
        return view('admin.edit')->with('Etudients',$Etudients);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idEtudient)
    {
        $Etudients = Etudients::where('idEtudient', $idEtudient)->get();
        $input = $request->all();
        $Etudients->update($input);
        return redirect('home')->with('flash_message','Etudient est Modifié');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Etudients::where('idEtudient', $id)->delete();
        return redirect('home')->with('flash_message','Etudient est Supprimé');
    }
}
