@extends('hr.layout')
@section('content')
    <h2>แสดงรายชื่อผู้สมัคร</h2>
     @if ( !$jobapps->count() )
        You have no projects
    @else
        <ul>
            @foreach( $jobapps as $jobapp )
                <li>
                    {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('jobapp.destroy', $jobapp->slug))) !!}
                        <a href="{{ route('jobapp.show') }}">{{ $jobapp->firstname }}</a>
                        (
                            {!! link_to_route('jobapp.edit', 'Edit', array($jobapp->slug), array('class' => 'btn btn-info')) !!},
                            {!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}
                        )
                    {!! Form::close() !!}
                </li>
            @endforeach
        </ul>
    @endif
    <p>
        {!! link_to_route('jobapp.create', 'ผู้สมัครใหม่') !!}
    </p>
@stop