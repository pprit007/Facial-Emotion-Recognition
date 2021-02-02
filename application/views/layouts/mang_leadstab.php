<div> 
  <ul class="nav nav-pills bg-gray-light" role="tablist">
    <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('transfer-leads'); ?>" <?php echo ($mang_leadstab=="transfer_leads_pending")?'style="color:black;background-color:white;font-weight:bold;padding:15px;"':'style="padding:15px"'; ?>><i class="fa fa-clock" style="font-size: 17px;font-weight: bold;color: red"></i> Pending</a>
    </li>
    <li class="nav-item">
        <a class="nav-link"  href="<?php echo site_url('transfer-leads-open'); ?>" <?php echo ($mang_leadstab=="transfer_leads_open")?'style="color:black;background-color:white;font-weight:bold;padding: 15px;"':'style="padding:15px"'; ?>><i class="fa fa-folder-open-o" style="color: orange"></i> Open</a>
    </li>
    
  </ul>
</div>
