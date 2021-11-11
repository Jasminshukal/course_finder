<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\University;
use App\Models\Course;

class UniversityController extends Controller
{
    public function index()
    {
        return view('admin.University.index', [
            'university' => University::paginate(10),
        ]);
    }

    public function edit($id,Request $request)
    {
        return view('admin.University.edit', [
            'uni' => University::find($id),
        ]);
    }

    public function update(Request $request)
    {
        # code...
    }
}
