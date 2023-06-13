<?php

namespace App\Http\Controllers\Admin;

use App\Models\Collaborator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CollaboratorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *
     */
    public function index()
    {
        $collaborators = Collaborator::all();
        return view('admin.collaborators.index', compact('collaborators'));
    }

    /**
     * Show the form for creating a new resource.
     *
     *
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Collaborator  $collaborator
     *
     */
    public function show(Collaborator $collaborator)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Collaborator  $collaborator
     *
     */
    public function edit(Collaborator $collaborator)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Collaborator  $collaborator
     *
     */
    public function update(Request $request, Collaborator $collaborator)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Collaborator  $collaborator
     *
     */
    public function destroy(Collaborator $collaborator)
    {
        //
    }
}
