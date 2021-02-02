<?php echo form_open('uroles_has_menu/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="URHM_Active" class="col-md-4 control-label">URHM Active</label>
		<div class="col-md-8">
			<input type="checkbox" name="URHM_Active" value="1" id="URHM_Active" />
		</div>
	</div>
	<div class="form-group">
		<label for="URHM_IdMenu" class="col-md-4 control-label">Menu</label>
		<div class="col-md-8">
			<select name="URHM_IdMenu" class="form-control">
				<option value="">select menu</option>
				<?php 
				foreach($all_menus as $menu)
				{
					$selected = ($menu['idmenus'] == $this->input->post('URHM_IdMenu')) ? ' selected="selected"' : "";

					echo '<option value="'.$menu['idmenus'].'" '.$selected.'>'.$menu['MenuTitle'].'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="URHM_Parent" class="col-md-4 control-label">Menu</label>
		<div class="col-md-8">
			<select name="URHM_Parent" class="form-control">
				<option value="">select menu</option>
				<?php 
				foreach($all_menus as $menu)
				{
					$selected = ($menu['idmenus'] == $this->input->post('URHM_Parent')) ? ' selected="selected"' : "";

					echo '<option value="'.$menu['idmenus'].'" '.$selected.'>'.$menu['MenuTitle'].'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="URHM_IdRole" class="col-md-4 control-label">URHM IdRole</label>
		<div class="col-md-8">
			<input type="text" name="URHM_IdRole" value="<?php echo $this->input->post('URHM_IdRole'); ?>" class="form-control" id="URHM_IdRole" />
		</div>
	</div>
	<div class="form-group">
		<label for="URHM_Level" class="col-md-4 control-label">URHM Level</label>
		<div class="col-md-8">
			<input type="text" name="URHM_Level" value="<?php echo $this->input->post('URHM_Level'); ?>" class="form-control" id="URHM_Level" />
		</div>
	</div>
	<div class="form-group">
		<label for="URHM_Seq" class="col-md-4 control-label">URHM Seq</label>
		<div class="col-md-8">
			<input type="text" name="URHM_Seq" value="<?php echo $this->input->post('URHM_Seq'); ?>" class="form-control" id="URHM_Seq" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>

<?php echo form_close(); ?>