<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $staffs = Staff::get();
        return view('home', [
            'staffs' => $staffs
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $staff = new Staff;
        $staff->name = $request->name;
        $staff->email = $request->email;
        $staff->position = $request->position;
        $staff->department = $request->department;
        $staff->save();
        return redirect('/')->with('status', 'Staff has already been created!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $staff = Staff::find($id);
        return view('show')->with('staff', $staff);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $staff = Staff::find($id);
        return view('edit')->with('staff', $staff);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $staff = Staff::find($id);
        $staff->name = $request->name;
        $staff->email = $request->email;
        $staff->position = $request->position;
        $staff->department = $request->department;
        $staff->update();
        return redirect('/')->with('status', 'Staff has already been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $staff = Staff::find($id)->delete();
        return redirect('/')->with('status', 'Staff has already been deleted!');
    }
}
