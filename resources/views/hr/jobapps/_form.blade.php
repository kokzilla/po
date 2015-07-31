<div class="row">
    <div class="col-lg-12">
        <h2 class="page-header">{!! $header_text !!}</h2> 
    </div>
    <!-- /.col-lg-12 -->
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-success" id="personal-data">
            <div class="panel-heading">                
                ส่วนที่ 1  ข้อมูลส่วนตัว                  
            </div>
            <div class="panel-body">
                <div class ="row">
                    <div class="col-md-6">
                        <div class="form-group">							
                            {!! Form::label('job_app_no', 'เลขที่เอกสาร:') !!}
                            {!! Form::text('job_app_no',null, array('required','class' => 'form-control')) !!}
                        </div>  

                    </div>					
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>รูปผู้สมัคร</label>
                            <input type="file">
                        </div>
                    </div>
                </div>
                <div class="row">       
                     <div class="col-md-1">                           
                         {!! Form::label('pos_id', 'ตำแหน่ง:') !!}	                  
                    </div>
                    <div class="col-md-11">
                        <div class="form-group">
                            							
                            {!! Form::select('pos_id', $positions, null,array('class' => 'form-control')) !!}

                        </div>						
                        <div class="form-group">
                            {!! Form::label('salary', 'เงินเดือนที่ต้องการ:') !!}
                            {!! Form::text('salary',null, array('required','class' => 'form-control')) !!}
                        </div>						
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-1">                           
                         {!! Form::label('prefix', 'คำนำหน้า:') !!}                     
                    </div>
                    <div class="col-md-7">
                        <div class="form-group">
                            
                            {!! Form::select(null, array('นาย'=>'นาย','นาง'=>'นาง','นางสาว'=>'นางสาว','อื่น'=>'อื่น'),'นาย', array('class' => 'form-control')) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('firstname', 'ชื่อ:') !!}
                            {!! Form::text('first_name',null, array('required','class' => 'form-control')) !!}
                        </div>
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
                    <div class="col-md-1">                           
                         {!! Form::label('date_of_birth', 'วันเกิด:') !!}                        
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">                            

                            <div class='input-group date' id='datetimepicker1'>
                                <input type='text' class="form-control" />
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        
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
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            {!! Form::label('id_card', 'บัตรประจำตัวประชาชน:') !!}
                            {!! Form::text(null,null, array('class' => 'form-control')) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('date_of_expiry', 'บัตรหมดอายุ:') !!}
                            <div class='input-group date' id='datetimepicker2'>
                                <input type='text' class="form-control" />
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            {!! Form::label('address', 'ที่อยู่ตามบัตรประชาชน:') !!}
                            {!! Form::text(null,null, array('class' => 'form-control')) !!}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-1">
                         {!! Form::label('province', 'จังหวัด:') !!}
                    </div>
                    <div class="col-md-11">
                        <div class="form-group">
                            
                            {!! Form::text(null,null, array('class' => 'form-control')) !!}
                        </div>	
                        <div class="form-group">
                            {!! Form::label('tel', 'โทรศัพท์:') !!}
                            {!! Form::text(null,null, array('class' => 'form-control')) !!}
                        </div>
                    </div>
                </div>
                <div class="row">
                    
                    <div class="col-md-12">
                        <div class="form-group">

                            {!! Form::checkbox(null,'1',true) !!}
                            {!! Form::label('sameaddress', 'ที่อยู่ปัจจุบันตรงกับที่อยู่ในบัตรประชาชน:') !!}

                        </div>

                    </div>
                </div>
                <div class="row">
                     <div class="col-md-1">
                         {!! Form::label('address2', 'ที่อยู่ปัจจุบัน') !!}
                    </div>
                    <div class="col-md-11">						
                        <div class="form-group">
                           
                            {!! Form::text(null,null, array('class' => 'form-control')) !!}
                        </div>		
                    </div>
                </div>
                <div class="row">
                     <div class="col-md-1">
                        {!! Form::label('', 'จังหวัด:') !!}
                    </div>
                    <div class="col-md-11">
                        <div class="form-group">
                            
                            {!! Form::text(null,null, array('class' => 'form-control')) !!}
                        </div>	
                        <div class="form-group">
                            {!! Form::label('tel2', 'โทรศัพท์:') !!}
                            {!! Form::text(null,null, array('class' => 'form-control')) !!}
                        </div>	
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-1">
                        {!! Form::label('', 'เพศ:') !!}
                    </div>
                    
                     <div class="col-md-11">
                         <div class="form-group">
                            
                         </div>
                        
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-1">
                        {!! Form::label('', 'สถานภาพ:') !!}
                    </div>
                    <div class="col-md-11">
                        <div class="form-group">
                            
                            {!! Form::select(null,$marriages, array('class' => 'form-control')) !!}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-1">
                         {!! Form::label('father_name', 'ชื่อสามี-ภรรยา:') !!}
                    </div>
                    <div class="col-md-11">
                        <div class="form-group">
                            
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
                </div>
                <div class="row">
                     <div class="col-md-1">
                         {!! Form::label('spouse_job', 'อาชีพ:') !!}
                    </div>
                    <div class="col-md-11">
                        <div class="form-group">
                            
                            {!! Form::text(null,null, array('class' => 'form-control')) !!}
                        </div>	
                        <div class="form-group">
                            {!! Form::label('spouse_workplace', 'ที่ทำงาน:') !!}
                            {!! Form::text(null,null, array('class' => 'form-control')) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('spouse_tel', 'โทร:') !!}
                            {!! Form::text(null,null, array('class' => 'form-control')) !!}
                        </div>		
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-1">
                         {!! Form::label('spouse_job', 'จำนวนบุตร:') !!}
                    </div>
                    <div class="col-md-11">
                        <div class="form-group">
                            
                            {!! Form::text(null,null, array('class' => 'form-control')) !!}
                        </div>		
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
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
                </div>
                <div class="row">
                    <div class="col-md-12">
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
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            3.
                            {!! Form::label('childname3', 'ชื่อ:') !!}
                            {!! Form::text(null,null, array('class' => 'form-control')) !!}

                        </div>		
                        <div class="form-group">						
                            {!! Form::label('childage3', 'อายุ:') !!}
                            {!! Form::text(null,null, array('class' => 'form-control')) !!}
                            ปี
                        </div>		
                    </div>
                </div>


            </div>			
        </div>
        <div class="panel panel-success" id="family-data">
            <div class="panel-heading">

                ส่วนที่ 2 ข้อมูลครอบครัว   

            </div>
            <div class="panel-body">				
                <div class="row">
                    <div class="col-md-1">
                         {!! Form::label('father_name', 'ชื่อบิดา:') !!}
                    </div>
                    <div class="col-md-11">
                        <div class="form-group">
                            
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
                </div>
                <div class="row">
                    <div class="col-md-1">
                         {!! Form::label('father_nation', 'สัญชาติ') !!}
                    </div>
                    <div class="col-md-11">
                        <div class="form-group">
                            
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
                </div>

                <div class="row">
                    <div class="col-md-1">
                         {!! Form::label('mother_name', 'ชื่อมารดา:') !!}
                    </div>
                    <div class="col-md-11">
                        <div class="form-group">
                            
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
                </div>
                <div class="row">
                     <div class="col-md-1">
                         {!! Form::label('mother_nation', 'สัญชาติ') !!}
                    </div>
                    <div class="col-md-11">
                        <div class="form-group">
                            
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
                </div>
                <div class="row">
                    <div class="col-md-1">
                         {!! Form::label('dependents', 'มีพี่น้อง') !!}
                    </div>
                    <div class="col-md-11">
                        <div class="form-group">
                           
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
        </div>		
        <div class="panel panel-success" id="edu-data">
            <div class="panel-heading">

                ส่วนที่ 3  การศึกษา  

            </div>
            <div class="panel-body">				
                <div class="row">
                    <div class="col-md-2">
                        {!! Form::label('education', 'วุฒิการศึกษาจบชั้น:') !!}
                    </div>
                    <div class="col-md-10">
                        <div class="form-group">
                            
                            {!! Form::text(null,null, array('class' => 'form-control')) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('education', 'สาขาวิชา:') !!}
                            {!! Form::text(null,null, array('class' => 'form-control')) !!}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        {!! Form::label('graduated_from', 'จบสถานศึกษา:') !!}
                    </div>
                    <div class="col-md-10">
                        <div class="form-group">
                            
                            {!! Form::text(null,null, array('class' => 'form-control')) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('graduated_year', 'เมื่อปี พ.ศ.:') !!}
                            {!! Form::text(null,null, array('class' => 'form-control')) !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="panel panel-success" id="job-history-data">
            <div class="panel-heading">
                ส่วนที่ 4   ประวัติการทำงาน
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            {!! Form::label('job_ex', 'ประวัติการทำงาน/สถานที่เคยทำงาน:') !!}
                        </div>
                    </div>                
                    <div class="col-md-9">                        
                        <div class="form-group">                            
                            {!! Form::text(null,null, array('class' => 'form-control')) !!}
                        </div>
                        <div class="form-group">        
                            {!! Form::label('job_ex_year', 'ประวัติการทำงาน/สถานที่เคยทำงาน:') !!}
                            {!! Form::text(null,null, array('class' => 'form-control')) !!}
                        </div>
                    </div>

                </div>
                <div class="row">               
                    <div class="col-md-3">
                        <div class="form-group">
                            {!! Form::label('job_ex_pos_id', 'ตำแหน่ง:') !!}
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="form-group">                            
                            {!! Form::text(null,null, array('class' => 'form-control')) !!}
                        </div>
                        <div class="form-group">        
                            {!! Form::label('job_ex_reason', 'สาเหตุที่ออก:') !!}
                            {!! Form::text(null,null, array('class' => 'form-control')) !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel panel-success" id="skill-data">
            <div class="panel-heading">
                ส่วนที่ 5 ความสามารถพิเศษ   
            </div>
            <div class="panel-body">
                <div class="row">               
                    <div class="col-md-2">
                        <div class="form-group"> 
                            {!! Form::label(null, 'คอมพิวเตอร์:') !!}

                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            {!! Form::checkbox(null,null, array('class' => 'form-control')) !!}
                            {!! Form::label(null, 'ได้:') !!}
                            {!! Form::checkbox(null,null, array('class' => 'form-control')) !!}
                            {!! Form::label(null, 'ไม่ได้:') !!}

                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            {!! Form::label(null, 'โปรแกรม: ') !!}
                            {!! Form::text(null,null, array('class' => 'form-control')) !!}
                        </div>

                    </div>

                </div>
                <div class="row">               
                    <div class="col-md-2">
                        <div class="form-group"> 
                            {!! Form::label(null, 'ขับรถยนต์:') !!}

                        </div>
                    </div>
                    <div class="col-md-10">
                        <div class="form-group">
                            {!! Form::checkbox(null,null, array('class' => 'form-control')) !!}
                            {!! Form::label(null, 'ได้:') !!}
                            {!! Form::checkbox(null,null, array('class' => 'form-control')) !!}
                            {!! Form::label(null, 'ไม่ได้:') !!}

                        </div>
                    </div>


                </div>
                <div class="row">               
                    <div class="col-md-2">
                        <div class="form-group"> 
                            {!! Form::label(null, 'ใบขับขี่เลขที่:') !!}
                        </div>
                    </div>
                    <div class="col-md-10">
                        <div class="form-group">
                            {!! Form::text(null,null, array('class' => 'form-control')) !!}
                            {!! Form::label(null, 'หมดอายุวันที่:') !!}
                            <div class='input-group date' id='datetimepicker1'>
                                <input type='text' class="form-control" />
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                            </div>
                            {!! Form::label(null, 'อื่น ๆ :') !!}
                            {!! Form::text(null,null, array('class' => 'form-control')) !!}

                        </div>
                    </div>               
                </div>

                <div class="row">               
                    <div class="col-md-2">
                        <div class="form-group"> 
                            {!! Form::label(null, 'สามารถไปปฏิบัติงานต่างอำเภอ:') !!}
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            {!! Form::checkbox(null,null, array('class' => 'form-control')) !!}
                            {!! Form::label(null, 'ได้:') !!}
                            {!! Form::checkbox(null,null, array('class' => 'form-control')) !!}
                            {!! Form::label(null, 'ไม่ได้:') !!}

                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            {!! Form::label(null, 'อื่น ๆ: ') !!}
                            {!! Form::text(null,null, array('class' => 'form-control')) !!}
                        </div>

                    </div>              
                </div>

                <div class="row">               
                    <div class="col-md-2">
                        <div class="form-group"> 
                            {!! Form::label(null, 'เคยสมัครงานกับบริษัทมาก่อน:') !!}
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            {!! Form::checkbox(null,null, array('class' => 'form-control')) !!}
                            {!! Form::label(null, 'เคย:') !!}
                            {!! Form::checkbox(null,null, array('class' => 'form-control')) !!}
                            {!! Form::label(null, 'ไม่เคย:') !!}

                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            {!! Form::label(null, 'เมื่อไหร่: ') !!}
                            {!! Form::text(null,null, array('class' => 'form-control')) !!}
                        </div>

                    </div>              
                </div>
            </div>
        </div>

        <div class="panel panel-success" id="ref-person-data">
            <div class="panel-heading">
                ส่วนที่ 6 บุคคลอ้างอิง   
            </div>
            <div class="panel-body">
                <div class="row">               
                    <div class="col-md-2">
                        <div class="form-group"> 
                            {!! Form::label(null, 'บุคคลอ้างอิง:') !!}
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            {!! Form::checkbox(null,null, array('class' => 'form-control')) !!}
                            {!! Form::label(null, 'มี:') !!}
                            {!! Form::checkbox(null,null, array('class' => 'form-control')) !!}
                            {!! Form::label(null, 'ไม่มี:') !!}

                        </div>
                    </div>
                    <div class="col-md-8">
                        <p>บุคคลรู้จักที่ทำงานอยู่ที่ บริษัท พี โอ ออยล์ จำกัด</p>
                    </div>                              
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            1.
                            {!! Form::label('ref1', 'ชื่อ:') !!}
                            {!! Form::text(null,null, array('class' => 'form-control')) !!}

                        </div>		
                        <div class="form-group">						
                            {!! Form::label('refage1', 'เกี่ยวข้องเป็น:') !!}
                            {!! Form::text(null,null, array('class' => 'form-control')) !!}
                            ปี
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            2.
                            {!! Form::label('ref2', 'ชื่อ:') !!}
                            {!! Form::text(null,null, array('class' => 'form-control')) !!}

                        </div>		
                        <div class="form-group">						
                            {!! Form::label('refage2', 'เกี่ยวข้องเป็น:') !!}
                            {!! Form::text(null,null, array('class' => 'form-control')) !!}
                            ปี
                        </div>	
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-6">
                        <div class="form-group"> 
                            {!! Form::label(null, 'สามารถเข้ามาทำงานตั้งแต่วันที่:') !!}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class='input-group date' id='datetimepicker1'>
                                <input type='text' class="form-control" />
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                            </div>

                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-6">

                        <strong>หากข้าพเจ้าไม่ปฏิบัติตามเงื่อนไข ขอบริจาคเงินให้กับ</strong>

                    </div>
                    <div class="col-md-6">
                        <div class="form-group"> 
                            {!! Form::checkbox(null,null, array('class' => 'form-control')) !!}
                            {!! Form::label(null, 'วัด') !!}
                            {!! Form::checkbox(null,null, array('class' => 'form-control')) !!}
                            {!! Form::label(null, 'โรงเรียน') !!}
                            {!! Form::checkbox(null,null, array('class' => 'form-control')) !!}
                            {!! Form::label(null, 'สถานสงเคราะห์เด็ก') !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="panel panel-success" id="doc-data">
            <div class="panel-heading">
                เอกสารประกอบการสมัครงาน
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                        <label for="">สำเนาบัตรประชาชน</label>
                        <input type="file" id="exampleInputFile">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label for="">สำเนาทะเบียนบ้าน</label>
                        <input type="file" id="exampleInputFile">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label for="">สำเนาวุฒิการศึกษา</label>
                        <input type="file" id="exampleInputFile">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label for="">รูปถ่าย 1 นิ้ว</label>
                        <input type="file" id="exampleInputFile">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label for="">ใบขับขี่ประเภท 4  (กรณีสมัครขับรถน้ำมัน/ก๊าซ)</label>
                        <input type="file" id="exampleInputFile">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label for="">บัตรพนักงานบรรจก๊าซ (กรณีสมัครขับรถก๊าซ)</label>
                        <input type="file" id="exampleInputFile">
                    </div>
                </div>
            </div>
        </div>

        <div class="panel panel-success" id="doc-data">
            <div class="panel-heading">
                การพิจารณาว่าจ้าง
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="">ตำแหน่ง</label>
                        </div>
                    </div>
                    <div class="col-md-10">
                        <div class="form-group"> 

                            {!! Form::text(null,null, array('class' => 'form-control')) !!}
                        </div>
                        <div class="form-group"> 
                            <label for="">แผนก</label>
                            {!! Form::text(null,null, array('class' => 'form-control')) !!}
                        </div>
                        <div class="form-group"> 
                            <label for="">เงินเดือน</label>
                            {!! Form::text(null,null, array('class' => 'form-control')) !!}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="">วันที่เริ่มงาน</label>
                        </div>
                    </div>
                    <div class="col-md-10">
                        <div class="form-group"> 

                            {!! Form::text(null,null, array('class' => 'form-control')) !!}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="">ผู้อนุมัติ</label>
                        </div>
                    </div>
                    <div class="col-md-10">
                        <div class="form-group"> 

                            {!! Form::text(null,null, array('class' => 'form-control')) !!}
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="form-group">
            {!! Form::submit($submit_text, ['class'=>'btn btn-primary ']) !!}
            <a href="/jobapps" type="button" class="btn btn-primary">ยกเลิก</a>
        </div>
    </div>
</div>

