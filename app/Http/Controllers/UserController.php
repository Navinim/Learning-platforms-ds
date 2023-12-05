<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Bootcamp;
use App\Models\BootcampMemo;
use App\Models\Contact;
use App\Models\Course;
use App\Models\Diploma;
use App\Models\Dream;
use App\Models\Faq;
use App\Models\FaqContent;
use App\Models\Interested;
use App\Models\Interview;
use App\Models\InterviewCate;
use App\Models\Network;
use App\Models\Practice;
use App\Models\PracticeCate;
use App\Models\Slider;
use App\Models\Sponsor;
use App\Models\Tag;
use App\Models\Testimonial;
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
        $slider= Slider::all();
        $bootcampmemos = BootcampMemo::all(); 
        $bootcamps=Bootcamp::OrderBy('id','DESC')->get()->take(4);
        $course=Course::OrderBy('id','DESC')->get()->take(1);
        $dream = Dream::first();
        $network=Network::all();
        $blogs=Blog::OrderBy('id','DESC')->get()->take(4);
        $testimonial=Testimonial::OrderBy('id','DESC')->get()->take(3);
        return view('user.welcome',compact('associates','slider','bootcampmemos','dream','network','blogs','bootcamps','course','testimonial'));
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
    public function faqs()
    {
        $faq=Faq::all();        
        $course = Course::all();
        $blog = Blog::all();
        $faqcon = FaqContent::first();
        return view('user.faq',compact('faq','course','blog','faqcon'));
    }
    public function bootcamp_detail($slug)
    {
        $id=Bootcamp::where('slug',$slug)->first();
        $bootcamp = Bootcamp::find($id->id);
        $memo=BootcampMemo::where('type', $bootcamp->slug)->first(); 
        $sponsor=Sponsor::where('type', $bootcamp->slug)->first();        
        return view('user.bootcamp', compact('bootcamp','memo','sponsor'));
    }
        public function grid_blog(){
            $blog=Blog::all();
            $tags = Tag::all();
            return view('user.grid-blog',compact('blog','tags'));
        }
        public function practice(){
            $practices=Practice::all();
            $practiceCate = PracticeCate::all();
            return view('user.practice',compact('practices','practiceCate'));
        }
        public function interview(){
            $interviews=Interview::all();
            $interviewCate = InterviewCate::all();
            return view('user.grid-interview',compact('interviews','interviewCate'));
        }

        public function interview_detail($slug){
            $id=InterviewCate::where('slug',$slug)->first();            
            $interviewCate = InterviewCate::find($id->id);
            $cate=InterviewCate::all();
            if (!$interviewCate) {
                abort(404); 
            }
            $interviews = $interviewCate->interviews;
            
            return view('user.interview-detail',compact('interviews','interviewCate','cate'));
        }
    /**
     * Display the specified resource.
     */
    public function store_contact(Request $request)
    {
       
            // $this->validate($request, [
            //     'name'=> 'requird|string',
            //     'email'=> 'required|string|email',
            //     'is_checked'=> 'required|string',
            //     'phone'=> 'required|string',
            //     'subject'=> 'required|string',
            //     'content'=> 'required|string',
            // ]) ;
            $contact = new Contact();
            $contact->name = $request->name;
            $contact->email = $request->email;
            $contact->phone = $request->phone;
            $contact->subject = $request->subject;
            $contact->content = $request->content;
            $contact->is_checked = $request->has('is_checked') ? 1 : 0;                    
            $contact->save();
            return redirect()->back()->with('success','We Got your message, We will back to you soon.Thank you !');
           
        
        
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
