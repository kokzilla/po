<div class="row">
                <div class="col-lg-12">
                   <h2 class="page-header">{!! $header_text !!}</h2> 
                </div>
                <!-- /.col-lg-12 -->
            </div>
<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<div class="panel-heading">
					ส่วนที่ 1    
				</div>
			</div>

			<div class="panel-body">
	                <div class="row">
	                    <div class="col-lg-6">
							<div class="form-group">
							    {!! Form::label('job_app_no', 'เลขที่เอกสาร:') !!}
							     {!! Form::text('job_app_no',null, array('class' => 'form-control')) !!}
							</div>
							
							<div class="form-group">
							    {!! Form::label('pos_id', 'ตำแหน่ง:') !!}
							    {!! Form::select('pos_id', array('01'=>'คนขับ','02'=>'บัชี'),'01', array('class' => 'form-control')) !!}
							</div>
							<div class="form-group">
							    {!! Form::label('firstname', 'ชื่อ:') !!}
							    {!! Form::text('first_name',null, array('class' => 'form-control')) !!}
							</div>
							
							<div class="form-group">
							    {!! Form::submit($submit_text, ['class'=>'btn btn-primary']) !!}
							</div>


						</div>
						<div class="col-lg-6">
							<div class="form-group">
							    {!! Form::label('salary', 'เงินเดือนที่ต้องการ:') !!}
							    {!! Form::text('salary',null, array('class' => 'form-control')) !!}
							</div>
							<div class="form-group">
							    {!! Form::label('last_name', 'นามสกุล:') !!}
							    {!! Form::text('last_name',null, array('class' => 'form-control')) !!}
							</div>
						</div>
					</div>
			</div>			
		</div>
	</div>
</div>