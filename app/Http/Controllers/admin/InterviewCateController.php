<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\InterviewCate;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Database\QueryException;

class InterviewCateController extends Controller
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
        $interviewCate=new InterviewCate();
        $interviewCate->title=$request->title;
        $interviewCate->sub_title=$request->sub_title;
        $slug = Str::slug($request->title);
        $interviewCate->slug = $slug;
        $interviewCate->details = $request->details;
        if (InterviewCate::where('slug', $slug)->exists()) {            
            return redirect()->back()->with('error', 'You have already exist this topic.Thank you');
        }
        $interviewCate->save();
        return redirect()->route('interviews.index')->with('success','Questions Category Added Successfully !!');
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
        $interviewCate=InterviewCate::find($id);
        $interviewCate->title=$request->title;
        $interviewCate->sub_title=$request->sub_title;
        $slug = Str::slug($request->title);
        $interviewCate->slug = $slug;
        $interviewCate->details = $request->details;
        if (InterviewCate::where('slug', $slug)->exists()) {            
            return redirect()->back()->with('error', 'You have already exist this topic.Thank you');
        }
        $interviewCate->save();
        return redirect()->route('interviews.index')->with('success','Questions Category Updated Successfully !!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            
            $interviewCate=InterviewCate::find($id);
        $interviewCate->delete();
        return redirect()->route('interviews.index')->with('success','Questions Category Deleted Successfully !!');
        } catch (QueryException $exception) {            
            if ($exception->errorInfo[1] === 1451) {               
                return redirect()->route('interviews.index')->with('error', 'Cannot delete ths topic because it is associated with other records.But you can edit it.');
            }    
            throw $exception;
        }
    }
}
