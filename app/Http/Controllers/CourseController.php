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
    $courese=Course::where('status','Active');

    if($request->has('destination') && $request->destination != NULL)
    {
        $courese->where('destination', $request->destination);
    }

    if ($request->has('level') && $request->level != NULL) {
        $courese->where('laval', $request->level);
    }

    if ($request->has('Subject') && $request->level != NULL) {
        $courese->where('subject', $request->Subject);
    }

    if ($request->has('courses') && $request->courses != NULL) {
        $courese->where('name', 'like', '%' . $request->courses . '%');
        // $courese->where('courses', $request->courses);
    }
    // $users->get();
    return view('search',['courese'=>$courese->paginate(9),'request'=>$request]);
  }

  public function detail($slug,Request $request)
  {
    $course = Course::where('slug',$slug)->firstOrFail();
    return view('detail',compact('course','request'));
  }

}
