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

    public function add()
    {
        return view('admin.University.add',[
            'uni' => new University(),
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'address' => 'required',
        ]);
        University::create($validated);
        return redirect(route('University'));
    }

    public function edit($id,Request $request)
    {
        return view('admin.University.edit', [
            'uni' => University::find($id),
        ]);
    }

    public function update(Request $request,$id)
    {
        $validated = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'address' => 'required',
        ]);
        // assessment::where("id",$request->id)->update(["status"=>$request->status]);
        University::where('id',$id)->update($validated);
        return redirect(route('University'))->with('success','University Update successfully!');
    }
}
