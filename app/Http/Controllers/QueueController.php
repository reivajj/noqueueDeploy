<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class QueueController extends Controller
{
    public function index(Concept $concept)
    {
        return $concept->queues();
    }
 
    public function show(Concept $concept, Queue $queue)
    {
        return $queue;
    }
 
    public function store(Request $request,Concept $concept)
    {
        $queue = Queue::create($request->all());
        $queue->concept()->associate($concept);
        $concept->queues()->save($queue);
        return response()->json($queue, 201);
    }
 
    public function update(Request $request,Concept $concept,Queue $queue )
    { 
        $queue->update($request->all());
        //Esto creo que no seria necesario
       // $queue->concept()->associate($concept);
        //$concept->queues()->save($queue);
        return response()->json($queue, 200);
    }
 
    public function delete(Concept $concept,Queue $queue)
    {
        $queue->delete();
        //Hay que hacer algo con el concepto?
        return response()->json(null, 204);
    }
}
