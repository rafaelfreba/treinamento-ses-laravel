<?php

namespace App\Http\Services;

use App\Models\County;

class ServicesProvider
{
    static public function counties()
    {
        return County::get();
    }
}
