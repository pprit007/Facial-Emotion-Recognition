<div class="row">
    <div class="col-md-12">
      	<div class="box box-warning">
            <div class="box-header with-border">
              	<h3 class="box-title">Login Has Role Edit</h3>
            </div>
			<?php echo form_open('login_has_role/edit/'.$login_has_role['LHRs_IdLogin']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<div class="form-group">
							<input type="checkbox" name="LHRs_Active" value="1" <?php echo ($login_has_role['LHRs_Active']==1 ? 'checked="checked"' : ''); ?> id='LHRs_Active' />
							<label for="LHRs_Active" class="control-label">LHRs Active</label>
						</div>
					</div>
					<div class="col-md-6">
						<label for="LHRs_IdRole" class="control-label">Ledger</label>
						<div class="form-group">
							<select name="LHRs_IdRole" class="form-control">
								<option value="">select ledger</option>
								<?php 
								foreach($all_ledgers as $ledger)
								{
									$selected = ($ledger['idledgers'] == $login_has_role['LHRs_IdRole']) ? ' selected="selected"' : "";

									echo '<option value="'.$ledger['idledgers'].'" '.$selected.'>'.$ledger['LedgerName'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="LHRs_From" class="control-label">LHRs From</label>
						<div class="form-group">
							<input type="text" name="LHRs_From" value="<?php echo ($this->input->post('LHRs_From') ? $this->input->post('LHRs_From') : $login_has_role['LHRs_From']); ?>" class="has-datetimepicker form-control" id="LHRs_From" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="LHRs_To" class="control-label">LHRs To</label>
						<div class="form-group">
							<input type="text" name="LHRs_To" value="<?php echo ($this->input->post('LHRs_To') ? $this->input->post('LHRs_To') : $login_has_role['LHRs_To']); ?>" class="has-datetimepicker form-control" id="LHRs_To" />
						</div>
					</div>
				</div>
			</div>
			<div class="box-footer">
            	<button type="submit" class="btn btn-success">
					<i class="fa fa-check"></i> Save
				</button>
	        </div>				
			<?php echo form_close(); ?>
		</div>
    </div>
</div>