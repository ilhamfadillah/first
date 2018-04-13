<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Ixudra\Curl\Facades\Curl;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Facades\Excel;
use Codedge\Fpdf\Fpdf\Fpdf;

class StockController extends Controller
{
    public function excel() {
        $responses = Curl::to('https://www.bloomberg.com/markets2/api/history/BBCA%3AIJ/PX_LAST?timeframe=5_YEAR&period=weekly&volumePeriod=weekly')->get();
        $res = json_decode($responses, true);
        $res_count = count($res[0]['price']);
        $dtime = array();
        $dtime_count = count($dtime);
        $value = array();
        $value_count = count($value);
        for($i=0; $i<$res_count; $i++){
            array_push($dtime, $res[0]['price'][$i]['dateTime']);
            array_push($value, $res[0]['price'][$i]['value']);
        }
    }
    
    public function pdf(Fpdf $pdf) {
        $responses = Curl::to('https://www.bloomberg.com/markets2/api/history/BBCA%3AIJ/PX_LAST?timeframe=5_YEAR&period=weekly&volumePeriod=weekly')->get();
        $res = json_decode($responses, true);
        $res_count = count($res[0]['price']);
        $dtime = array();
        $dtime_count = count($dtime);
        $value = array();
        $value_count = count($value);
        for($i=0; $i<$res_count; $i++){
            array_push($dtime, $res[0]['price'][$i]['dateTime']);
            array_push($value, $res[0]['price'][$i]['value']);
        }  
        //create pdf document
        $pdf = new FPDF;
        $pdf->AddPage();
        $pdf->SetFont('Arial','B',16);
        $pdf->Cell(40,10,'BBCA Stock');
        $pdf->Ln();
        $pdf->Cell(40,10,'Date Time');
        $pdf->Cell(40,10,'Value');
        $pdf->Ln();
        $pdf->SetFont('Arial',null,12);
        for($i=0; $i<$res_count; $i++){
            $pdf->Cell(40,5, $dtime[$i]);
            $pdf->Cell(40,5, $value[$i]);
            $pdf->Ln();
        }
        $pdf->output();
        exit;
    }
    public function index()
    {
        $response = Curl::to('https://www.bloomberg.com/markets2/api/history/BBCA%3AIJ/PX_LAST?timeframe=5_YEAR&period=weekly&volumePeriod=weekly')->get();
        //dd($response);
        //return view("bbca.index")->with;
        //var_dump($response);
        return view("bbca.index", compact('response'));
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
