<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Practice;
use App\Models\PracticeCate;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PracticeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $practice = Practice::orderBy("id","desc")->get();
        $practiceCate = PracticeCate::orderBy("id","desc")->get();
        return view("admin.practice.index",compact("practice","practiceCate"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $practiceCate=PracticeCate::all();
        return view("admin.practice.create",compact("practiceCate"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $practice=new Practice();
        $practice->practice_cate_id=$request->practice_cate_id;
        $practice->question=$request->question;
        $practice->answer=$request->answer;        
        $practice->save();
        return redirect()->route('practices.index')->with('success','Questions  Added Successfully !!');
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
        $practice_cate=PracticeCate::all();
        return view("admin.practice.edit",compact("practice_cate"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $practice=Practice::find($id);
        $practice->practice_cate_id=$request->practice_cate_id;
        $practice->question=$request->question;
        $practice->answer=$request->answer;
        
        $practice->save();
        return redirect()->route('practices.index')->with('success','Questions  Updated Successfully !!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $practice=Practice::find($id);
        $practice->delete();
        return redirect()->route('practices.index')->with('success','Questions  Deleted Successfully !!');
    }
}
