<?php

namespace App\Http\Controllers;

use App\Models\Worklog_Report;
use Illuminate\Http\Request;

class WorklogReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Worklog_Report::all();
        return view('admin.worklog.reports.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.worklog.reports.create');
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
     * @param  \App\Models\Worklog_Report  $worklog_Report
     * @return \Illuminate\Http\Response
     */
    public function show(Worklog_Report $worklog_Report)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Worklog_Report  $worklog_Report
     * @return \Illuminate\Http\Response
     */
    public function edit(Worklog_Report $worklog_Report)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Worklog_Report  $worklog_Report
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Worklog_Report $worklog_Report)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Worklog_Report  $worklog_Report
     * @return \Illuminate\Http\Response
     */
    public function destroy(Worklog_Report $worklog_Report)
    {
        //
    }
}
