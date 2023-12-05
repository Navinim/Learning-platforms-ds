<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimonial=Testimonial::OrderBy('id','DESC')->get();
        return view('admin.testimonial.index',compact('testimonial'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.testimonial.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $testi=new Testimonial();
        $testi->type=$request->type;
        $testi->name=$request->name;
        $testi->position=$request->position;
        $testi->feedback=$request->feedback;
        $testi->videoUrl=$request->videoUrl;
        if (request()->image) {
            $filename = rand(00,99) . '_' . time() . '.' . request()->image->getClientOriginalExtension();
            request()->image->move('uploads/testi', $filename);
            $testi->image = $filename;
        } else {
            $testi->image = 'file';
        }
        $testi->save();
        return redirect()->route('testimonial.index')->with('success','Data Added Successfully');
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
        $testimonial=Testimonial::find($id);
        return view('admin.testimonial.edit',compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $testi= Testimonial::find($id);
        $testi->type=$request->type;
        $testi->name=$request->name;
        $testi->position=$request->position;
        $testi->feedback=$request->feedback;
        $testi->videoUrl=$request->videoUrl;
        if ($request->has('image')) {
            $destination = 'uploads/testi/' . $testi->image;
            if (File::exists($destination)) {
                File::delete($destination);
            }
        if (request()->image) {
            $filename = rand(00,99) . '_' . time() . '.' . request()->image->getClientOriginalExtension();
            request()->image->move('uploads/testi', $filename);
            $testi->image = $filename;
        } else {
            $testi->image = 'file';
        }
    }
        $testi->save();
        return redirect()->route('testimonial.index')->with('success','Data Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $testi= Testimonial::find($id);
        $destination = 'uploads/testi/' . $testi->image;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $testi->delete();
            return redirect()->route('testimonial.index')->with('success','Data Deleted Successfully');
    }
}
