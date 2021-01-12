<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductivityDir\ProductivityResource;
use App\Http\Resources\ProductivityDir\ProductivityResourceCollection;
use App\Models\Productivity;
use App\Models\Seasons;
use Illuminate\Http\Request;

class ProductivityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index():ProductivityResourceCollection
    {
        return new ProductivityResourceCollection(Productivity::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $productivity = Productivity::create($request->all());
        foreach ($request->seasons as $list){
            $list['honey_productivity_id'] = $productivity->id;
            Seasons::create($list);
        }
        return  new ProductivityResource($productivity);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  Productivity $productivity
     * @return \Illuminate\Http\Response
     */
    public function show(Productivity $productivity):ProductivityResource
    {
        return  new ProductivityResource(($productivity));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  Productivity $productivity
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Productivity $productivity)
    {
        $productivity -> update($request->all());
        return new ProductivityResource($productivity);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  Productivity $productivity
     * @return \Illuminate\Http\Response
     */
    public function destroy(Productivity $productivity)
    {
        $productivity->delete();
        return response()->json("Productivity deleted successfully ");
    }
}
