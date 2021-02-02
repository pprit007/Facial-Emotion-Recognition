<?php  $this->db->select("companies.*,company_followup_status.*,domains.*");
        $this->db->join("company_followup_status","company_followup_status.idcompany_followup_status=companies.Comp_Status","LEFT");
        $this->db->join("domains","domains.id_domain=companies.Comp_Domain","LEFT");
        $this->db->order_by('idcompany', 'desc');
        $this->db->where('Comp_Status',FRESHCOMPANY);
   $freshc =     $this->db->get('companies')->result_array();
   $f = 0;
   foreach ($freshc as $fc)
   {
       $f++;
   }
   
   
   
        $this->db->select("companies.*,company_followup_status.*,domains.*");
        $this->db->join("company_followup_status","company_followup_status.idcompany_followup_status=companies.Comp_Status","LEFT");
        $this->db->join("domains","domains.id_domain=companies.Comp_Domain","LEFT");
        $this->db->order_by('Comp_StatusDate', 'asc');
        $this->db->where('Comp_Status',REMINDERCOMPANY);
       $remc =  $this->db->get('companies')->result_array();
       $r=0;
       foreach ($remc as $rc)
       {
               $r++;
       }
       
       
        $this->db->select("companies.*,company_followup_status.*,domains.*");
        $this->db->join("company_followup_status","company_followup_status.idcompany_followup_status=companies.Comp_Status","LEFT");
        $this->db->join("domains","domains.id_domain=companies.Comp_Domain","LEFT");
        $this->db->order_by('idcompany', 'desc');
        $this->db->where('Comp_Status',INTERESTEDCOMPANY);
        $interrsted =  $this->db->get('companies')->result_array();
        $i = 0;
        foreach ($interrsted as $it)
        {
            $i++;
        }
        
        $this->db->select("companies.*,company_followup_status.*,domains.*");
        $this->db->join("company_followup_status","company_followup_status.idcompany_followup_status=companies.Comp_Status","LEFT");
        $this->db->join("domains","domains.id_domain=companies.Comp_Domain","LEFT");
        $this->db->order_by('idcompany', 'desc');
        $this->db->where('Comp_Status',NOTINTRESTEDCOMPANY);
        $notont =  $this->db->get('companies')->result_array();
        $ni=0;
        foreach ($notont as $not)
        {
            $ni++;
        }
        
        ?>
<div> 
  <ul class="nav nav-pills bg-gray-light" role="tablist">
    <li class="nav-item">
        <a class="nav-link"  href="<?php echo site_url('companies'); ?>" <?php echo ($company=="companies")?'style="color:black;background-color:white;font-weight:bold;padding: 15px;"':'style="padding:15px"'; ?>><i class="fa fa-industry" style="color: #1C90FB"></i> Fresh Companies <i class="badge badge-primary"><?php echo $f; ?></i></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('company-reminder'); ?>" <?php echo ($company=="reminder")?'style="color:black;background-color:white;font-weight:bold;padding:15px;"':'style="padding:15px"'; ?>><i class="fa fa-clock" style="font-size: 17px;font-weight: bold;color: red"></i> Reminders <i class="badge badge-primary"><?php echo $r; ?></i></a>
    </li>
    <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('company-interested'); ?>" <?php echo ($company=="intrested")?'style="color:black;background-color:white;font-weight:bold;padding:15px;"':'style="padding:15px"'; ?>><i class="fa fa-thumbs-up text-success"></i> Interested <i class="badge badge-primary"><?php echo $i; ?></i></a>
    </li>
    <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('company-not-interested'); ?>" <?php echo ($company=="not_interested")?'style="color:black;background-color:white;font-weight:bold;padding:15px;"':'style="padding:15px"'; ?>><i class="fa fa-thumbs-down text-danger"></i> Not Interested <i class="badge badge-primary"><?php echo $ni; ?></i></a>
    </li>
  </ul>
</div>
