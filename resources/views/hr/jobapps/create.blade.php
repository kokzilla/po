@extends('hr.layout')

@section('content')
	
	{!! Form::model(new App\Models\Hr\Jobapp, ['route' => ['jobapps.store']]) !!}
        @include('hr/jobapps/_form', ['submit_text' => 'บันทึกข้อมูล','header_text'=>'สร้างใบสมัครงาน'])
    {!! Form::close() !!} 

@stop