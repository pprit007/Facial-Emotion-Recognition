<?php
        $id_employee = $this->uricryption->decode($id_employee_en);

        $this->db->select('leads_activities.*,leads.*,domains.*');
        $this->db->join('leads','leads.id_leads=leads_activities.La_id_leads','LEFT');
        $this->db->join('domains','domains.id_domain=leads.Ld_Course','LEFT');
        $this->db->order_by('id_leads_activities', 'desc');
        $this->db->where('La_id_employee',$id_employee);
        $this->db->where('La_LeadStatus',FRESHLEAD);
$leads =   $this->db->get('leads_activities')->result_array();

                        $fresh=0;
                        foreach($leads as $l){
                        $lastFolloup_date = date('Y-m-d',strtotime($l['La_StatusDate']));
                        $leadexpiredate = date('Y-m-d', strtotime($lastFolloup_date. ' + 10 days'));
                        $pending_date = date('Y-m-d', strtotime($lastFolloup_date. ' + 1 days'));
                        $today = date('Y-m-d');
                        if($today==$lastFolloup_date)   
                        {  
                            $fresh++;
                        }
                    }




                        $this->db->select('leads_activities.*,leads.*,domains.*');
                        $this->db->join('leads','leads.id_leads=leads_activities.La_id_leads','LEFT');
                        $this->db->join('domains','domains.id_domain=leads.Ld_Course','LEFT');
                        $this->db->order_by('La_StatusDate', 'asc');
                        $this->db->where('La_id_employee',$id_employee);
                        $this->db->where('La_LeadStatus',REMINDER,'OR La_LeadStatus',NOCONVERSATION);
        $leads_rem =  $this->db->get('leads_activities')->result_array();
        $rem = 0;
        foreach($leads_rem as $l){ 
            $lastFolloup_date = date('Y-m-d',strtotime($l['La_StatusDate']));
                        $leadexpiredate = date('Y-m-d', strtotime($lastFolloup_date. ' + 10 days'));
                        $pending_date = date('Y-m-d', strtotime($lastFolloup_date. ' + 1 days'));
                        $today = date('Y-m-d');
                        if($today==$lastFolloup_date)   
                        { 
          $rem++;
      }
      }




        $this->db->select('leads_activities.*,leads.*,domains.*');
        $this->db->join('leads','leads.id_leads=leads_activities.La_id_leads','LEFT');
        $this->db->join('domains','domains.id_domain=leads.Ld_Course','LEFT');
        $this->db->order_by('La_StatusDate', 'asc');
        $this->db->group_by('La_id_leads');
        $this->db->where('La_id_employee',$id_employee);
        $this->db->where('La_IsDeleted',NOTDELETED);
        $this->db->where('La_LeadStatus',WALKIN);
       $walkins = $this->db->get('leads_activities')->result_array();
       $walk = 0;
        foreach($walkins as $l){ 
            $lastFolloup_date = date('Y-m-d',strtotime($l['La_StatusDate']));
                        $leadexpiredate = date('Y-m-d', strtotime($lastFolloup_date. ' + 10 days'));
                        $pending_date = date('Y-m-d', strtotime($lastFolloup_date. ' + 1 days'));
                        $today = date('Y-m-d');
                        if($today==$lastFolloup_date)   
                        { 
                              $walk++;
                        }
      }




       $this->db->select('leads_activities.*,leads.*,domains.*');
        $this->db->join('leads', 'leads.id_leads=leads_activities.La_id_leads', 'LEFT');
        $this->db->join('domains', 'domains.id_domain=leads.Ld_Course', 'LEFT');
        $this->db->order_by('La_StatusDate', 'asc');
        $this->db->group_by('La_id_leads');
        $this->db->where('La_LeadStatus!=', ADMISSION);
        $this->db->where('La_LeadStatus!=', TAKEN);
        $this->db->where('La_LeadStatus!=', NOTINTERESTED);
        $this->db->where('La_id_employee', $id_employee);
     $pending =  $this->db->get('leads_activities')->result_array();
      $pend = 0;
        foreach($pending as $lr){ 
           $lastFolloup_date = date('Y-m-d',strtotime($lr['La_StatusDate']));
         $leadexpiredate = date('Y-m-d', strtotime($lastFolloup_date. ' + 10 days'));
         $pending_date = date('Y-m-d', strtotime($lastFolloup_date. ' + 1 days'));
         $today = date('Y-m-d');
         if($pending_date<=$today && $today<$leadexpiredate)   
         {   
            $pend++;
         }
     }


     $this->db->select('leads_activities.*,leads.*,domains.*');
        $this->db->join('leads', 'leads.id_leads=leads_activities.La_id_leads', 'LEFT');
        $this->db->join('domains', 'domains.id_domain=leads.Ld_Course', 'LEFT');
        $this->db->order_by('La_StatusDate', 'asc');
        $this->db->group_by('La_id_leads');
        $this->db->where('La_LeadStatus', ADMISSION);
        $this->db->where('La_id_employee', $id_employee);
     $adm =  $this->db->get('leads_activities')->result_array();
      $admi = 0;
        foreach($adm as $lr){ 
           $lastFolloup_date = date('Y-m-d',strtotime($lr['La_StatusDate']));
         $leadexpiredate = date('Y-m-d', strtotime($lastFolloup_date. ' + 10 days'));
         $pending_date = date('Y-m-d', strtotime($lastFolloup_date. ' + 1 days'));
         $today = date('Y-m-d');
            $admi++;
         
     }


        $this->db->select('leads_activities.*,leads.*,domains.*');
        $this->db->join('leads', 'leads.id_leads=leads_activities.La_id_leads', 'LEFT');
        $this->db->join('domains', 'domains.id_domain=leads.Ld_Course', 'LEFT');
        $this->db->order_by('La_StatusDate', 'desc');
        $this->db->group_by('La_id_leads');
        $this->db->where('La_LeadStatus', NOTINTERESTED);
    $notint=$this->db->get('leads_activities')->result_array();
