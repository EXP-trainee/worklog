<?php

namespace App\Http\Controllers;

use App\Models\Worklog_KPI;
use App\Models\Worklog_Position;
use Illuminate\Http\Request;

class WorklogKPIController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Worklog_KPI::all();
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
        $position = Worklog_Position::all();
        dd($position);
        return view('admin.worklog.kpis.create',compact('position'));
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
     * @param  \App\Models\Worklog_KPI  $worklog_KPI
     * @return \Illuminate\Http\Response
     */
    public function show(Worklog_KPI $worklog_KPI)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Worklog_KPI  $worklog_KPI
     * @return \Illuminate\Http\Response
     */
    public function edit(Worklog_KPI $worklog_KPI)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Worklog_KPI  $worklog_KPI
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Worklog_KPI $worklog_KPI)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Worklog_KPI  $worklog_KPI
     * @return \Illuminate\Http\Response
     */
    public function destroy(Worklog_KPI $worklog_KPI)
    {
        //
    }
}
