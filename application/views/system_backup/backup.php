
                <div class="box box-warning">
                    <div class="box-header with-border">
                        <h3 class="box-title"><i class="fa fa-database"></i> Backup history</h3>
                        <div class="box-tools pull-right">
                            <form id="form1" action="<?php echo site_url('system-backup') ?>"  id="employeeform" name="employeeform" method="post" accept-charset="utf-8" role="form">
                               <button class="btn btn-success btn-sm btn-success" type="submit" name="backup" value="backup"><i class="fa fa-plus-square-o"></i>  Create Backup</button>
                             </form>
                        </div>
                    </div>
                    <div class="box-body">
                        <table class="table table-bordered table-striped">
                            <tr>
                                <td>Sr No</td>
                                <td>Title</td>
                                <td>Download</td>
                            </tr>
                            <?php
                            $sr = 1;
                            foreach($dbfiles as $df){ 
                                if($df=='.' || $df=='..'){}
                                else{?>
                            <tr>
                                <td><?php echo $sr++; ?></td>
                                <td><?php echo $df; ?></td>
                                <td><a href="<?php echo site_url('db/'.$df); ?>" class="btn btn-success btn-sm fa fa-download"></a></td>
                            </tr>
                            <?php }}?>
                        </table>
                    </div>
                    
                    </div>
             
<script type="text/javascript">
    $('#form1').submit(function () {
        var c = confirm("Are you sure want to make current backup?");
        return c;
    });
    $('.formdelete').submit(function () {
        var c = confirm("Are you sure want to delete backup?");
        return c;
    });
    $('.formrestore').submit(function () {
        var c = confirm("Are you sure want to restore backup?");
        return c;
    });

     function showkey(){

    $("#cronkey").show();
    $("#showbtn").html("<i class='fa fa-eye-slash'></i>");
    $("#showbtn").attr("onclick","hidekey()");
    
   }

    function hidekey(){
        
    $("#cronkey").hide();
    $("#showbtn").html("<i class='fa fa-eye'></i>");
    $("#showbtn").attr("onclick","showkey()");
    
   }
</script>