$noti = 0;
        foreach($notint as $lr){ 
            $noti++;
          }


        $this->db->select('leads_activities.*,leads.*,domains.*,employees.*');
        $this->db->join('leads', 'leads.id_leads=leads_activities.La_id_leads', 'LEFT');
        $this->db->join('employees', 'employees.id_employee=leads_activities.La_id_employee', 'LEFT');
        $this->db->join('domains', 'domains.id_domain=leads.Ld_Course', 'LEFT');
        $this->db->order_by('La_StatusDate', 'asc');
        $this->db->group_by('La_id_leads');
        $this->db->where('La_LeadStatus!=', ADMISSION);
        $this->db->where('La_LeadStatus!=', TAKEN);
        $this->db->where('La_LeadStatus!=', NOTINTERESTED);
    $openleads =  $this->db->get('leads_activities')->result_array();
    $open = 0;
         foreach($openleads as $lr)
                                {
         $lastFolloup_date = date('Y-m-d',strtotime($lr['La_StatusDate']));
         $leadexpiredate = date('Y-m-d', strtotime($lastFolloup_date. ' + 10 days'));
         $pending_date = date('Y-m-d', strtotime($lastFolloup_date. ' + 1 days'));
         $today = date('Y-m-d');
         if($today>$leadexpiredate)   
         {
            $open++;
         }
         }  
  ?>

<div> 
  <ul class="nav nav-pills bg-gray-light" role="tablist">
    <li class="nav-item">
        <a class="nav-link"  href="<?php echo site_url('view-emp-leads-activity/'.$id_employee_en); ?>" <?php echo ($leadstabfor_all=="view_emp_leads_activity")?'style="color:black;background-color:white;font-weight:bold;padding: 15px;"':'style="padding:15px"'; ?>><i class="fa fa-users" style="color: #1C90FB"></i> Leads <span data-toggle="tooltip" title="3 New Messages" class="badge badge-primary"><?php echo $fresh;?></span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('view-leads-reminder/'.$id_employee_en); ?>" <?php echo ($leadstabfor_all=="view_leads_reminder")?'style="color:black;background-color:white;font-weight:bold;padding:15px;"':'style="padding:15px"'; ?>><i class="fa fa-clock" style="font-size: 17px;font-weight: bold;color: red"></i> Reminders <span data-toggle="tooltip" title="3 New Messages" class="badge badge-primary"><?php echo $rem;?></span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('view-leads-walkins/'.$id_employee_en); ?>" <?php echo ($leadstabfor_all=="view_leads_walkins")?'style="color:black;background-color:white;font-weight:bold;padding:15px;"':'style="padding:15px"'; ?>><i class="fa fa-thumbs-up text-success"></i> Walk-In's <span data-toggle="tooltip" title="3 New Messages" class="badge badge-primary"><?php echo $walk;?></span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('view-leads-pending/'.$id_employee_en); ?>" <?php echo ($leadstabfor_all=="view_leads_pending")?'style="color:black;background-color:white;font-weight:bold;padding:15px;"':'style="padding:15px"'; ?>><i class="fa fa-clock" style="color:red"></i> Pending <span data-toggle="tooltip" title="3 New Messages" class="badge badge-primary"><?php echo $pend;?></span></a>
    </li>
<!--    <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('view-leads-transfered/'.$id_employee_en); ?>" <?php echo ($leadstabfor_all=="view_leads_transfered")?'style="color:black;background-color:white;font-weight:bold;padding:15px;"':'style="padding:15px"'; ?>>Transfered</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('view-leads-as-counselor/'.$id_employee_en); ?>" <?php echo ($leadstabfor_all=="view_leads_as_counselor")?'style="color:black;background-color:white;font-weight:bold;padding:15px;"':'style="padding:15px"'; ?>>As a Counselor</a>
    </li>-->
    <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('view-leads-admission/'.$id_employee_en); ?>" <?php echo ($leadstabfor_all=="view_leads_admission")?'style="color:black;background-color:white;font-weight:bold;padding:15px;"':'style="padding:15px"'; ?>> <i class="fa fa-university"></i> Admissions <span data-toggle="tooltip" title="3 New Messages" class="badge badge-primary"><?php echo $admi;?></span></a>
    </li> 
    <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('view-excel-leads/'.$id_employee_en); ?>" <?php echo ($leadstabfor_all=="leads_excel")?'style="color:black;background-color:white;font-weight:bold;padding:15px;"':'style="padding:15px"'; ?>><i class="fa fa-file-excel text-success"></i> Excel Leads</a>
    </li> 
  </ul>
</div>
