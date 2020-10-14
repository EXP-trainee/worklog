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
        $arrPosition = array();
        foreach ($position as $item) {
            $arrPosition[$item->id] = $item->name;
        }
        return view('admin.worklog.kpis.create',compact('arrPosition'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kpi = new Worklog_KPI;
        $kpi->name = $request->name;
        $kpi->position_id = $request->position_id;
        $kpi->save();
        return redirect()->route('admin.KPI.index')->withSuccess(trans('app.success_store'));
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
    public function edit($id)
    {
        $position = Worklog_Position::all();
        $arrPosition = array();
        foreach ($position as $item) {
            $arrPosition[$item->id] = $item->name;
        }
        $item = Worklog_KPI::findOrFail($id);
        return view('admin.worklog.kpis.edit',compact('item','arrPosition'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Worklog_KPI  $worklog_KPI
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $item = Worklog_KPI::findOrFail($id);
        $item ->name = $request->name;
        $item ->position_id = $request->position_id;
        $item->save();
        return redirect()->route('admin.KPI.index')->withSuccess(trans('app.success_update'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Worklog_KPI  $worklog_KPI
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Worklog_KPI::findOrFail($id)->delete();
        return redirect()->route('admin.KPI.index')->withSuccess(trans('Xóa thành công'));
    }
}
