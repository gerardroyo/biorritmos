<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Exception;

class CalculBio extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('BIO/form');
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
        if (empty($request->input('fecha')) || empty($request->input('name'))) {
            return view('errors.404');
        } else {
            $DiffDate = $this->DiffDate(time(), strtotime($request->input('fecha')));
            $fisico = $this->Calc($DiffDate, 23);
            $emocional = $this->Calc($DiffDate, 28);
            $intelectual = $this->Calc($DiffDate, 33);

            $FisiBarra = round($fisico, 0);
            $EmoBarra = round($emocional, 0);
            $IntelBarra = round($intelectual, 0);

            $date = date("d/m/Y", strtotime($request->input('fecha')));

            return view('BIO/result', [
                'nombre' => $request->input('name'), 'date' => $date, 'fisico' => $fisico, 'FisiBarra' => $FisiBarra, 'emocional' => $emocional, 'EmoBarra' => $EmoBarra, 'intelectual' => $intelectual, 'IntelBarra' => $IntelBarra]);
        }
    }

    public function DiffDate($today, $date)
    {
        try {
            return round(($today - $date) / (60 * 60 * 24)); // Diferència de dies
        } catch (Exception $e) {
            return view('errors.404');
        }
    }

    public function Calc($diff, $day)
    {
        try {

            $totally = $diff / $day;
            $totRad = sin($totally * 2 * pi());
            $tot = ($totRad + 1) * 100 / 2;

            return $tot;
        } catch (Exception $e) {
            return view('errors.404');
        }
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

