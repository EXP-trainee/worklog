<?php

namespace App\Http\Controllers;

use App\Models\Worklog_Position;
use Illuminate\Http\Request;

class WorklogPositionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Worklog_Position::all();
        // dd($items);
        return view('admin.worklog.positions.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.worklog.positions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $position = new Worklog_Position;
        $position->name = $request->name;
        $position->save();
        return redirect()->route('admin.position.index')->withSuccess(trans('app.success_store'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Worklog_Position  $worklog_Position
     * @return \Illuminate\Http\Response
     */
    public function show(Worklog_Position $worklog_Position)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Worklog_Position  $worklog_Position
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Worklog_Position::findOrFail($id);
        return view('admin.worklog.positions.edit',compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Worklog_Position  $worklog_Position
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $item = Worklog_Position::findOrFail($id);
        $item ->name = $request->name;
        $item->save();
        return redirect()->route('admin.position.index')->withSuccess(trans('app.success_update'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Worklog_Position  $worklog_Position
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Worklog_Position::findOrFail($id)->delete();
        return redirect()->route('admin.position.index')->withSuccess(trans('Xóa thành công'));

    }
}
