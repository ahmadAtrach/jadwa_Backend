<?php

namespace App\Http\Controllers;

use App\Http\Resources\AboutThePremisesDir\AboutThePremisesResource;
use App\Http\Resources\AboutThePremisesDir\AboutThePremisesResourceCollection;
use App\Models\AboutThePremises;
use Illuminate\Http\Request;

class AboutThePremisesController extends Controller
{ /**
 * Display a listing of the resource.
 *
 * @return \Illuminate\Http\Response
 */
    public function index():AboutThePremisesResourceCollection
    {
        return new AboutThePremisesResourceCollection(AboutThePremises::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $aboutThePremises = AboutThePremises::create($request->all());
        return  new AboutThePremisesResource($aboutThePremises);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AboutThePremises  $aboutThePremises
     * @return \Illuminate\Http\Response
     */
    public function show(AboutThePremises $aboutThePremises):AboutThePremisesResource
    {
        return new AboutThePremisesResource($aboutThePremises);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AboutThePremises  $aboutThePremises
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request , AboutThePremises $aboutThePremises)
    {
       $aboutThePremises->update($request->all());
       return new AboutThePremisesResource($aboutThePremises);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AboutThePremises  $aboutThePremises
     * @return \Illuminate\Http\Response
     */
    public function destroy(AboutThePremises $aboutThePremises)
    {
        $aboutThePremises->delete();
        return response()->json('AboutThePremises is deleted successfully');
    }
}
