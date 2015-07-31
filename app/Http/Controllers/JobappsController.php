<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input;
use Redirect;
use App\Models\Hr\Jobapp;
use App\Models\Hr\Position;
use App\Models\Hr\Marriage;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class JobappsController extends Controller {

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
    public function index() {
        $jobapps = Jobapp::all();
        return view('hr.jobapps.index', compact('jobapps'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
		
		$positions = Position::lists('detail','pos_id');
		$marriages = Marriage::lists('status_name','status_id');
        return view('hr.jobapps.create',compact('positions','marriages'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request) {
        $this->validate($request, $this->rules);

        $input = Input::all();
        Jobapp::create($input);

        return Redirect::route('jobapps.index')->with('message', 'บันทึกข้อมูลการสมัครเรียบร้อย');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit(Jobapp $jobapp) {
		$positions = Position::lists('detail','pos_id');
		$marriages = Marriage::lists('status_name','status_id');
        return view('hr.jobapps.edit', compact('jobapp','positions','marriages'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Jobapp $jobapp) {
		
        $input = array_except(Input::all(),'_method');
		//$input = Input::except(['_method', '_token']);
		$jobapp->update($input);
		
		return Redirect::route('jobapps.index')->with('message', 'บันทึกข้อมูลการสมัครเรียบร้อย');
    }

    public function search() {
        return view('hr.jobapps.list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        
    }

}
