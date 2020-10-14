<?php

namespace App\Http\Controllers;

use App\Models\Worklog_Report;
use App\Models\Worklog_User;
use App\Models\Worklog_KPI;
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
        $user = Worklog_User::all();
        $arrUser = array();
        foreach ($user as $item) {
            $arrUser[$item->id] = $item->name;
        }
        $kpi = Worklog_KPI::all();
        $arrKPI = array();
        foreach ($kpi as $item) {
            $arrKPI[$item->id] = $item->name;
        }
        return view('admin.worklog.reports.create',compact('arrUser','arrKPI'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $report = new Worklog_Report;
        $report ->value = $request->value;
        $report ->user_id = $request->user_id;
        $report ->kpi_id = $request->kpi_id;
        $report ->date = $request->date;
        $report->save();
        return redirect()->route('admin.report.index')->withSuccess(trans('app.success_store'));
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
    public function edit($id)
    {
        $user = Worklog_User::all();
        $arrUser = array();
        foreach ($user as $item) {
            $arrUser[$item->id] = $item->name;
        }
        $kpi = Worklog_KPI::all();
        $arrKPI = array();
        foreach ($kpi as $item) {
            $arrKPI[$item->id] = $item->name;
        }
        $item = Worklog_Report::findOrFail($id);
        return view('admin.worklog.reports.edit',compact('item','arrUser','arrKPI'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Worklog_Report  $worklog_Report
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Worklog_Report  $worklog_Report
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Worklog_Report::findOrFail($id)->delete();
        return redirect()->route('admin.report.index')->withSuccess(trans('Xóa thành công nha'));
    }
}
