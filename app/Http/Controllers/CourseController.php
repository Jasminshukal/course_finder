<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
  public function index()
  {

  }

  public function search(Request $request)
  {
    return view('search');
  }

}
