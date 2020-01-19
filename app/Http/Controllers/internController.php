<?php

namespace App\Http\Controllers;

use App\Model\intern;
use Illuminate\Http\Request;
use App\Http\Resources\internResource;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

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

    public function getDetails(intern $intern)
    {

        return QrCode::size(300)->generate('http://localhost:8000/api/interns/'.$intern->uid);
    }
}
