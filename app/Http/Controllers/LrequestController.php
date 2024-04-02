<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Lrequest;
use App\Models\Ltype;
use Illuminate\Http\Request;

class LrequestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lrequests = Lrequest::orderBy("created_at", "desc")
            ->paginate(5);

        return view('lrequest.index', compact('lrequests'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Employee $employee)
    {
        $ltypes = Ltype::all();
        return view('lrequest.create', compact('ltypes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Employee $employee)
    {
    }

    /**
     * Display the specified resource.
     */
    public function show(Lrequest $lrequest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Lrequest $lrequest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Lrequest $lrequest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Lrequest $lrequest)
    {
        //
    }
}
