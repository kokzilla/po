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
                    <div class="col-md-4 ">
                        <div class="form-group">
							
                            {!! Form::label('job_app_no', 'เลขที่เอกสาร:') !!}
                            {!! Form::text('job_app_no',null, array('required','class' => 'form-control')) !!}
                        </div>
                 
						
						
					</div>
					<div class="col-md-8 ">
						<div class="form-group">
							{!! Form::label('pos_id', 'ตำแหน่ง:') !!}		
							
							{!! Form::select('pos_id', $positions, null,array('class' => 'form-control')) !!}
								
						</div>
						
						<div class="form-group">
                            {!! Form::label('salary', 'เงินเดือนที่ต้องการ:') !!}
                            {!! Form::text('salary',null, array('required','class' => 'form-control')) !!}
                        </div>
						
					</div>
				</div>
				
				<div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            {!! Form::label('firstname', 'ชื่อ:') !!}
                            {!! Form::text('first_name',null, array('required','class' => 'form-control')) !!}
                        </div>
					</div>
					<div class="col-md-4">
                        <div class="form-group">
                            {!! Form::label('last_name', 'นามสกุล:') !!}
                            {!! Form::text('last_name',null, array('required','class' => 'form-control')) !!}
                        </div>
                    </div>
					<div class="col-md-4">
                        <div class="form-group">
                            {!! Form::label('nick_name', 'ชื่อเล่น:') !!}
                            {!! Form::text(null,null, array('class' => 'form-control')) !!}
                        </div>
                    </div>

                </div>
				<div class="row">
					<div class="form-group">
						{!! Form::label('date_of_birth', 'วันเกิด:') !!}
						{!! Form::text(null,null, array('class' => 'form-control')) !!}
						
					</div>
					<div class="form-group">
						{!! Form::label('race', 'เชื้อชาติ:') !!}
						{!! Form::select(null, array('ไทย'=>'ไทย','พม่า'=>'พม่า','ลาว'=>'ลาว','กัมพูชา'=>'กัมพูชา','อื่น'=>'อื่น'),'ไทย', array('class' => 'form-control')) !!}
					</div>
					<div class="form-group">
						{!! Form::label('nation', 'สัญชาติ') !!}
						{!! Form::select(null, array('ไทย'=>'ไทย','พม่า'=>'พม่า','ลาว'=>'ลาว','กัมพูชา'=>'กัมพูชา','อื่น'=>'อื่น'),'ไทย', array('class' => 'form-control')) !!}
					</div>
					<div class="form-group">
						{!! Form::label('religion', 'ศาสนา:') !!}
						{!! Form::select(null, array('พุทธ'=>'พุทธ','คริสต์'=>'คริสต์','อิสลาม'=>'อิสลาม','ฮินดู'=>'ฮินดู','อื่น'=>'อื่น'),'พุทธ', array('class' => 'form-control')) !!}
					</div>
				</div>
				<div class="row">
					<div class="form-group">
						{!! Form::label('id_card', 'บัตรประจำตัวประชาชน:') !!}
						{!! Form::text(null,null, array('class' => 'form-control')) !!}
					</div>
					<div class="form-group">
						{!! Form::label('date_of_expiry', 'บัตรหมดอายุ:') !!}
						{!! Form::text(null,null, array('class' => 'form-control')) !!}
					</div>
				</div>
				<div class="row">
					<div class="form-group">
						{!! Form::label('address', 'ที่อยู่ตามบัตรประชาชน') !!}
						{!! Form::text(null,null, array('class' => 'form-control')) !!}
					</div>					
				</div>
				<div class="row">
					<div class="form-group">
						{!! Form::label('province', 'จังหวัด:') !!}
						{!! Form::text(null,null, array('class' => 'form-control')) !!}
					</div>	
					<div class="form-group">
						{!! Form::label('tel', 'โทรศัพท์:') !!}
						{!! Form::text(null,null, array('class' => 'form-control')) !!}
					</div>
					
				</div>
				<div class="row">
					<div class="form-group">
						
						{!! Form::checkbox(null,'1',true) !!}
						{!! Form::label('sameaddress', 'ที่อยู่ปัจจุบันตรงกับที่อยู่ในบัตรประชาชน:') !!}
						
					</div>
				</div>
				<div class="row">
					<div class="form-group">
						{!! Form::label('address2', 'ที่อยู่ปัจจุบัน') !!}
						{!! Form::text(null,null, array('class' => 'form-control')) !!}
					</div>					
				</div>
				<div class="row">
					<div class="form-group">
						{!! Form::label('province2', 'จังหวัด:') !!}
						{!! Form::text(null,null, array('class' => 'form-control')) !!}
					</div>	
					<div class="form-group">
						{!! Form::label('tel2', 'โทรศัพท์:') !!}
						{!! Form::text(null,null, array('class' => 'form-control')) !!}
					</div>					
				</div>
				<div>
					<div class="form-group">
						{!! Form::label('', 'เพศ:') !!}
					</div>
				</div>
				<div class="row">
					<div class="form-group">
						{!! Form::label('', 'สถานภาพ:') !!}
						{!! Form::select(null,$marriages, array('class' => 'form-control')) !!}
					</div>
				</div>
				<div class="row">
					<div class="form-group">
						{!! Form::label('spouse_name', 'ชื่อสามี-ภรรยา:') !!}
						{!! Form::text(null,null, array('class' => 'form-control')) !!}
					</div>	
					<div class="form-group">
						{!! Form::label('spouse_age', 'อายุ:') !!}
						{!! Form::text(null,null, array('class' => 'form-control')) !!}
					</div>
					<div class="form-group">
						{!! Form::label('spouse_race', 'เชื้อชาติ:') !!}
						{!! Form::select(null, array('ไทย'=>'ไทย','พม่า'=>'พม่า','ลาว'=>'ลาว','กัมพูชา'=>'กัมพูชา','อื่น'=>'อื่น'),'ไทย', array('class' => 'form-control')) !!}
					</div>
					<div class="form-group">
						{!! Form::label('spouse_nation', 'สัญชาติ') !!}
						{!! Form::select(null, array('ไทย'=>'ไทย','พม่า'=>'พม่า','ลาว'=>'ลาว','กัมพูชา'=>'กัมพูชา','อื่น'=>'อื่น'),'ไทย', array('class' => 'form-control')) !!}
					</div>					
				</div>
				<div class="row">
					<div class="form-group">
						{!! Form::label('spouse_job', 'อาชีพ:') !!}
						{!! Form::text(null,null, array('class' => 'form-control')) !!}
					</div>	
					<div class="form-group">
						{!! Form::label('spouse_workplace', 'ที่ทำงาน:') !!}
						{!! Form::text(null,null, array('class' => 'form-control')) !!}
					</div>
					<div class="form-group">
						{!! Form::label('spouse_tel', 'ที่ทำงาน:') !!}
						{!! Form::text(null,null, array('class' => 'form-control')) !!}
					</div>					
				</div>
				<div class="row">
					<div class="form-group">
						{!! Form::label('children_no', 'จำนวนบุตร:') !!}
						{!! Form::text(null,null, array('class' => 'form-control')) !!}
					</div>					
				</div>
				<div class="row">
					<div class="form-group">
						1.
						{!! Form::label('childname1', 'ชื่อ:') !!}
						{!! Form::text(null,null, array('class' => 'form-control')) !!}
						
					</div>		
					<div class="form-group">						
						{!! Form::label('childage1', 'อายุ:') !!}
						{!! Form::text(null,null, array('class' => 'form-control')) !!}
						ปี
					</div>					
				</div>
				<div class="row">
					<div class="form-group">
						2.
						{!! Form::label('childname2', 'ชื่อ:') !!}
						{!! Form::text(null,null, array('class' => 'form-control')) !!}
						
					</div>		
					<div class="form-group">						
						{!! Form::label('childage2', 'อายุ:') !!}
						{!! Form::text(null,null, array('class' => 'form-control')) !!}
						ปี
					</div>					
				</div>
				<div class="row">
					<div class="form-group">
						3
						{!! Form::label('childname3', 'ชื่อ:') !!}
						{!! Form::text(null,null, array('class' => 'form-control')) !!}
						
					</div>		
					<div class="form-group">						
						{!! Form::label('childage3', 'อายุ:') !!}
						{!! Form::text(null,null, array('class' => 'form-control')) !!}
						ปี
					</div>					
				</div>
				
                <div class="form-group">
                    {!! Form::submit($submit_text, ['class'=>'btn btn-primary ']) !!}
                    <a href="/jobapps" type="button" class="btn btn-primary">ยกเลิก</a>
                </div>
            </div>			
        </div>
		<div class="panel panel-default">
				<div class="panel-heading">
					<div class="panel-heading">
						ส่วนที่ 2    
					</div>
				</div>
				<div class="panel-body">				
					<div class="row">
						<div class="form-group">
							{!! Form::label('father_name', 'ชื่อบิดา:') !!}
							{!! Form::text(null,null, array('class' => 'form-control')) !!}
						</div>	
						<div class="form-group">
							{!! Form::label('father_age', 'อายุ:') !!}
							{!! Form::text(null,null, array('class' => 'form-control')) !!}
						</div>
						<div class="form-group">
							{!! Form::label('father_job', 'อาชีพ:') !!}
							{!! Form::text(null,null, array('class' => 'form-control')) !!}
						</div>
						<div class="form-group">
							{!! Form::label('father_race', 'เชื้อชาติ:') !!}
							{!! Form::select(null, array('ไทย'=>'ไทย','พม่า'=>'พม่า','ลาว'=>'ลาว','กัมพูชา'=>'กัมพูชา','อื่น'=>'อื่น'),'ไทย', array('class' => 'form-control')) !!}
						</div>						
					</div>
					<div class="row">
						<div class="form-group">
							{!! Form::label('father_nation', 'สัญชาติ') !!}
							{!! Form::select(null, array('ไทย'=>'ไทย','พม่า'=>'พม่า','ลาว'=>'ลาว','กัมพูชา'=>'กัมพูชา','อื่น'=>'อื่น'),'ไทย', array('class' => 'form-control')) !!}
						</div>
						<div class="form-group">
							{!! Form::label('father_tel', 'โทรศัพท์') !!}
							{!! Form::text(null,null, array('class' => 'form-control')) !!}
						</div>
						<div class="form-group">
							<label class="checkbox-inline">
							  <input type="checkbox" id="inlineCheckbox1" value="option1"> ยังมีชีวิตอยู่
							</label>
							<label class="checkbox-inline">
							  <input type="checkbox" id="inlineCheckbox2" value="option2"> เสียชีวิตแล้ว
							</label>
						</div>
						
					</div>
					
					<div class="row">
						<div class="form-group">
							{!! Form::label('mother_name', 'ชื่อมารดา:') !!}
							{!! Form::text(null,null, array('class' => 'form-control')) !!}
						</div>	
						<div class="form-group">
							{!! Form::label('mother_age', 'อายุ:') !!}
							{!! Form::text(null,null, array('class' => 'form-control')) !!}
						</div>
						<div class="form-group">
							{!! Form::label('mother_job', 'อาชีพ:') !!}
							{!! Form::text(null,null, array('class' => 'form-control')) !!}
						</div>
						<div class="form-group">
							{!! Form::label('mother_race', 'เชื้อชาติ:') !!}
							{!! Form::select(null, array('ไทย'=>'ไทย','พม่า'=>'พม่า','ลาว'=>'ลาว','กัมพูชา'=>'กัมพูชา','อื่น'=>'อื่น'),'ไทย', array('class' => 'form-control')) !!}
						</div>						
					</div>
					<div class="row">
						<div class="form-group">
							{!! Form::label('mother_nation', 'สัญชาติ') !!}
							{!! Form::select(null, array('ไทย'=>'ไทย','พม่า'=>'พม่า','ลาว'=>'ลาว','กัมพูชา'=>'กัมพูชา','อื่น'=>'อื่น'),'ไทย', array('class' => 'form-control')) !!}
						</div>
						<div class="form-group">
							{!! Form::label('mother_tel', 'โทรศัพท์') !!}
							{!! Form::text(null,null, array('class' => 'form-control')) !!}
						</div>
						<div class="form-group">
							<div class="form-group">
								<label class="checkbox-inline">
								  <input type="checkbox" id="inlineCheckbox1" value="option1"> ยังมีชีวิตอยู่
								</label>
								<label class="checkbox-inline">
								  <input type="checkbox" id="inlineCheckbox2" value="option2"> เสียชีวิตแล้ว
								</label>
							</div>
						</div>						
					</div>
					<div class="row">
						<div class="form-group">
							{!! Form::label('dependents', 'มีพี่น้อง') !!}
							{!! Form::text(null,null, array('class' => 'form-control')) !!}
						</div>
						<div class="form-group">
							{!! Form::label('dep_male', 'ชาย') !!}
							{!! Form::text(null,null, array('class' => 'form-control')) !!}
						</div>
						<div class="form-group">
							{!! Form::label('dep_female', 'หญิง') !!}
							{!! Form::text(null,null, array('class' => 'form-control')) !!}
						</div>
						<div class="form-group">
							{!! Form::label('dependents_no', 'เป็นบุตรคนที่') !!}
							{!! Form::text(null,null, array('class' => 'form-control')) !!}
						</div>
					</div>
				

				</div>
		</div>		
		<div class="panel panel-default">
			<div class="panel-heading">
				<div class="panel-heading">
					ส่วนที่ 3    
				</div>
			</div>
			<div class="panel-body">				
				<div class="row">
					<div class="form-group">
						{!! Form::label('education', 'วุฒิการศึกษาจบชั้น:') !!}
						{!! Form::text(null,null, array('class' => 'form-control')) !!}
					</div>
					<div class="form-group">
						{!! Form::label('education', 'สาชาวิชา:') !!}
						{!! Form::text(null,null, array('class' => 'form-control')) !!}
					</div>
				</div>
				<div class="row">
					<div class="form-group">
						{!! Form::label('graduated_from', 'จบสถานศึกษา:') !!}
						{!! Form::text(null,null, array('class' => 'form-control')) !!}
					</div>
					<div class="form-group">
						{!! Form::label('graduated_year', 'เมื่อปี พ.ศ.:') !!}
						{!! Form::text(null,null, array('class' => 'form-control')) !!}
					</div>
				</div>
			</div>
		</div>
		
		
		<div class="panel panel-default">
				<div class="panel-heading">
					<div class="panel-heading">
						ส่วนที่ 4   
					</div>
				</div>
				<div class="panel-body">				
					<div class="row">
						<div class="form-group">
							{!! Form::label('job_his', 'ประวัติการทำงาน/สถานที่เคยทำงาน:') !!}
							{!! Form::text(null,null, array('class' => 'form-control')) !!}
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
