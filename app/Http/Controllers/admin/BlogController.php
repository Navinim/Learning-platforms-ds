<?php

namespace App\Http\Controllers\admin;
use Illuminate\Database\QueryException;
use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blog = Blog::all();
        $tags = Tag::all();
        // dd($tags);
        return view("admin.blog.index",compact("blog","tags"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tags = Tag::all();
        return view("admin.blog.create",compact("tags"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $blog = new Blog();
        $blog->tag_id = $request->tag_id;
        $blog->title = $request->title;
        $slug = Str::slug($request->title);
        $blog->slug = $slug;
        $blog->owner = $request->owner;
        $blog->details = $request->details;
        if (request()->banner) {
            $filename = rand(00,99) . '_' . time() . '.' . request()->banner->getClientOriginalExtension();
            request()->banner->move('uploads/blogs', $filename);
            $blog->banner = $filename;
        } else {
            $blog->banner = 'file';
        }
        $blog->save();
        return redirect()->route("blog.index")->with("success","Data Stored Successfully!");
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
        $blog = Blog::find($id);
        $tags=Tag::all();
        // dd($tags);
        return view("admin.blog.edit", compact("blog","tags"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $blog = Blog::find($id);
        $blog->tag_id = $request->tag_id;
        $blog->title = $request->title;
        $slug = Str::slug($request->title);
        $blog->slug = $slug;
        $blog->owner = $request->owner;
        $blog->details = $request->details;
        if ($request->has('banner')) {
            $destination = 'uploads/blogs/' . $blog->banner;
            if (File::exists($destination)) {
                File::delete($destination);
            } 
            if (request()->banner) {
                $filename = rand(00,99) . '_' . time() . '.' . request()->banner->getClientOriginalExtension();
                request()->banner->move('uploads/blogs', $filename);
                $blog->banner = $filename;
            } else {
                $blog->banner = 'file';
            }
        }
        $blog->save();
        return redirect()->route('blog.index')->with('success','Data Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            
            $blog = Blog::find($id);
            $destination = 'uploads/blogs/' . $blog->banner;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $blog->delete();
            return redirect()->route('blog.index')->with('success','Data Deleted Successfully');
        } catch (QueryException $exception) {            
            if ($exception->errorInfo[1] === 1451) {               
                return view('admin.blog.index')->with('error', 'Cannot delete the blog because it is associated with other records.');
            }    
            throw $exception;
        }
        
    }
}
