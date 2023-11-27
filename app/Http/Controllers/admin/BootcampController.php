<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Bootcamp;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class BootcampController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bootcamp = Bootcamp::orderBy("created_at", "desc")->paginate(10);
        return view("admin.bootcamp.index", compact("bootcamp"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.bootcamp.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $bootcamp = new Bootcamp();        
        $bootcamp->title = $request->input('title');
        $slug = Str::slug($request->input('title'));
        $bootcamp->slug = $slug;
        $bootcamp->tag = $request->input('tag');
        $bootcamp->event_gain = $request->input('event_gain');
        $bootcamp->description = $request->input('description');
        $bootcamp->sub_title = $request->input('sub_title');
        $bootcamp->banner_description = $request->input('banner_description');
        if (request()->banner) {
            $filename = rand(00, 99) . '_' . time() . '.' . request()->banner->getClientOriginalExtension();
            // $fileName = request()->image->getClientOriginalName();
            request()->banner->move('uploads/bootcamps', $filename);
            $bootcamp->banner = $filename;
        } else {
            $bootcamp->banner = 'file';
        }
        $bootcamp->save();

        return redirect()->route("bootcamps.index")->with("success", "Data Created Successfully");
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
        $bootcamp = Bootcamp::find($id);
        return view("admin.bootcamp.edit", compact("bootcamp"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $bootcamp = Bootcamp::find($id);        
        $bootcamp->title = $request->input('title');
        $slug = Str::slug($request->input('title'));
        $bootcamp->slug = $slug;
        $bootcamp->tag = $request->input('tag');
        $bootcamp->event_gain = $request->input('event_gain');
        $bootcamp->description = $request->input('description');
        $bootcamp->sub_title = $request->input('sub_title');
        $bootcamp->banner_description = $request->input('banner_description');
        if ($request->has('banner')) {
            $destination = 'uploads/bootcamps/' . $bootcamp->banner;
            if (File::exists($destination)) {
                File::delete($destination);
            }
        if (request()->banner) {
            $filename = rand(00, 99) . '_' . time() . '.' . request()->banner->getClientOriginalExtension();
            // $fileName = request()->image->getClientOriginalName();
            request()->banner->move('uploads/bootcamps', $filename);
            $bootcamp->banner = $filename;
        } else {
            $bootcamp->banner = 'file';
        }
    }
        $bootcamp->save();

        return redirect()->route("bootcamps.index")->with("success", "Data Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $bootcamp=bootcamp::find($id);
        $destination = 'uploads/bootcamps/' . $bootcamp->banner;
            if (File::exists($destination)) {
                File::delete($destination);
            }
        $bootcamp->delete();
        return redirect()->route('bootcamps.index')->with('success','Data Deleted Successfully');
    }
}
