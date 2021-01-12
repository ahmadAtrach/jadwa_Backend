<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductivityDir\SeasonResource;
use App\Http\Resources\ProductivityDir\SeasonResourceCollection;
use App\Models\Seasons;
use Illuminate\Http\Request;

class SeasonsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index():SeasonResourceCollection
    {
        return new SeasonResourceCollection(Seasons::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $seasons = Seasons::create($request->all());
        return  new SeasonResource($seasons);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Seasons  $seasons
     * @return \Illuminate\Http\Response
     */
    public function show(Seasons $seasons):SeasonResource
    {
        return new SeasonResource($seasons);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Seasons  $seasons
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request , Seasons $seasons)
    {
        $seasons->update($request->all());
        return new SeasonResource($seasons);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Seasons  $seasons
     * @return \Illuminate\Http\Response
     */
    public function destroy(Seasons $seasons)
    {
        $seasons->delete();
        return response()->json('Seasons is deleted successfully');
    }
}
