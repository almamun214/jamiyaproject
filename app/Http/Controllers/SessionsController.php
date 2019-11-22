<?php

namespace App\Http\Controllers;

use App\Sessions;
use Illuminate\Http\Request;

class SessionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sessionsList = Sessions::paginate(10);
        return view('pages.session.index', compact('sessionsList'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.session.create');

    }

    public function store(Request $request)
    {



        Sessions::create($request->all());



        return back()->with('success', 'created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sessions  $sessions
     * @return \Illuminate\Http\Response
     */
    public function show(Sessions $sessions)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sessions  $sessions
     * @return \Illuminate\Http\Response
     */
    public function edit(Sessions $sessions)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sessions  $sessions
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sessions $sessions)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sessions  $sessions
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sessions $sessions)
    {
        $sessions->delete();
        return back()->with('success', 'delete successfully');
    }
}
