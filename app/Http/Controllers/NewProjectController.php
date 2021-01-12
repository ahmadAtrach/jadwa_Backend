<?php

namespace App\Http\Controllers;

use App\Http\Resources\NewProjectDir\NewProjectResource;
use App\Http\Resources\NewProjectDir\NewProjectResourceCollection;
use App\Models\NewProject;
use Illuminate\Http\Request;

class NewProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index():NewProjectResourceCollection
    {
        return new NewProjectResourceCollection(NewProject::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newProject = NewProject::create($request->all());
        return new NewProjectResource($newProject);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\NewProject  $newProject
     * @return \Illuminate\Http\Response
     */
    public function show(NewProject $newProject):NewProjectResource
    {
        return new NewProjectResource($newProject);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\NewProject  $newProject
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NewProject $newProject):NewProjectResource
    {
        $newProject->update($request->all());
        return new NewProjectResource($newProject);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NewProject  $newProject
     * @return \Illuminate\Http\Response
     */
    public function destroy(NewProject $newProject)
    {
        $newProject->delete();
        return response()->json("NewProject is deleted successfully");
    }
}
