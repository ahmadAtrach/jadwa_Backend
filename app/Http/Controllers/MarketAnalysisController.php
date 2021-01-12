<?php

namespace App\Http\Controllers;

use App\Http\Resources\MarketAnalysis\MarketAnalysisResource;
use App\Http\Resources\MarketAnalysis\MarketAnalysisResourceCollection;
use App\Models\Competitors;
use App\Models\MarketAnalysis;
use Illuminate\Http\Request;

class MarketAnalysisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index():MarketAnalysisResourceCollection
    {
        return new MarketAnalysisResourceCollection(MarketAnalysis::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $marketAnalysis = MarketAnalysis::create($request->all());
        foreach ($request->competitors as $list){
            $list['market_analyses_id'] = $marketAnalysis->id;
            Competitors::create($list);
        }
        return new MarketAnalysisResource($marketAnalysis);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MarketAnalysis  $marketAnalysis
     * @return \Illuminate\Http\Response
     */

    public function show(MarketAnalysis $marketAnalysis):MarketAnalysisResource{
        return new MarketAnalysisResource($marketAnalysis);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MarketAnalysis  $marketAnalysis
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MarketAnalysis $marketAnalysis)
    {
        $marketAnalysis->update($request->all());
        return new MarketAnalysisResource($marketAnalysis);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MarketAnalysis  $marketAnalysis
     * @return \Illuminate\Http\Response
     */
    public function destroy(MarketAnalysis $marketAnalysis)
    {
        $marketAnalysis->delete();
        return response()->json("MarketAnalysis deleted successfully");
    }
}
