<?php

namespace App\Imports;

use App\Models\Course;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Str;

class CoursesImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {

        return new Course([
            //
                'name'     => $row['name'],
                'slug'    => Str::slug($row['name'], '-'),
                'overview' => $row['overview'],
                'requirement' => $row['requirement'],
                'subject' => $row['subject'],
                'laval' => $row['level'],
                'destination' => $row['destination'],
                'fees' => $row['fees'],
                'description' => $row['description'],
                'currency_sym' => $row['currency_sym'],
                'university_id' => $row['university_id'],
        ]);

        // $validated = $request->validate([
        //     'name' => 'required',
        //     'fee' => 'required|numeric',
        //     'overview' => 'required',
        //     'requirement' => 'required',
        //     'subject' => 'required',
        //     'level' => 'required',
        //     'destination' => 'required',
        //     'fees' => 'required',
        //     'university_id' => 'required',
        // ]);
        // $validated['slug']=Str::slug($request->name, '-');
        // $validated['laval']=$request->level;
        // $validated['description']=" ";
        // $validated['currency_sym']="$";
    }
}
