<?php

namespace App\Http\Controllers;

use App\Models\Ltype;
use Illuminate\Http\Request;

class LtypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ltypes = Ltype::orderBy("id", "desc")
            ->paginate(5);

        return view('admin.ltypes.index', compact('ltypes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.ltypes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|min:3',
            'count' => 'required|numeric',
        ]);
        Ltype::create($validated);
        return redirect()->route('admin.leavetypes.index')->with('success', 'Added to list');
    }

    /**
     * Display the specified resource.
     */
    public function show(Ltype $ltype)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ltype $ltype)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ltype $ltype)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ltype $ltype)
    {
        //
    }
}
