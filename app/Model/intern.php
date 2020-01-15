<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class intern extends Model
{
     public function getRouteKeyName()
    {
            return 'uid';
    }
}
