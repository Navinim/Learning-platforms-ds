<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\PracticeCate;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Database\QueryException;

class PracticeCateController extends Controller
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
        $practice=new PracticeCate();
        $practice->title=$request->title;
        $practice->sub_title=$request->sub_title;
        $slug = Str::slug($request->title);
        $practice->slug = $slug;
        $practice->details = $request->details;
        if (PracticeCate::where('slug', $slug)->exists()) {            
            return redirect()->back()->with('error', 'You have already exist this topic.Thank you');
        }
        $practice->save();
        return redirect()->route('practices.index')->with('success','Questions Category Added Successfully !!');
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
        $practice=PracticeCate::find($id);
        $practice->title=$request->title;
        $practice->sub_title=$request->sub_title;
        $slug = Str::slug($request->title);
        $practice->slug = $slug;
        $practice->details = $request->details;
        $practice->save();
        return redirect()->route('practices.index')->with('success','Questions Category Updated Successfully !!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            
            $practice=PracticeCate::find($id);
        $practice->delete();
        return redirect()->route('practices.index')->with('success','Questions Category Deleted Successfully !!');
        } catch (QueryException $exception) {            
            if ($exception->errorInfo[1] === 1451) {               
                return redirect()->route('practices.index')->with('error', 'Cannot delete ths topic because it is associated with other records.But you can edit it.');
            }    
            throw $exception;
        }
       

    }
}
