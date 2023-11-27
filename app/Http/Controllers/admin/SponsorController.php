<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Bootcamp;
use App\Models\Sponsor;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class SponsorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sponsors = Sponsor::all();
        return view("admin.bootcamp.sponsor.index", compact("sponsors"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $bootcamps = Bootcamp::all();
        return view("admin.bootcamp.sponsor.create", compact("bootcamps"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $sponsor = new Sponsor();
        $sponsor->type = $request->type;
        $sponsor->title = $request->title;
        $slug = Str::slug($request->title);
        $sponsor->slug = $slug;
        $sponsor->details = $request->details;
        if(request()->image){
            $filename = rand(00,99) . '_' . time() . '.' . request()->image->getClientOriginalExtension();
            // $fileName = request()->image->getClientOriginalName();
            request()->image->move('uploads/sponsors', $filename);
            $sponsor->image = $filename;
        } else {
            $sponsor->image = 'file';
        }
        $sponsor->save();
        return redirect()->route('sponsors.index')->with('success','Data Created Successfully');
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
        $bootcamps = Bootcamp::all();
        $sponsor = Sponsor::find($id);
        return view("admin.bootcamp.sponsor.edit", compact("bootcamps","sponsor"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $sponsor =Sponsor::find( $id );
        $sponsor->type = $request->type;
        $sponsor->title = $request->title;
        $slug = Str::slug($request->title);
        $sponsor->slug = $slug;
        $sponsor->details = $request->details;
        if ($request->has('image')) {
            $destination = 'uploads/sponsors/' . $sponsor->image;
            if (File::exists($destination)) {
                File::delete($destination);
            }
        if(request()->image){
            $filename = rand(00,99) . '_' . time() . '.' . request()->image->getClientOriginalExtension();
            // $fileName = request()->image->getClientOriginalName();
            request()->image->move('uploads/sponsors', $filename);
            $sponsor->image = $filename;
        } else {
            $sponsor->image = 'file';
        }
    }
        $sponsor->save();
        return redirect()->route('sponsors.index')->with('success','Data Created Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $sponsor = Sponsor::find( $id );
        $destination = 'uploads/sponsors/' . $sponsor->image;
        if (File::exists($destination)) {
            File::delete($destination);
        }
        $sponsor->delete();
        return redirect()->route('sponsors.index')->with('success','Data Deleted Successfully');
    }
}
