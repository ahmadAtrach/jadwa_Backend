<?php

namespace App\Http\Controllers;

use App\Http\Resources\AboutTheBusinessDir\AboutTheBusinessResource;
use App\Http\Resources\AboutTheBusinessDir\AboutTheBusinessResourceCollection;
use App\Models\AboutTheBusiness;
use App\Models\Fulltimer;
use App\Models\ListofEquipment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class AboutTheBusinessController extends Controller
{
    public function show(AboutTheBusiness $aboutTheBusiness):AboutTheBusinessResource{
        return new AboutTheBusinessResource($aboutTheBusiness);
    }
    public function index():AboutTheBusinessResourceCollection{
        return new AboutTheBusinessResourceCollection(AboutTheBusiness::all());
    }
    public function store(Request $request)
    {
        //to validate
        $aboutTheBusiness = AboutTheBusiness::create($request->all());
        foreach ($request->listOfEquipments as $list){
            $list['about_the_businesses_id'] = $aboutTheBusiness->id;
            ListofEquipment::create($list);
        }
        foreach ($request->fulltimers as $list){
            $list['about_the_businesses_id'] = $aboutTheBusiness->id;
            Fulltimer::create($list);
        }
        return new AboutTheBusinessResource($aboutTheBusiness);
    }
    public function update(AboutTheBusiness $aboutTheBusiness, Request $request):AboutTheBusinessResource{
        $aboutTheBusiness -> update($request->all());
        return new AboutTheBusinessResource($aboutTheBusiness);
    }
    public function destroy(AboutTheBusiness $aboutTheBusiness){
        $aboutTheBusiness -> delete();
        return response()->json('user is deleted successfully');
    }

}
