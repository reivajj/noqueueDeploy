<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Concept;
use App\Queue;

class ConceptsController extends Controller
{
    public function index()
    {
        return Concept::all();
    }
 
    public function show(Concept $concept)
    {
        return $concept;
    }
 
    public function store(Request $request)
    {
        $concept = Concept::create($request->all());
 
        return response()->json($concept, 201);
    }
 
    public function update(Request $request, Concept $concept)
    {
        $concept->update($request->all());
 
        return response()->json($concept, 200);
    }
 
    public function delete(Concept $concept)
    {
        $concept->delete();
 
        return response()->json(null, 204);
    }

    public function getAllQueues(Concept $concept)
    {
        return $concept->queues()->get();
    }

    public function showQueue(Concept $concept, Queue $queue)
    {
        return $queue;
    }
 
    public function storeQueue(Request $request,Concept $concept)
    {
        $queue = Queue::create($request->all());
        $queue->concept()->associate($concept);
        $concept->queues()->save($queue);
        return response()->json($queue, 201);
    }
 
    public function updateQueue(Request $request,Concept $concept,Queue $queue )
    { 
        $queue->update($request->all());
        //Esto creo que no seria necesario
       // $queue->concept()->associate($concept);
        //$concept->queues()->save($queue);
        return response()->json($queue, 200);
    }
 
    public function deleteQueue(Concept $concept,Queue $queue)
    {
        $queue->delete();
        //Hay que hacer algo con el concepto?
        return response()->json(null, 204);
    }
    
}
