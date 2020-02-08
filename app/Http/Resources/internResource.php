<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class internResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
         return [
             'id' => $this->id,
             'uid' => $this->uid,
            'name' => $this->name,
            'email' => $this->email,
            'startdate' => $this->start_date,
            'enddate' => $this->end_date,
            'duration' => $this->duration,
            'project' => $this->projects,
            'tech' => $this->technology,
            'Qrcode' => $this->Qrcode,
        ];
    }
}
