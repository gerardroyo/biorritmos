<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Exception;
user 

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
        $fis = 23;
        $emo = 28;
        $intel = 33;

        $name = $request->input('name');
        $date = $request->input('fecha');

        $difDias = $this->DifDate($date);

        $diasFis = $this->CalcularDias($date, $difDias, $fis);
        $diasEmo = $this->CalcularDias($date, $difDias, $emo);
        $diasIntel = $this->CalcularDias($date, $difDias, $intel);

        $FisBarra = ($diasFis + 1) * 100 / 2;
        $EmoBarra = ($diasEmo + 1) * 100 / 2;
        $IntelBarra = ($diasIntel + 1) * 100 / 2;

        $date = date("d/m/Y", strtotime($request->input('fecha')));

      return view ('BIO/result', ['name' => $name,
            'nacimiento' => $date,
            'fisBarra' => $FisBarra,
            'emoBarra' => $EmoBarra,
            'intelBarra' => $IntelBarra]);
    }

    public function DifDate($date) {

        $today = $this->DateToday();

        $diff = $date->diff($today);
        return $diff;
    }

    public function DateToday() {
        $today = time();
        return $today;
    }

    public function CalcularDias($date, $difDias, $diasFis) {
        
        $timesBucle = sin($difDias / $diasFis);
        $rad = sin($timesBucle * 2 * pi());

        return $rad;
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
