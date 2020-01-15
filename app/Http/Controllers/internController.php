<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\intern;
use App\Http\Resources\internResource;

class internController extends Controller
{
    public function index()
    {
        $interns = intern::get();
        
        return internResource::collection($interns);

    }

    public function show(intern $intern)
    {
        return new internResource($intern);
    }
}
