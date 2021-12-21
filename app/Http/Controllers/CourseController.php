<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CourseController extends Controller
{
  public function index(Request $request)
  {
    //$subject = collect(config('jess.categories'));

    $subject = Course::limit(8)->get();
    //dd($newCollection);

    return view('welcome',compact('request','subject'));
  }

  public function search(Request $request)
  {
    $courese=Course::where('status','Active');

    if($request->has('destination') && $request->destination != NULL)
    {
        $courese->where('destination',$request->destination);
    }

    if ($request->has('level') && $request->level != NULL) {
        $courese->where('level',$request->level);
    }

    if ($request->has('Subject') && $request->Subject != NULL) {
        $courese->where('subject',$request->Subject);
    }

    if ($request->has('courses') && $request->courses != NULL) {
        $courese->where('name','like','%'.$request->courses . '%');
        // $courese->where('courses', $request->courses);
    }
    return view('search',['courese'=>$courese->paginate(9),'request'=>$request]);
  }

  public function detail($slug,Request $request)
  {
    $course = Course::where('slug',$slug)->firstOrFail();
    return view('detail',compact('course','request'));
  }

}
