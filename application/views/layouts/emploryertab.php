<div> 
  <ul class="nav nav-pills bg-gray-light" role="tablist">
    <li class="nav-item">
        <a class="nav-link"  href="<?php echo site_url('employee-personal-details/'.$this->uricryption->encode($employee['id_employee'])); ?>" <?php echo ($emploryertab=="personal_details")?'style="color:black;background-color:white;font-weight:bold;padding: 15px;"':'style="padding:15px"'; ?>>Personal</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo site_url('employee-education-details/'.$this->uricryption->encode($employee['id_employee'])); ?>" <?php echo ($emploryertab=="education_details")?'style="color:black;background-color:white;font-weight:bold;padding:15px;"':'style="padding:15px"'; ?>>Educational</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo site_url('employee-bank-details/'.$this->uricryption->encode($employee['id_employee'])); ?>" <?php echo ($emploryertab=="bank_details")?'style="color:black;background-color:white;font-weight:bold;padding:15px;"':'style="padding:15px"'; ?>>Bank</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo site_url('employee-training-details/'.$this->uricryption->encode($employee['id_employee'])); ?>" <?php echo ($emploryertab=="training_details")?'style="color:black;background-color:white;font-weight:bold;padding:15px;"':'style="padding:15px"'; ?>>Training</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo site_url('employee-emergency-details/'.$this->uricryption->encode($employee['id_employee'])); ?>" <?php echo ($emploryertab=="emergency_details")?'style="color:black;background-color:white;font-weight:bold;padding:15px;"':'style="padding:15px"'; ?>>Emergency</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo site_url('employee-experience-details/'.$this->uricryption->encode($employee['id_employee'])); ?>" <?php echo ($emploryertab=="experience_details")?'style="color:black;background-color:white;font-weight:bold;padding:15px;"':'style="padding:15px"'; ?>>Experience</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo site_url('employee-reference-details/'.$this->uricryption->encode($employee['id_employee'])); ?>" <?php echo ($emploryertab=="reference_details")?'style="color:black;background-color:white;font-weight:bold;padding:15px;"':'style="padding:15px"'; ?>>References</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo site_url('upload-documents/'.$this->uricryption->encode($employee['id_employee'])); ?>" <?php echo ($emploryertab=="upload_documents")?'style="color:black;background-color:white;font-weight:bold;padding:15px;"':'style="padding:15px"'; ?>>Upload Documents</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo site_url('create-username/'.$this->uricryption->encode($employee['id_employee'])); ?>" <?php echo ($emploryertab=="create_username")?'style="color:black;background-color:white;font-weight:bold;padding:15px;"':'style="padding:15px"'; ?>>Create Username</a>
    </li>
  
  </ul>
</div>
