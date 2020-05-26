<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Turn;

class TurnsController extends Controller
{
    public function index()
    {
        return Turn::all();
    }
 
    public function show(Turn $turn)
    {
        return $turn;
    }
 
    public function store(Request $request)
    {
        $turn = Turn::create($request->all());
 
        return response()->json($turn, 201);
    }
 
    public function update(Request $request, Turn $turn)
    {
        $turn->update($request->all());
 
        return response()->json($turn, 200);
    }
 
    public function delete(Turn $turn)
    {
        $turn->delete();
 
        return response()->json(null, 204);
    }
}
