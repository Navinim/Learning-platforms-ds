<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use App\Models\FaqContent;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $faqs = Faq::all();
        $faqcontent = FaqContent::all();
        return view("admin.faq.index",compact("faqs","faqcontent"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.faq.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            request()->validate([
                "question"=> "required|string",
                "answer"=> "required|string",
            ]);
            $faq =new Faq();
            $faq->question= $request->input("question");
            $faq->answer= $request->input("answer");
            $faq->save();        
            return redirect()->route("faqs.index")->with("success","Data added successfully");
        }catch(\Exception $e){
            return redirect()->back()->with("error",'All field must be filled');
        }
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
        $faq = Faq::find($id);
        return view("admin.faq.edit",compact("faq"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        request()->validate([
            "question"=> "required|string",
            "answer"=> "required|string",
        ]);
        $faq =Faq::find($id);
        $faq->question= $request->input("question");
        $faq->answer= $request->input("answer");
        $faq->save();
        return redirect()->route("faqs.index")->with("success","Data Updated successfully");
    }
    public function updateContent(Request $request ,string $id){
        $faqcnt = FaqContent::find($id);
        $faqcnt->content= $request->input("content");
        $faqcnt->save();
        return redirect()->back()->with("success","Data Updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Faq::find($id)->delete();
        return redirect()->route("faqs.index")->with("success","Data Deleted successfully");
    }
}
