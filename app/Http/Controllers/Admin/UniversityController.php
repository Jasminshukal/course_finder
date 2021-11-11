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
}
