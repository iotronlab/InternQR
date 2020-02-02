<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class intern extends Model

{ use Searchable;
     public function getRouteKeyName()
    {
            return 'uid';
    }
      public function searchableAs()
    {
        return 'uid';
    }
}
