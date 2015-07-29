<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Input;
use Redirect;
use App\Models\Hr\Jobapp;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class JobappsController extends Controller
{
	
	/**
	* Server side validate
	*/
	protected $rules = [        
        'first_name' => ['required'],        
        
    ];
	
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
		$jobapps = Jobapp::all();
        return view('hr.jobapps.index',compact('jobapps'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('hr.jobapps.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
		$this->validate($request, $this->rules);
		
        $input = Input::all();
        Jobapp::create( $input );
 
        return Redirect::route('jobapps.index')->with('message', 'บันทึกข้อมูลการสมัครเรียบร้อย');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    public function search(){
        return view('hr.jobapps.list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
