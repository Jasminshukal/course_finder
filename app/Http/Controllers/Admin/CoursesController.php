<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\University;
use Illuminate\Support\Str;

class CoursesController extends Controller
{
    public function index()
    {
        return view('admin.Courses.index', [
            'course' => Course::paginate(10),
        ]);
    }

    public function add()
    {
        $uni=University::all();
        $cou=new Course();
        return view('admin.Courses.add',compact('uni','cou'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'fee' => 'required|numeric',
            'overview' => 'required',
            'requirement' => 'required',
            'subject' => 'required',
            'level' => 'required',
            'destination' => 'required',
            'fees' => 'required',
            'university_id' => 'required',
        ]);
        $validated['slug']=Str::slug($request->name, '-');
        $validated['laval']=$request->level;
        $validated['description']=" ";
        $validated['currency_sym']="$";

        Course::create($validated);
        return redirect(route('courses'))->with('success','Application created successfully!');


    }

    public function edit($id,Request $request)
    {
        $cou=Course::find($id);
        $uni=University::all();
        return view('admin.Courses.edit',compact('cou','uni'));
    }
}
