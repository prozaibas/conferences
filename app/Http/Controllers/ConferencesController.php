<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Conference;
use App\Http\Requests\StoreConferenceRequest;

class ConferencesController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $conference = new Conference();

        return view('conferences.index', ['conferences' => $conference->all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('conferences.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreConferenceRequest $request, Conference $conference)
    {
        $validated = $request->validated();
        $conferenceItem = $conference->create($validated);

        $request->session()->flash('status', 'Conference created!');

        return redirect()->route('conferences.show', ['conference' => $conferenceItem->id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        return view('conferences.show', ['conference' => Conference::findorFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        return view('conferences.edit', ['conference' => Conference::findorFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreConferenceRequest $request, int $id)
    {
        $conference = (new Conference())->findOrFail($id);
        $validated = $request->validated();
        $conference->fill($validated);
        $conference->save();

        $request->session()->flash('status', 'Conference was updated!');

        return redirect()->route('conferences.show', ['conference' => $conference->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $conference = (new Conference())->findOrFail($id);
        $conference->delete();

        session()->flash('status', 'Conference was deleted!');

        return redirect()->route('conferences.index');
    }
}
