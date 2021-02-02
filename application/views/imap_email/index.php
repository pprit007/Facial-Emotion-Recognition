<style>
    .view{
        text-decoration: none;
        font-weight: bold;
        color: black;
    }
</style>
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="box box-warning">
                    <div class="box-header ptbnull">
                        <h3 class="box-title titlefix" style="font-weight:bold">INBOX : : <?php echo $this->session->userdata('uname'); ?></h3>
                        <div class="pull-right">
                            
                    </div>
                    </div>
                     
                    <div class="box-body">
                        <div style="overflow-x:auto">
                            <table id="myTable" class="table table-hover table-striped table-bordered">
				<thead>
					<tr>
                                            <th>No</th>
                                            <th>Subject</th>
                                            <th>From</th>
                                            <th>From Email</th>
                                            <th>Date</th>
					</tr>
				</thead>
				<tbody id="inbox">

				</tbody>
			</table>
                        </div>
                </div>
                   
            </div>
            </div>



<!-- Modal message -->		
<div id="addModal" class="modal fade" role="dialog">
   <div class="modal-dialog">
     <div class="modal-content">
       <div class="modal-header">
       	  <h4 class="modal-title">Message</h4>
         <button type="button" class="close" data-dismiss="modal">&times;</button>
       </div>
       <div class="modal-body">
           <h4>Subject - <span id="sub" style="color:green"></span></h4><br>
           <span id="message"></span>
       </div>
     </div>
   </div>
</div>



<!-- loading-overlay -->
<script src="//cdn.jsdelivr.net/npm/gasparesganga-jquery-loading-overlay@1.6.0/src/loadingoverlay.min.js"></script>
<script>		
$(function() {

	var json;
	
	$.LoadingOverlay("show");

	$.ajax({
		type: "POST",
		url: "<?php echo site_url('Imap_email/fetch_mail'); ?>",
		data: {
			inbox: ""
		},
        dataType: 'json'
	}).done(function(d) {
		if(d.status === "success"){
			var tbody = "";
			json = d.data;
			$.each(json, function(i, a) {
				tbody += '<tr><td>' + (i + 1) + '</td>';
				tbody += '<td><a href="#" data-id="' + i + '" class="view" data-toggle="modal" data-target="#addModal">' + (a.subject === "" ? "No Subject" : a.subject.substring(0, 100)) + '</a></td>';
				tbody += '<td>' + (a.from.name === "" ? "[empty]" : a.from.name) + '</td>';
				tbody += '<td><a href="mailto:' + a.from.address + '?subject=Re:' + a.subject + '">' + a.from.address + '</a></td>';
				tbody += '<td>' + a.date + '</td></tr>';
			});
			$('#inbox').html(tbody);
			$('#myTable').DataTable();
			$.LoadingOverlay("hide");
		}else{
			alert(d.message);
		}
	});
	$('body').on('click', '.view', function () {
		var id = $(this).data('id'); 
		var message = json[id].message;
		var subject = json[id].subject;
		var attachments = json[id].attachments;
		var attachment = '';
		if(attachments.length > 0){
			attachment += "<hr>Attachments:";
			$.each(attachments, function(i, a) {
				var file = json[id].uid + ',' + a.part + ',' + a.file + ',' + a.encoding;
				attachment += '<br><a href="#" class="file" data-file="' + file + '">' + a.file + '</a>';
			});
		}
		$('#message').html(message + attachment); 
		$('#sub').html(subject); 
	});
	$('body').on('click', '.file', function () {
		$.LoadingOverlay("show");
		var file = $(this).data('file').split(",");
		$.ajax({
			type: "POST",
			url: "<?php echo site_url('Imap_email/fetch_mail'); ?>",
			data: {
				uid: file[0],
				part: file[1],
				file: file[2],
				encoding: file[3]
			},
			dataType: 'json'
		}).done(function(d) {
			if(d.status === "success"){
				$.LoadingOverlay("hide");
				window.open(d.path, '_blank');
			}else{
				alert(d.message);
			}
		});
	});
			
});
</script>
