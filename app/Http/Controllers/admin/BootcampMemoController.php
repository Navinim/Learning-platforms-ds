<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Bootcamp;
use App\Models\BootcampMemo;
use Illuminate\Http\Request;
use App\Rules\UniqueTypeInJson;
use App\Rules\UniqueBootcampMemo;

class BootcampMemoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bootcampmemos = BootcampMemo::all();       
        return view("admin.bootcamp.memo.index", compact("bootcampmemos"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $bootcamps = Bootcamp::all();       
        return view("admin.bootcamp.memo.create", compact("bootcamps"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required|string',
            'start' => 'required|string',
            'end' => 'required|string',
            'time' => 'required|string',
            'venue' => 'required|string',
            'expert' => 'required|string',
            'detail' => 'required|string',
        ]);                   
        try {
            $item = new BootcampMemo();
            $item->type=$request->type;
            $item->data = json_encode([
                'start' => $request->input('start'),
                'end' => $request->input('end'),
                'time' => $request->input('time'),
                'venue' => $request->input('venue'),
                'expert' => $request->input('expert'),
                'detail'=> $request->input('detail'),
            ]);
            $item->save();            
            
        } catch (\Exception $e) {
            dd($e->getMessage()); // Display the exception message for debugging
        }
        
        // return response()->json(['message' => 'Item created successfully', 'item' => $item], 201);
        return redirect()->route('memos.index')->with('success','Data Created Successfully');
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
        $bootcampmemos=BootcampMemo::find($id);      
        return view("admin.bootcamp.memo.edit", compact("bootcamps","bootcampmemos"));
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'type' => 'required|string',
            'start' => 'required|string',
            'end' => 'required|string',
            'time' => 'required|string',
            'venue' => 'required|string',
            'expert' => 'required|string',
            'detail'=> 'required|string',
        ]);
        try {
            $item = BootcampMemo::find($id);

        if (!$item) {
            return redirect()->route('memos.index')->with('error', 'Record not found');
        }
        $item->type = $request->input('type');
        $item->data = json_encode([
            'start' => $request->input('start'),
            'end' => $request->input('end'),
            'time' => $request->input('time'),
            'venue' => $request->input('venue'),
            'expert' => $request->input('expert'),
            'detail'=> $request->input('detail'),
        ]);
        $item->save();
         } catch (\Exception $e) {
             dd($e->getMessage()); // Display the exception message for debugging
         }
         
         // return response()->json(['message' => 'Item created successfully', 'item' => $item], 201);
         return redirect()->route('memos.index')->with('success','Data Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $bootcamps = BootcampMemo::find($id);
        $bootcamps->delete();
        return redirect()->route('memos.index')->with('success','Data Deleted Successfully');
    }
}
