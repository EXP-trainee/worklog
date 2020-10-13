<?php

namespace App\Http\Controllers;

use App\Models\Worklog_User;
use Illuminate\Http\Request;

class WorklogUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Worklog_User::all();
        // dd($items);
        return view('admin.worklog.kpis.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Worklog_User  $worklog_User
     * @return \Illuminate\Http\Response
     */
    public function show(Worklog_User $worklog_User)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Worklog_User  $worklog_User
     * @return \Illuminate\Http\Response
     */
    public function edit(Worklog_User $worklog_User)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Worklog_User  $worklog_User
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Worklog_User $worklog_User)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Worklog_User  $worklog_User
     * @return \Illuminate\Http\Response
     */
    public function destroy(Worklog_User $worklog_User)
    {
        //
    }
}
