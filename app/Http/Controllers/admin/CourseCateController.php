<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\CourseCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CourseCateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $cate=new CourseCategory();
        $cate->title=$request->title;
        $slug = Str::slug($request->title);
        $cate->slug = $slug;
        $cate->save();
        return redirect()->route('courses.index')->with('success','Course Category Added Successfully !!');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $cate=CourseCategory::find($id);
        $cate->title=$request->title;
        $slug = Str::slug($request->title);
        $cate->slug = $slug;
        $cate->save();
        return redirect()->route('courses.index')->with('success','Course Category Updated Successfully !!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cate=CourseCategory::find($id);
        $cate->delete();
        return redirect()->route('courses.index')->with('success','Course Category has been deleted ');
    }
}
