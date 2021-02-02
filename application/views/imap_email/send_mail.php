<form id="frmEnquiry" action="" method="post" enctype='multipart/form-data'>
    <style>.invalid {
    background: #fbf2f2;
    border: #e8e0e0 1px solid;
}
</style>
          <?php // echo form_open_multipart('send-mail/'.$SI_idVacancy_en); ?>
        <!-- SELECT2 EXAMPLE -->
        <div class="box box-warning">
          <div class="box-header ptbnull">
              <span style="font-weight: bold">Send Mail</span>
              <div class="pull-right">
                  <?php
                $user = $this->db->get_where('logins',array('idlogins'=>$this->session->userdata('uid')))->row_array();
                $emailAddress = $user['LoginUsername']; // Full email address
                $emailPassword = $user['LoginMailPass'];        // Email password
                $domainURL = 'clariwell.in';              // Your websites domain
                $useHTTPS = true;                       // Depending on how your cpanel is set up, you may be using a secure connection and you may not be. Change this from true to false as needed for your situation

                /* BEGIN MESSAGE COUNT CODE */

                $inbox = imap_open('{'.$domainURL.':143/notls}INBOX',$emailAddress,$emailPassword) or die('Cannot connect to domain:' . imap_last_error());
                $oResult = imap_search($inbox, 'UNSEEN');

                if(empty($oResult))
                    $nMsgCount = 0;
                else
                    $nMsgCount = count($oResult);

                imap_close($inbox);

               

                /* END MESSAGE COUNT CODE */

                echo('<a class="btn btn-success pull-right" href="http'.($useHTTPS ? 's' : '').'://'.$domainURL.':'.($useHTTPS ? '2096' : '2095').'/login/?user='.$emailAddress.'&pass='.$emailPassword.'&failurl=http://'.$domainURL.'" target="_blank">Click Here For - Direct Login</a>');

                ?>
              </div>
          </div>
<div class="box-body">
    <div class="row">
        <center> <div id="loader-icon" style="display: none;">
                <img src="<?php echo site_url(); ?>resources/sendmail.gif" style="width:150px" />
        </div>
        </center>
            <?php if(isset($success)){ foreach($success as $s){ echo "<div class='col-md-12'><div class='alert alert-success alert-dismissible'>
                                                        <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                                        <strong>Success!</strong> Email Successfully sent to ". $s.
                                      "</div></div>"; }} ?>
             <?php if(isset($fail)){ foreach($fail as $f){ echo "<div class='col-md-12'><div class='alert alert-success alert-dismissible'>
                                                        <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                                        <strong>Success!</strong> Email Successfully sent to ". $f.
                                      "</div></div>"; }}?>
        <div id="mail-status"></div>
        <div class="col-md-12">
            <label><span class="text-danger">*</span> To</label>
            <div class="form-group">
                <input type="text" name="mails" class="form-control" />
       </div>
       </div>
        <div class="col-md-12">
             <label><span class="text-danger">*</span>Subject</label>
             <div class="form-group">
                 <div class="form-group">
                     <input type="text" id="subject" name="subject" class="form-control" />
                 </div>
             </div>
        </div>
        <div class="col-md-12">
             <label><span class="text-danger">*</span>Attachments</label>
             <div class="form-group">
                 <div class="form-group">
                     <input type="file" name="attachment[]" class="form-control filestyle" multiple="multiple">
                 </div>
             </div>
        </div>
        <div class="col-md-12">
             <label><span class="text-danger">*</span>Description</label>
             <div class="form-group">
                  <div class="form-group">
                      <textarea class="form-control"id="editor1" name="send_mail" required> </textarea>
                  </div>
        </div>
        </div>

    </div>
</div>
                <div class="box-footer">
                    <button type="submit" class="btn btn-success" onclick="topFunction();">
                                <i class="fa fa-check"></i> Send
                    </button>
                </div>
      	</div>
</form>
<script src="<?php echo site_url(); ?>interface/jquery-3.2.1.min.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function (e){
$("#frmEnquiry").on('submit',(function(e){
	e.preventDefault();
	$('#loader-icon').show();
	var valid;	
	valid = validateContact();
	if(valid) {
		$.ajax({
		url: "<?php echo site_url('imap-send-email'); ?>",
		type: "POST",
		data:  new FormData(this),
		contentType: false,
		cache: false,
		processData:false,
		success: function(data){
		$("#mail-status").html(data);
		$('#loader-icon').hide();
		},
		error: function(){} 	        
		
		});
	}
}));

function validateContact() {
	var valid = true;	
	$(".form-control").css('background-color','');
	$(".info").html('');
	$("#subject").removeClass("invalid");
	
	if(!$("#subject").val()) {
		$("#userName").addClass("invalid");
        $("#userName").attr("title","Required");
        valid = false;
	}
	
	return valid;
}

});

function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>