<?php

namespace App\Http\Controllers;

use App\Models\Krs;
use Illuminate\Http\Request;
use Carbon\Carbon;
use stdClass;


class KrsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $krs = Krs::with('jadwal')->get();

        $data = new stdClass;
        $data->count = $krs->count();
        $data->datetime = Carbon::now();

        return response()->json($krs);
      
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
     * @param  \App\Models\Krs  $krs
     * @return \Illuminate\Http\Response
     */
    public function show($semester)
    {
        //
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Krs  $krs
     * @return \Illuminate\Http\Response
     */
    public function edit(Krs $krs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Krs  $krs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Krs $krs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Krs  $krs
     * @return \Illuminate\Http\Response
     */
    public function destroy(Krs $krs)
    {
        //
    }
}
