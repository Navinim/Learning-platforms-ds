<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Interview;
use App\Models\InterviewCate;
use Illuminate\Http\Request;

class InterviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $interview=Interview::all();
        $interviewCate=InterviewCate::all();
        return view("admin.interview.index",compact("interview","interviewCate"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $interviewCate=InterviewCate::all();
        return view("admin.interview.create",compact("interviewCate"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $interview=new Interview();
        $interview->interview_cate_id=$request->interview_cate_id;
        $interview->question=$request->question;
        $interview->answer=$request->answer;        
        $interview->save();
        return redirect()->route('interviews.index')->with('success','Questions  Added Successfully !!');
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
        $interviewCate=InterviewCate::all();
        $interview=Interview::find($id);
        return view("admin.interview.edit",compact("interviewCate","interview"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $interview=Interview::find($id);
        $interview->interview_cate_id=$request->interview_cate_id;
        $interview->question=$request->question;
        $interview->answer=$request->answer;        
        $interview->save();
        return redirect()->route('interviews.index')->with('success','Questions  Updated Successfully !!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
            Interview::find($id)->delete();
            return redirect()->back()->with('success','Data Deleted Successfully');
    }
}
