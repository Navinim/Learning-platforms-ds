<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $slider = Slider::orderBy("created_at","desc")->paginate(10);
        return view("admin.slider.index", compact("slider"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.slider.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $slider=new Slider();
        $slider->tag=$request->tag;
        $slider->title=$request->title;
        $slider->description=$request->description;
        $slider->typed1=$request->typed1;
        $slider->typed2=$request->typed2;
        if (request()->image) {
            $filename = rand(00,99) . '_' . time() . '.' . request()->image->getClientOriginalExtension();
            request()->image->move('uploads/slider', $filename);
            $slider->image = $filename;
        } else {
            $slider->image = 'file';
        }
        $slider->save();
        return redirect()->route('slider.index')->with('success','Data Added Successfully');

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
        $slider = Slider::find($id);
        return view('admin.slider.edit', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $slider= Slider::find($id);
        $slider->tag=$request->tag;
        $slider->title=$request->title;
        $slider->description=$request->description;
        $slider->typed1=$request->typed1;
        $slider->typed2=$request->typed2;
        if ($request->has('image')) {
            $destination = 'uploads/slider/' . $slider->image;
            if (File::exists($destination)) {
                File::delete($destination);
            }
        if (request()->image) {
            $filename = rand(00,99) . '_' . time() . '.' . request()->image->getClientOriginalExtension();
            request()->image->move('uploads/slider', $filename);
            $slider->image = $filename;
        } else {
            $slider->image = 'file';
        }
    }
        $slider->save();
        return redirect()->route('slider.index')->with('success','Data Added Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $slider= Slider::find($id);
        $destination = 'uploads/slider/' . $slider->image;
        if (File::exists($destination)) {
            File::delete($destination);
        }
        $slider->delete();
        return redirect()->route('slider.index')->with('success','Data Deleted successfully');
    }
}
