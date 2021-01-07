<?php

namespace App\Http\Controllers;

use App\Http\Resources\AboutTheBusinessDir\AboutTheBusinessResource;
use App\Http\Resources\AboutTheBusinessDir\AboutTheBusinessResourceCollection;
use App\Models\AboutTheBusiness;
use App\Models\Fulltimers;
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
//        $request->validate([
//            'name' => 'required',
//            'birthday' => 'required',
//            'gender' => 'required',
//            'martial_status' => 'required',
//            'level_of_education' => 'required',
//            'major' => 'required',
//            'university' => 'required',
//            'industry' => 'required',
//            'years_of_experience' => 'required',
//        ]);
        $aboutTheBusiness = AboutTheBusiness::create($request->all());
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
