<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Diploma;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class DiplomaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $diploma=Diploma::all();        
        return view('admin.diploma.index',compact('diploma'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.diploma.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $course=New Diploma();
        $course->tag=$request->tag;
        $course->title=$request->title;        
        $slug = Str::slug($request->title);
        $course->slug = $slug;
        $course->sub_title=$request->sub_title;
        $course->description=$request->description;
        $course->h_student=$request->h_student;
        $course->workshop=$request->workshop;
        $course->trained=$request->trained;
        $course->explore_title=$request->explore_title;
        $course->explore_details=$request->explore_details;       
        $course->tab_description=$request->tab_description;
        $course->tab_outcomes=$request->tab_outcomes;
        $course->course_modal=$request->course_modal;        
        if (request()->banner) {
            $filename = rand(00,99) . '_' . time() . '.' . request()->banner->getClientOriginalExtension();
            request()->banner->move('uploads/diploma', $filename);
            $course->banner = $filename;
        } else {
            $course->banner = 'file';
        }
        $course->save();
        return redirect()->route('diploma.index')->with('success','Data Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $diploma=Diploma::find($id);
        return view('admin.diploma.edit',compact('diploma'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $diploma=Diploma::find($id);
        $diploma->tag=$request->tag;
        $diploma->title=$request->title;        
        $slug = Str::slug($request->title);
        $diploma->slug = $slug;
        $diploma->sub_title=$request->sub_title;
        $diploma->description=$request->description;
        $diploma->h_student=$request->h_student;
        $diploma->workshop=$request->workshop;
        $diploma->trained=$request->trained;
        $diploma->explore_title=$request->explore_title;
        $diploma->explore_details=$request->explore_details;       
        $diploma->tab_description=$request->tab_description;
        $diploma->tab_outcomes=$request->tab_outcomes;
        $diploma->course_modal=$request->course_modal;  
        if ($request->has('banner')) {
            $destination = 'uploads/diploma/' . $diploma->banner;
            if (File::exists($destination)) {
                File::delete($destination);
            }      
        if (request()->banner) {
            $filename = rand(00,99) . '_' . time() . '.' . request()->banner->getClientOriginalExtension();
            request()->banner->move('uploads/diploma', $filename);
            $diploma->banner = $filename;
        } else {
            $diploma->banner = 'file';
        }
    }
        $diploma->save();
        return redirect()->route('diploma.index')->with('success','Data Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $diploma = Diploma::find($id);
        $destination = 'uploads/diploma/' . $diploma->banner;
        if (File::exists($destination)) {
            File::delete($destination);
        }
        $diploma->delete();
        return redirect()->route('diploma.index')->with('success','Data Deleted Successfully');
    }
}
