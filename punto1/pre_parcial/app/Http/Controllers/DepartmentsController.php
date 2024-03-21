<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Departments;

class DepartmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $departments = Departments::all();
        return response()->json($departments);
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
        $department = new Departments();
        $department->name = $request->name;
        $department->save();
        return response()->json('Departament created successfully', 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Departments $department, string $id)
    {
        $department = Departments::find($id);
        return response()->json($department);
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
    public function update(Request $request, $id)
    {
        $department = Departments::find($id);
        $department->name = $request->name;
        $department->save();
        return response()->json('Departament updated successfully', 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $department = Departments::find($id);
        $department->delete();
        return response()->json('Departament deleted successfully', 200);
    }
}
