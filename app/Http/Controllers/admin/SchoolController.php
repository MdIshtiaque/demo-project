<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\RequestSchool;
use App\Models\Division;
use App\Models\School;
use Exception;
use Illuminate\Http\Request;

class SchoolController extends Controller
{
    public function index()
    {
        $divisions = Division::orderBy('id', 'DESC')->get();
        $schools = School::with('division:id,name', 'district:id,name')->orderBy('id', 'DESC')->get();
        return view("admin.pages.schools", ['divisions' => $divisions, 'schools' => $schools]);
    }

    public function store(RequestSchool $request)
    {
        try {
            School::create($request->validated());
            toastr()->addSuccess('New School created successfully');
        }catch(Exception $exception)
        {
            toastr()->addError('Something went wrong');
        }
        return back();
    }
}
