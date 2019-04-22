<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Symptom;
use App\Post;

class SymptomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( )
    {
        //
        //$gender=$request->gender;
        $symptoms=Symptom::select('tag')->distinct()->get();
        
        
        return view('layouts.diagnosisanalysis',compact('symptoms'));

    }
    public function index2( )
    {
        //
        //$gender=$request->gender;
        $symptomss=Symptom::select('tag')->distinct()->get();
        
        $posts = Post::all();

  return view('welcome',compact(['symptomss','posts']));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function showDiagnosis( $request)
    {
        
        $diagnosis=Symptom::where('tag', $request )->get();
        $diagnosisName=$request ;
        return view('layouts.diagnosis',compact('diagnosis','diagnosisName'));


    }
    

    public function showDiagnosisDescription( $symptomname)
    {
        
        $diagnosisDescriptionss=Symptom::where('name', $symptomname )->get();
        $diagnosisDescriptionName=$symptomname ;
        return view('layouts.diagnosisDescription',compact('diagnosisDescriptionss','diagnosisDescriptionName'));


    }
    public function showDiagnosisDescriptionEyes( $symptomnameEyes)
    {
        
        $diagnosisDescriptionss=Symptom::where('name', $symptomnameEyes )->get();
        $diagnosisDescriptionName=$symptomnameEyes ;
        return view('layouts.diagnosisDescription2',compact('diagnosisDescriptionss','diagnosisDescriptionName'));


    }

    
    public function showDiagnosisDescriptionNose( $symptomnameNose)
    {
        
        $diagnosisDescriptionss=Symptom::where('name', $symptomnameNose )->get();
        $diagnosisDescriptionName=$symptomnameNose ;
        return view('layouts.diagnosisDescription3',compact('diagnosisDescriptionss','diagnosisDescriptionName'));


    }
    public function showDiagnosisDescriptionChest( $symptomnameChest)
    {
        
        $diagnosisDescriptionss=Symptom::where('name', $symptomnameChest )->get();
        $diagnosisDescriptionName=$symptomnameChest ;
        return view('layouts.diagnosisDescription4',compact('diagnosisDescriptionss','diagnosisDescriptionName'));


    } 
    public function showDiagnosisDescriptionElbow( $symptomnameElbow)
    {
        
        $diagnosisDescriptionss=Symptom::where('name', $symptomnameElbow )->get();
        $diagnosisDescriptionName=$symptomnameElbow ;
        return view('layouts.diagnosisDescription5',compact('diagnosisDescriptionss','diagnosisDescriptionName'));


    }
    public function showDiagnosisDescriptionLegs( $symptomnameLeg)
    {
        
        $diagnosisDescriptionss=Symptom::where('name', $symptomnameLeg )->get();
        $diagnosisDescriptionName=$symptomnameLeg ;
        return view('layouts.diagnosisDescription6',compact('diagnosisDescriptionss','diagnosisDescriptionName'));


    }

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
