<!DOCTYPE html>
<html lang="en">
<head>
  <title>Diet Expert - Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>

<body>
<div id='login_form'>
<form class="form-horizontal"   action='<?php echo base_url();?>index.php/login/process' method='post' name='process'     >
<fieldset>
<div class="container">

  <!--col-->
  <div class="col-lg-12 col-md-8 col-sm-6 col-xs-4">
  <!-- panel panel-default-->
  <div class="panel panel-default" >
	<!-- panel-body -->
	<div class="panel-body" align="center" >
		<h3>Sign Up</h3>
		<!-- Text input-->
		<div class="control-group">


<?php // Change the css classes to suit your needs    

$attributes = array('class' => '', 'id' => '');
echo form_open('signup_c', $attributes); ?>

<!-- Text input-->
		<div class="control-group">
        <label class="control-label" for="usertype">User Type <span class="required">*</span></label>
        <div class="controls">
        <?php echo form_error('usertype'); ?>
        
        <?php // Change the values in this array to populate your dropdown as required ?>
        <?php $options = array(
            ''  => 'Please Select',
            'Patient'    => 'Patient',
            'Doctor' => 'Doctor'
          ); ?>

        <br /><?php echo form_dropdown('usertype', $options, set_value('usertype'))?>
        </div>
                </div>
        
<div class="control-group">
        <label class="control-label" for="name">Name <span class="required">*</span></label>
        <div class="controls"> 
        <?php echo form_error('name'); ?>
        <br /><input id="name" type="text" name="name" maxlength="50" value="<?php echo set_value('name'); ?>"  />
        </div>
</div>

<div class="control-group">
        <label class="control-label" for="user_id">Email ID <span class="required">*</span></label>
        <div class="controls"> 
        <?php echo form_error('user_id'); ?>
        <br /><input id="user_id" type="text" name="user_id" maxlength="40" value="<?php echo set_value('user_id'); ?>"  />
        </div>
</div>


<div class="control-group">
        <label class="control-label" for="address">Address <span class="required">*</span></label>
        <?php echo form_error('address'); ?>
        <div class="controls"> 
        <br /><input id="address" type="text" name="address" maxlength="80" value="<?php echo set_value('address'); ?>"  />
        </div>
</div>

<div class="control-group">
        <label class="control-label" for="gender">Gender <span class="required">*</span></label>
        <?php echo form_error('gender'); ?>
        <br />
        <div class="controls"> 
                <?php // Change or Add the radio values/labels/css classes to suit your needs ?>
                <input id="gender" name="gender" type="radio" class="" value="Male" <?php echo $this->form_validation->set_radio('gender', 'option1'); ?> />
        		<label for="gender" class="">Male</label>

        		<input id="gender" name="gender" type="radio" class="" value="Female" <?php echo $this->form_validation->set_radio('gender', 'option2'); ?> />
        		<label for="gender" class="">Female</label>
        </div>
</div>


<div class="control-group">
        <label class="control-label" for="contact_no">Contact No <span class="required">*</span></label>
        <div class="controls"> 
        <?php echo form_error('contact_no'); ?>
        <br /><input id="contact_no" type="text" name="contact_no" maxlength="11" value="<?php echo set_value('contact_no'); ?>"  />
        </div>
</div>

<div class="control-group">
        <label class="control-label" for="weight">Weight <span class="required">*</span></label>
        <?php echo form_error('weight'); ?>
        <div class="controls"> 
        <br /><input id="weight" type="text" name="weight"  value="<?php echo set_value('weight'); ?>"  />
        </div>
</div>

<div class="control-group">
        <label class="control-label" for="height">Height <span class="required">*</span></label>
        <?php echo form_error('height'); ?>
        <div class="controls"> 
        <br /><input id="height" type="text" name="height"  value="<?php echo set_value('height'); ?>"  />
        </div>
</div>

<div class="control-group">
        <label class="control-label" for="age">Age <span class="required">*</span></label>
        <?php echo form_error('age'); ?>
        <div class="controls"> 
        <br /><input id="age" type="text" name="age" maxlength="3" value="<?php echo set_value('age'); ?>"  />
        </div>
</div>




<div class="control-group">
    <label class="control-label" for="singlebutton"></label>
        <?php echo form_submit( 'submit', 'Submit'); ?>
		<div class="controls">
                     <input type='Submit' value='Submit' class="btn btn-primary" />    
				
		</div>
		</div>
</div>
  </div>
  </div>
</div>
</fieldset>
    <?php echo form_close(); ?>
</form> 

</div>    
</body>
</html>



