<div> 
  <ul class="nav nav-pills bg-gray-light" role="tablist">
    <li class="nav-item">
        <a class="nav-link"  href="<?php echo site_url('candidate-interviews'); ?>" <?php echo ($interviewtab=="candidate_interviews")?'style="color:black;background-color:white;font-weight:bold;padding: 15px;"':'style="padding:15px"'; ?>><i class="fa fa-exchange" style="color: #1C90FB"></i> candidate Interviews</a>
    </li>
    <li class="nav-item">
        <a class="nav-link"  href="<?php echo site_url('candidate-placed'); ?>" <?php echo ($interviewtab=="candidate_placed")?'style="color:black;background-color:white;font-weight:bold;padding: 15px;"':'style="padding:15px"'; ?>><i class="fa fa-industry" style="color: #1C90FB"></i> Placed candidate</a>
    </li>
  </ul>
</div>
