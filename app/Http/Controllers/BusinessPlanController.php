<?php

namespace App\Http\Controllers;

use App\Http\Resources\BusinessPlanDir\BusinessPlanResourceCollection;
use App\Models\BusinessPlan;
use Illuminate\Http\Request;

class BusinessPlanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index():BusinessPlanResourceCollection
    {
        return new BusinessPlanResourceCollection(BusinessPlan::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BusinessPlan  $businessPlan
     * @return \Illuminate\Http\Response
     */
    public function show(BusinessPlan $businessPlan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BusinessPlan  $businessPlan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BusinessPlan $businessPlan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BusinessPlan  $businessPlan
     * @return \Illuminate\Http\Response
     */
    public function destroy(BusinessPlan $businessPlan)
    {
        //
    }
}
