<div class="row">
    <div class="col-md-12">
        <div class="box box-warning">
            <div class="box-header">
                <h3 class="box-title" style="font-weight: bold">Set Exam Paper For : <?php echo $exam_name['EN_Name']; ?> </h3>
            	<div class="box-tools"> 
                </div>
            </div>
            <div class="box-body">
    <div class="container">
                <ul class="nav nav-tabs">
                <?php 
                $sr=1;
                foreach($exam_type as $et){ ?>
                    <li style="font-weight:bold" class="<?php echo ($sr==1)?'active':''?>"><a data-toggle="tab" href="#<?php echo str_replace(" ","_",$et['Exam_Name']); ?>"><?php echo $et['Exam_Name']; ?></a></li>
                <?php $sr++; } ?>
                </ul>

            <div class="tab-content">
                <?php 
                $sr=1;
                foreach($exam_type as $et){ ?>
                  <div id="<?php echo str_replace(" ","_",$et['Exam_Name']); ?>" class="tab-pane fade in <?php echo ($sr==1)?'active':''?>">
                <?php echo form_open('Users/exam_paper/'.$idexam_name); ?>
                    <h3><?php echo $et['Exam_Name']; ?></h3>
                    <?php 
                    $que =1;
                    foreach($exam_paper as $e){ 
                          if($et['idexam_type']==$e['EP_idexam_type']){ ?>
           
                    <p style="font-weight:bold">Que. <?php echo $que." - ". $e['EP_Que'];  ?></p>
                    <?php
                                $this->db->where('EP_iduser',$this->session->userdata('uid'));
                                $this->db->where('ED_idexam_paper',$e['idexam_paper']);
                       $examinfo = $this->db->get('exam_data')->row_array();
                    ?>
                    <label><input type="radio" name="ED_EP_Ans[<?php echo $e['idexam_paper']; ?>]" value="1" <?php echo ($examinfo['ED_EP_Ans']==1)?'checked':''; ?> /> <?php echo $e['EP_OptFirst']; ?></label><br>
                    <label><input type="radio" name="ED_EP_Ans[<?php echo $e['idexam_paper']; ?>]" value="2" <?php echo ($examinfo['ED_EP_Ans']==2)?'checked':''; ?>/> <?php echo $e['EP_OptSecond']; ?></label><br>
                    <label><input type="radio" name="ED_EP_Ans[<?php echo $e['idexam_paper']; ?>]" value="3" <?php echo ($examinfo['ED_EP_Ans']==3)?'checked':''; ?>/> <?php echo $e['EP_OptThird']; ?></label><br>
                    <label><input type="radio" name="ED_EP_Ans[<?php echo $e['idexam_paper']; ?>]" value="4" <?php echo ($examinfo['ED_EP_Ans']==4)?'checked':''; ?>/> <?php echo $e['EP_OptFourth']; ?></label>
                    
                    <?php $que++; } } ?>
                    <br>
                    <hr>
                    <button class="btn btn-success">Submit <?php echo $et['Exam_Name']; ?></button>
                <?php echo form_close(); ?>
                  </div>
                  <?php $sr++; } ?>
            </div>
        <div>
            <h3>
                Final Submit
            </h3>
            <?php echo form_open('Users/final_submit'); ?>
            <label><input type="checkbox" name="User_ExamStatus" value="1" required/>Checkbox</label><br>
            <button class="btn btn-success">Final Submit</button>
            <?php echo form_close(); ?>
        </div>
        
    </div>                     
            </div>
        </div>
    </div>
</div>