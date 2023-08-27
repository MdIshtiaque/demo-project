<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Division;

class DistrictController extends Controller
{

    public function index(Division $division)
    {
        $districts = $division->districts;

        return response()->json($districts);
    }
}
