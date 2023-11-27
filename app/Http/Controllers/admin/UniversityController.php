<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\University;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class UniversityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $universities = University::all();
        return view('admin.university.index', compact('universities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.university.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([            
            'image' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',
        ]);
        $save = new University();
        $save->name = $request->name;
        $save->is_associate = $request->is_associate=='is_associate'? 1 :0;        
        if(request()->image){
            $filename = time() . '.' . request()->image->getClientOriginalExtension();
            request()->image->move('uploads/university', $filename);
            $save->image = $filename;
        }else
        {
            $save->image = 'file';
        }
        $save->save();
        return redirect()->route('partner-associate.index')->with('success', 'Associates/Partners Added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $university = University::find($id);
        return view('admin.university.edit', compact('university'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([            
            'image' => 'image|mimes:jpg,jpeg,png,gif|max:2048',
        ]);
        $save = University::find($id);
        $save->name = $request->name;
        $save->is_associate = $request->is_associate=='is_associate'? 1 :0; 
        if($request->has('image')){
            $destination = 'uploads/university/'.$save->image;
            if(File::exists($destination)){
                File::delete($destination);
            }
            if(request()->image){
                $filename = time() . '.' . request()->image->getClientOriginalExtension();
                request()->image->move('uploads/university', $filename);
                $save->image = $filename;
            }else
            {
                $save->image = 'file';
            }
        }
        $save->save();
        return redirect()->route('partner-associate.index')->with('success', 'Associates/Partners Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = University::find($id);
        $destination = 'uploads/university/'.$delete->image;
        if(File::exists($destination)){
            File::delete($destination);
        }
        $delete->delete();
        return redirect()->route('partner-associate.index')->with('success', 'Associates/Partners Deleted!');
    }
}
