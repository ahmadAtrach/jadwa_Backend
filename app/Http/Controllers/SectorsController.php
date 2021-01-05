<?php

namespace App\Http\Controllers;

use App\Http\Resources\SectorDir\SectorResource;
use App\Http\Resources\SectorDir\SectorResourceCollection;
use App\Models\Sector;
use Illuminate\Http\Request;

class SectorsController extends Controller
{
    public function show(Sector $sector):SectorResource{
        return new SectorResource($sector);
    }
    public function index():SectorResourceCollection {
        return new SectorResourceCollection(Sector::paginate());
    }
    public function store(Request  $request){
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'icon' => 'required',
        ]);
        $sector = Sector::create($request->all());
        return new SectorResource($sector);
    }
    public function update(Sector $sector, Request $request):SectorResource{
        $sector -> update($request->all());
        return new SectorResource($sector);
    }
    public function destroy(Sector $sector){
        $sector -> delete();
        return response()->json('sector is deleted successfully');
    }
}
