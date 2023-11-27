<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Bootcamp;
use App\Models\BootcampMemo;
use App\Models\Contact;
use App\Models\Course;
use App\Models\Diploma;
use App\Models\Interested;
use App\Models\Sponsor;
use App\Models\University;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $associates=University::all();
        return view('user.welcome',compact('associates'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function course_detail($slug)
    {
        $id=Course::where('slug',$slug)->first();
        $course = Course::find($id->id);
        return view('user.course', compact('course'));
    }
    public function diploma_details($slug)
    {
        $id=Diploma::where('slug',$slug)->first();
        $diploma = Diploma::find($id->id);
        return view('user.diploma', compact('diploma'));
    }
   
    public function contact()
    {
        return view('user.contact');
    }
    public function bootcamp_detail($slug)
    {
        $id=Bootcamp::where('slug',$slug)->first();
        $bootcamp = Bootcamp::find($id->id);
        $memo=BootcampMemo::where('type', $bootcamp->slug)->first(); 
        $sponsor=Sponsor::where('type', $bootcamp->slug)->first();        
        return view('user.bootcamp', compact('bootcamp','memo','sponsor'));
    }

    /**
     * Display the specified resource.
     */
    public function storeContact(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'phone'=>'required',
            'is_checked'=>'required'
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $save = new Contact();
        $save->name = $request->name;
        $save->email = $request->email;
        $save->phone = $request->phone;
        $save->subject = $request->subject;
        $save->message = $request->message;
        $save->is_checked = $request->is_checked;
        $save->save();
        return redirect()->route('contact')->with('success','We Got your message, We will back to you soon.Thank you !');
    }
    public function joinus_save(Request $request,$slug)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',            
            'email'=>'required|string',
            'phone'=>'required|string',
            'course_type'=> 'required|string',
            'content'=> 'required|string'
        ]);    
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $save = new Interested();
        $save->name = $request->name;
        $save->email = $request->email;
        $save->phone = $request->phone;
        $save->course_type = $request->course_type;
        $save->content = $request->content; 
        // dd($save);       
        $save->save();        
        return redirect()->back()->with('success','We Got your message, We will back to you soon.Thank you !');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
