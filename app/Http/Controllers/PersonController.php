<?php

namespace App\Http\Controllers;
use App\Http\Resources\PersonResource;
use App\Http\Resources\PersonResourceCollection;

use App\Models\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function show(Person $person):PersonResource{
        return new PersonResource($person);
    }
    public function index():PersonResourceCollection {
        return new PersonResourceCollection(Person::all());
    }
    public function store(Request  $request){
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'city' => 'required',
        ]);
        $person = Person::create($request->all());
        return new PersonResource($person);
    }
    public function update(Person $person, Request $request):PersonResource{
        $person -> update($request->all());
        return new PersonResource($person);
    }
    public function destroy(Person $person){
        $person -> delete();
        return response()->json('user is deleted successfully');
    }

}
