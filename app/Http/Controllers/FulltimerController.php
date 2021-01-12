<?php

namespace App\Http\Controllers;

use App\Http\Resources\AboutTheBusinessDir\FulltimersResource;
use App\Http\Resources\AboutTheBusinessDir\FulltimersResourceCollection;
use App\Models\Fulltimer;
use Illuminate\Http\Request;

class FulltimerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index():FulltimersResourceCollection{
        return  new FulltimersResourceCollection(Fulltimer::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $fulltimer=Fulltimer::create($request->all());
        return new FulltimersResource($fulltimer);
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Fulltimer  $fulltimer
     * @return \Illuminate\Http\Response
     */
    public function show(Fulltimer $fulltimer):FulltimersResource{
        return new FulltimersResource($fulltimer);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Fulltimer  $fulltimer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fulltimer $fulltimer):FulltimersResource
    {
        $fulltimer -> update($request->all());
        return new FulltimersResource($fulltimer);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fulltimer  $fulltimer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fulltimer $fulltimer)
    {
        $fulltimer -> delete();
        return response()->json('Fulltimer is deleted successfully');
    }
}
