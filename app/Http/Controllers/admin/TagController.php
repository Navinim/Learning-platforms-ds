<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Illuminate\Database\QueryException;


class TagController extends Controller
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
        $request->validate([
            'title' => [
                'required',
                'max:255', // Assuming a maximum length for the title
                Rule::unique('tags', 'title'), // Ignore the current tag when checking uniqueness
            ],
        ]);
        $tag=new Tag();
        $tag->title=$request->title;
        $slug = Str::slug($request->title);
        $tag->slug = $slug;
        $tag->save();
        return redirect()->route('blog.index')->with('success','Tag Category Added Successfully !!');
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
        $tag=Tag::find($id);
        $tag->title=$request->title;
        $slug = Str::slug($request->title);
        $tag->slug = $slug;
        $tag->save();
        return redirect()->route('blog.index')->with('success','Tag Category Updated Successfully !!');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            
            $tag = Tag::find($id);           
            $tag->delete();
            return redirect()->route('blog.index')->with('success','Data Deleted Successfully');
        } catch (QueryException $exception) {            
            if ($exception->errorInfo[1] === 1451) {               
                return redirect()->route('blog.index')->with('error', 'Cannot delete the tag because it is associated with other records.But you can edit it.');
            }    
            throw $exception;
        }
    }

    
}
