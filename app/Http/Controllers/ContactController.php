<?php

namespace App\Http\Controllers;
use Session;
use App\Notifications\SendContactNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;


class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    public function showForm()
    {
        //
        return view('layouts.form');
    }
    public function sendEmail(Request $request)
    {
        
        $validator=\Validator::make($request->all(),[        
'name'=>'required|max:225|string',
'email'=>'required|email|max:225',
'age'=>'required'

     
         ]);   
         
         Notification::route('mail', 'test@gmail.com')
                      ->notify(new SendContactNotification($request));

        
                      Session::flash('success', 'The email was sent successfully!');
                      return redirect()->route('welcome');
 





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
