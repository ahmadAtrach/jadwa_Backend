<?php

namespace App\Http\Controllers;

use App\Http\Resources\AboutTheBusinessDir\ListOfEquipmentResource;
use App\Http\Resources\AboutTheBusinessDir\ListOfEquipmentResourceCollection;
use App\Models\ListofEquipment;
use Illuminate\Http\Request;

class ListofEquipmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index():ListOfEquipmentResourceCollection
    {
        return new ListOfEquipmentResourceCollection(ListofEquipment::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $listofEquipment=ListofEquipment::create($request->all());
        return new ListOfEquipmentResource($listofEquipment);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ListofEquipment  $listofEquipment
     * @return \Illuminate\Http\Response
     */
    public function show(ListofEquipment $listofEquipment):ListOfEquipmentResource
    {
        return new ListOfEquipmentResource($listofEquipment);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ListofEquipment  $listofEquipment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ListofEquipment $listofEquipment):ListOfEquipmentResource
    {
        $listofEquipment -> update($request->all());
        return new ListOfEquipmentResource($listofEquipment);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ListofEquipment  $listofEquipment
     * @return \Illuminate\Http\Response
     */
    public function destroy(ListofEquipment $listofEquipment)
    {
        $listofEquipment -> delete();
        return response()->json('listOfEquipments is deleted successfully');
    }
}
