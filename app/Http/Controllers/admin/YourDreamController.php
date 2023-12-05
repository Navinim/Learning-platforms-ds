<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Dream;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class YourDreamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dream=Dream::first();
        return view('admin.dream.index',compact('dream'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.dream.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([            
            'deals' => 'required|array',
            'deals.*.title' => 'required|string',
            'deals.*.icon' => 'required|string',  
            'deals.*.detail' => 'required|string',            
        ]);
        $dream = new Dream();
        $dream->title=$request->title; 
        $dream->detail = $request->detail;        
        $dream->slogan = $request->slogan;        
        $dream->deals = json_encode($data['deals']);
        if(request()->banner){
            $filename = rand(00,99) . '_' . time() . '.' . request()->banner->getClientOriginalExtension();           
            request()->banner->move('uploads/dreams', $filename);
            $dream->banner = $filename;
        } else {
            $dream->banner = 'file';
        }
        $dream->save();
        return redirect()->route('dream.index')->with('success','Data Created Successfully');
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
        $dream = Dream::find( $id );
        return view('admin.dream.edit',compact('dream'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([            
            'deals' => 'required|array',
            'deals.*.title' => 'required|string',
            'deals.*.icon' => 'required|string', 
            'deals.*.detail' => 'required|string',           
        ]);
        $dream = Dream::find($id);
        $dream->title=$request->title; 
        $dream->detail = $request->detail;        
        $dream->slogan = $request->slogan;        
        $dream->deals = json_encode($data['deals']);
        if ($request->has('banner')) {
            $destination = 'uploads/dreams/' . $dream->banner;
            if (File::exists($destination)) {
                File::delete($destination);
            }
        if(request()->banner){
            $filename = rand(00,99) . '_' . time() . '.' . request()->banner->getClientOriginalExtension();
            // $fileName = request()->banner->getClientOriginalName();
            request()->banner->move('uploads/dreams', $filename);
            $dream->banner = $filename;
        } else {
            $dream->banner = 'file';
        }
    }
        $dream->save();
        return redirect()->route('dream.index')->with('success','Data Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dream = Dream::find( $id );
        $destination = 'uploads/dreams/' . $dream->image;
        if (File::exists($destination)) {
            File::delete($destination);
        }
        $dream->delete();
        return redirect()->route('dream.index')->with('success','Data Deleted Successfully');
    }
}
