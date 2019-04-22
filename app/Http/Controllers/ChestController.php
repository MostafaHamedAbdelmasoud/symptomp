<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('chests.chest1');
    }
    public function index2()
    {
        return view('chests.chest2');
    }
    public function index3()
    {
        return view('chests.chest3');
    }
    public function index4()
    {
        return view('chests.chest11');
    }
    public function index5()
    {
        return view('chests.chest12');
    }
    public function index6()
    {
        return view('chests.chest21');
    }
    public function index7()
    {
        return view('chests.chest22');
    }
    public function index8()
    {
        return view('chests.chest31');
    }
    public function index9()
    {
        return view('chests.chest32');
    }
    public function index10()
    {
        return view('chests.chest121');
    }
    public function index11()
    {
        return view('chests.chest211');
    }
    public function index12()
    {
        return view('chests.chest221');
    }
    public function index13()
    {
        return view('chests.chest321');
    }
    public function index14()
    {
        return view('chests.chest1211');
    }
    public function index15()
    {
        return view('chests.chest3211');
    }
    public function index16()
    {
        return view('chests.chest32111');
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
