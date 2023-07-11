<?php

namespace App\Http\Controllers;

use App\Models\Size;
use Illuminate\Http\Request;

class SizeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $size = Size::orderBy('created_at', 'DESC')->get();
  
        return view('sizes.index', compact('size'));    

    }

    /**
     * Show the form for creating a new resource.
     */
    
    public function create()
    {
        return view('sizes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Size::create($request->all());
        return redirect()->route('sizes.index')->with('success', 'size added successfully');
    }
  

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $size = Size::findOrFail($id);
  
        return view('sizes.details', compact('size'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $size = Size::findOrFail($id);
  
        return view('sizes.edit', compact('size'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $size = Size::findOrFail($id);
  
        $size->update($request->all());
  
        return redirect()->route('sizes.index')->with('success', 'size updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $size = Size::findOrFail($id);
  
        $size->delete();
  
        return redirect()->route('sizes.index')->with('success', 'size deleted successfully');    }
}
