<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\CompanyProfile;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $profile = CompanyProfile::first();
        return view('admin.company.index', compact('profile'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        $profile = CompanyProfile::find($id);
        return view('admin.company.edit', compact('profile'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $profile = CompanyProfile::find($id);
        $profile->name = $request->name;
        $profile->email = $request->email;
        $profile->open = $request->open;
        $profile->address = $request->address;
        $profile->phone = $request->phone;
        $profile->iframe = $request->iframe;
        $profile->why_detail = $request->why_detail;
        $profile->footer_details = $request->footer_details;
        if ($request->has('logo_main')) {
            $destination = 'uploads/profile/' . $profile->logo_main;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            if (request()->logo_main) {
                $filename = rand(00, 99) . '_' . time() . '.' . request()->logo_main->getClientOriginalExtension();
                request()->logo_main->move('uploads/profile', $filename);
                $profile->logo_main = $filename;
            } else {
                $profile->logo_main = 'file';
            }
        }
        if ($request->has('logo_footer')) {
            $destination = 'uploads/profile/' . $profile->logo_footer;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            if (request()->logo_footer) {
                $filename = rand(00, 99) . '_' . time() . '.' . request()->logo_footer->getClientOriginalExtension();
                request()->logo_footer->move('uploads/profile', $filename);
                $profile->logo_footer = $filename;
            } else {
                $profile->logo_footer = 'file';
            }

        }
        if ($request->has('why_banner')) {
            $destination = 'uploads/profile/' . $profile->why_banner;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            if (request()->why_banner) {
                $filename = rand(00, 99) . '_' . time() . '.' . request()->why_banner->getClientOriginalExtension();
                request()->why_banner->move('uploads/profile', $filename);
                $profile->why_banner = $filename;
            } else {
                $profile->why_banner = 'file';
            }
        }
        $profile->save();
        return redirect()->route('profile.index')->with('success', 'Data Updated Successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
