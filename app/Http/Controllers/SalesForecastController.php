<?php

namespace App\Http\Controllers;

use App\Http\Resources\SalesDir\SalesForecastResource;
use App\Http\Resources\SalesDir\SalesForecastResourceCollection;
use App\Models\Products;
use App\Models\SalesForecast;
use Illuminate\Http\Request;

class SalesForecastController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index():SalesForecastResourceCollection
    {
        return new SalesForecastResourceCollection(SalesForecast::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $SalesForecast = SalesForecast::create($request->all());
        foreach ($request->products as $list){
            $list['sales_forecasts_id'] = $SalesForecast->id;
            Products::create($list);
        }
        return  new SalesForecastResource($SalesForecast);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(SalesForecast  $salesForecast):SalesForecastResource
    {
        return  new SalesForecastResource($salesForecast);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SalesForecast $salesForecast)
    {
        $salesForecast -> update($request->all());
        return new SalesForecastResource($salesForecast);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(SalesForecast  $salesForecast)
    {
        $salesForecast->delete();
        return response()->json("SalesForecast deleted successfully ");
    }
}
