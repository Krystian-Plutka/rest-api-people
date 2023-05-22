<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\People;
use App\Http\Requests\V1\StorePeopleRequest;
use App\Http\Requests\V1\UpdatePeopleRequest;
use App\Http\Controllers\Controller;
use App\Http\Resources\V1\PeopleResource;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PeopleController extends Controller
{
    
    public function index()
    {
        return People::all();
    }

    public function store(StorePeopleRequest $request)
    {
        return new PeopleResource(People::create($request->all()));
    }

    public function show(People $people)
    {
        return new PeopleResource($people);
    }

    public function update(UpdatePeopleRequest $request, People $people)
    {
       $people->update($request->all()); 
       
       return [
          "status" => 1,
          "people" => $people,
          "msg" => "Blog updated"
       ];

    }

    public function destroy(People $people)
    {
        $people->delete();
        return [
            "status" => 1,
            "data" => $people,
            "msg" => "Deleted"
        ];
    }
}
