@extends('hr.layout')
@section('content')
   <h3>รายชื่อผู้สมัคร</h3>
	
	 <a class="btn btn-default" href="/jobapps/create">
		<i class="fa fa-user-plus fa-2x pull-left"></i> สมัครใหม่
     </a>
	@if (!$jobapps->count())
	@else
		
		<table class="table table-striped table-bordered table-hover" id="dataTables-example">
			<thead>
				<tr>
					<th>No.</th>
					<th>ชื่อ-สกุล</th>
					<th>ตำแหน่ง</th>
					<th>เงินเดือน</th>
					<th>วันที่สมัคร</th>
					<th>แก้ไข</th>
				</tr>
			</thead>
			<tbody>
				@foreach( $jobapps as $jobapp)
					<tr>
						<td>
							{{$jobapp->job_app_no}}
						</td>
						<td>
							{{$jobapp->first_name}} {{$jobapp->last_name}}
						</td>
						<td>
							{{$jobapp->job_app_no}}
						</td>
						<td>
							{{$jobapp->salary}}
						</td>
						<td>
							{{$jobapp->created_at}}
						</td>
						<td>
							{!! link_to_route('jobapps.edit', 'แก้ไข', array($jobapp->job_app_id), array('class' => 'btn btn-info')) !!}
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
		 <!-- Page-Level Demo Scripts - Tables - Use for reference -->
		<script>

	@endif
@stop