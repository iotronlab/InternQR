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
        QrCode::size(800)
                    ->format('png')
                    ->generate('https://cert.iotronlabs.com/intern/'.$intern->uid,public_path('images/qrcode'.$intern->uid.'.png'));

        $intern->setAttribute('Qrcode','images/qrcode'.$intern->uid.'.png');
        return new internResource($intern);
    }

    // public function getDetails(intern $intern)
    // {

    //     return QrCode::size(300)->generate('https://cert.iotronlabs.com/intern/'.$intern->uid);
    // }
}
