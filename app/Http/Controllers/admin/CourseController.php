<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\CourseCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $course=Course::all();
        $cate_course=CourseCategory::all();
        return view('admin.course.index',compact('course','cate_course'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cate_course=CourseCategory::all();
        return view('admin.course.create',compact('cate_course'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $course=New Course();
        $course->tag=$request->tag;
        $course->title=$request->title;
        $course->course_category_id=$request->course_category_id; 
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
            request()->banner->move('uploads/courses', $filename);
            $course->banner = $filename;
        } else {
            $course->banner = 'file';
        }
        $course->save();
        return redirect()->route('courses.index')->with('success','Data Created Successfully');
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
        $cate_course=CourseCategory::all();
        $course=Course::find($id);
        return view('admin.course.edit',compact('cate_course','course'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $course=Course::find($id);
        $course->tag=$request->tag;
        $course->title=$request->title;
        $course->course_category_id=$request->course_category_id; 
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
        if ($request->has('banner')) {
            $destination = 'uploads/courses/' . $course->banner;
            if (File::exists($destination)) {
                File::delete($destination);
            }      
        if (request()->banner) {
            $filename = rand(00,99) . '_' . time() . '.' . request()->banner->getClientOriginalExtension();
            request()->banner->move('uploads/courses', $filename);
            $course->banner = $filename;
        } else {
            $course->banner = 'file';
        }
    }
        $course->save();
        return redirect()->route('courses.index')->with('success','Data Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $course = Course::find($id);
        $destination = 'uploads/courses/' . $course->banner;
        if (File::exists($destination)) {
            File::delete($destination);
        }
        $course->delete();
        return redirect()->route('courses.index')->with('success','Data Deleted Successfully');
    }
}
