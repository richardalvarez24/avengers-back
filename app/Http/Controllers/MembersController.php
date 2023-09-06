<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Member;

class MembersController extends Controller
{
    /* Obtiene todos los miembros del equipo*/
    public function index()
    {
        $members = Member::all();
        return response()->json($members); 
    }

    /* Guarda un miembro de equipo*/
    public function store(Request $request)
    {
        $members = new Member([
            'name' => $request->input('name'),
            'age' => $request->input('age'),
            'description' => $request->input('description'),
        ]);
        $members->save();
        return response()->json('Member created!');
    }

    /* Obtiene un miembro de equipo*/
    public function show($id)
    {
        $contact = Member::find($id);
        return response()->json($contact);
    }

    /* Actualiza los datos de un miembro de equipo*/
    public function update(Request $request, $id)
    {
       $members = Member::find($id);
       $members->update($request->all());
       return response()->json('Member updated!');
    }

    /* Elimina los datos de un miembro de equipo*/
    public function destroy($id)
    {
        $members = Member::find($id);
        $members->delete();
        return response()->json('Member deleted!');
    }
}
