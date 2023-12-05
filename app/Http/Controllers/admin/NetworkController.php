<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Network;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class NetworkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $network=Network::all();
        return view("admin.network.index",compact('network'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.network.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $dream = new Network();
        $dream->title=$request->title; 
        $dream->detail = $request->detail;         
        
        if(request()->image){
            $filename = rand(00,99) . '_' . time() . '.' . request()->image->getClientOriginalExtension();           
            request()->image->move('uploads/networks', $filename);
            $dream->image = $filename;
        } else {
            $dream->image = 'file';
        }
        $dream->save();
        return redirect()->route('network.index')->with('success','Data Created Successfully');
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
        $network=Network::find($id);
        return view("admin.network.edit",compact('network'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $dream =Network::find($id);
        $dream->title=$request->title; 
        $dream->detail = $request->detail;         
        if ($request->has('image')) {
            $destination = 'uploads/networks/' . $dream->image;
            if (File::exists($destination)) {
                File::delete($destination);
            }
        if(request()->image){
            $filename = rand(00,99) . '_' . time() . '.' . request()->image->getClientOriginalExtension();           
            request()->image->move('uploads/networks', $filename);
            $dream->image = $filename;
        } else {
            $dream->image = 'file';
        }
    }
        $dream->save();
        return redirect()->route('network.index')->with('success','Data Created Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $dream =Network::find($id);
        $destination = 'uploads/networks/' . $dream->image;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $dream->delete();
            return redirect()->route('network.index')->with('success','Data Deleted Successfully');;
    }
}
