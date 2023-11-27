<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Tool;
use Illuminate\Http\Request;

class ToolsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tools = Tool::all();
        return view("admin.course.tool.index", compact("tools"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $course = Course::all();
        return view("admin.course.tool.create", compact("course"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg|max:10240', // Adjust file types and size as needed
        ]);
        $tool = new Tool();
        $tool->type = $request->input('type');
        $tool->title = $request->input('title');  
        // Handle file upload
        if (request()->image) {
            $filename = rand(00,99) . '_' . time() . '.' . request()->image->getClientOriginalExtension();
            // $fileName = request()->image->getClientOriginalName();
            request()->image->move('uploads/tools', $filename);
            $tool->image = $filename;
        } else {
            $tool->image = 'file';
        }
        $tool->save();
        return redirect()->route("tools.index")->with("success", "Data Created Successfully");
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
        $course = Course::all();
        $tool = Tool::find($id);
        return view("admin.course.tool.edit", compact("course","tool"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        // Validate the request
        $request->validate([
            'type' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg|max:10240', // Adjust file types and size as needed
        ]);
        $tool = Tool::find($id);
        $tool->type = $request->input('type');
        $tool->title = $request->input('title');         

        // Handle file upload
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = $file->getClientOriginalName();

            // Store the file in the "uploads/tools" folder
            $file->storeAs('uploads/tools', $fileName, 'public');

        }
        $tool->save();        
        return redirect()->route("tools.index")->with("success", "Data Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tool = Tool::findOrFail($id);
        $tool->delete();
        return redirect()->route("tools.index")->with("success", "data Deleted Successfully");
    }
}
