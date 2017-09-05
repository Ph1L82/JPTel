<?php

namespace jptel\Http\Controllers;

use Illuminate\Http\Request;
use jptel\Http\Requests\reportDates;
use jptel\Cdr;
use jptel\Http\Controllers\ExcelCreatorController;

class ConsumptionController extends Controller
{
    /**
     * GET PHONE CONSUMPTION DATA
     */
    public function getClinicsConsumptionByMonth(reportDates $request)
    {
        set_time_limit(240);
        $fromDate = $request->fromDate;
        $toDate   = $request->toDate;

        $consumption = Cdr::where('accountcode', '!=', 'callcenter')
            ->where('accountcode', '!=', 'comercial')
            ->where('accountcode', '!=', '')
            ->where('userfield', '!=', '')
            ->where('disposition', '=', 'ANSWERED')
            ->whereDate('calldate', '>', $fromDate)
            ->whereDate('calldate', '<', $toDate)
            ->select(
                'calldate',
                'accountcode',
                'src',
                'dst',
                'disposition',
                'billsec'
            )
            ->orderBy('calldate', 'desc')
            ->get();

        ExcelCreatorController::simpleExcel('ReporteLlamadas', 'Llamadas Realizadas', $consumption);

    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
