<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Highlight;
use Illuminate\Http\Request;

class HighlightController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $highlights = Highlight::all();       
        return view("admin.course.highlight.index", compact("highlights"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $course=Course::all();
        return view("admin.course.highlight.create", compact("course"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {     
        $data = $request->validate([ 
            'data'=>'required|array',           
            'data.*.title' => 'required|string',
            'data.*.icon' => 'required|string',
            
        ]);            
        try {
            $item =new Highlight();
            $item->type = $request->type;
            $item->data = json_encode($data['data']);
            $item->save();
        } catch (\Exception $e) {
            dd($e->getMessage()); // Display the exception message for debugging
        }
        
        // return response()->json(['message' => 'Item created successfully', 'item' => $item], 201);
        return redirect()->route('highlight.index')->with('success','Data Created Successfully');
    
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
        $course=Course::all();
        $highlight = Highlight::find($id);
        return view("admin.course.highlight.edit", compact("course","highlight"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $dataVal = $request->validate([ 
            'data'=>'required|array',           
            'data.*.title' => 'required|string',
            'data.*.icon' => 'required|string',
            
        ]);            
        try {
           // Find the item by ID
        $item = Highlight::findOrFail($id);        
        $item->type = $request->type;
        $item->data = json_encode($dataVal['data']);
        $item->save();
        } catch (\Exception $e) {
            dd($e->getMessage()); // Display the exception message for debugging
        }        
        // return response()->json(['message' => 'Item created successfully', 'item' => $item], 201);
        return redirect()->route('highlight.index')->with('success','Data Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        
        $item = Highlight::findOrFail($id);
        $item->delete();
        return redirect()->route('highlight.index')->with('success','Data Deleted Successfully');
    }
}
