<?php

namespace App\Http\Controllers;


use App\Http\Resources\PersonalinfoDir\PersonalInfoResource;
use App\Http\Resources\PersonalinfoDir\PersonalInfoResourceCollection;
use App\Models\PersonalInfo;
use Illuminate\Http\Request;

class PersonalInfoController extends Controller
{

    public function index():PersonalInfoResourceCollection {
        return new PersonalInfoResourceCollection(PersonalInfo::all());
    }
    public function show(PersonalInfo $personalInfo):PersonalInfoResource{
        return new PersonalInfoResource($personalInfo)  ;
    }
    public function store(Request  $request){
        $request->validate([
            'name' => 'required',
            'birthday' => 'required',
            'gender' => 'required',
            'martial_status' => 'required',
            'level_of_education' => 'required',
            'major' => 'required',
            'university' => 'required',
            'industry' => 'required',
            'years_of_experience' => 'required',
        ]);
        $personalInfo = PersonalInfo::create($request->all());
        return new PersonalInfoResource($personalInfo);
    }
    public function update(PersonalInfo $personalInfo, Request $request):PersonalInfoResource{
        $personalInfo -> update($request->all());
        return new PersonalInfoResource($personalInfo);
    }
    public function destroy(PersonalInfo $personalInfo){
        $personalInfo -> delete();
        return response()->json('PersonalInfo is deleted successfully');
    }
}
