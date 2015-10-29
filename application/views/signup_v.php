<?php // Change the css classes to suit your needs    

$attributes = array('class' => '', 'id' => '');
echo form_open('signup_c', $attributes); ?>

<p>
        <label for="usertype">User Type <span class="required">*</span></label>
        <?php echo form_error('usertype'); ?>
        
        <?php // Change the values in this array to populate your dropdown as required ?>
        <?php $options = array(
                                                  ''  => 'Please Select',
                                                  'Patient'    => 'Patient',
                                                  'Doctor' => 'Doctor'
                                                ); ?>

        <br /><?php echo form_dropdown('usertype', $options, set_value('usertype'))?>
</p>
<p>
        <label for="name">Name <span class="required">*</span></label>
        <?php echo form_error('name'); ?>
        <br /><input id="name" type="text" name="name" maxlength="50" value="<?php echo set_value('name'); ?>"  />
</p>

<p>
        <label for="user_id">Email ID <span class="required">*</span></label>
        <?php echo form_error('user_id'); ?>
        <br /><input id="user_id" type="text" name="user_id" maxlength="40" value="<?php echo set_value('user_id'); ?>"  />
</p>


<p>
        <label for="address">Address <span class="required">*</span></label>
        <?php echo form_error('address'); ?>
        <br /><input id="address" type="text" name="address" maxlength="80" value="<?php echo set_value('address'); ?>"  />
</p>

<p>
        <label for="gender">Gender <span class="required">*</span></label>
        <?php echo form_error('gender'); ?>
        <br />
                <?php // Change or Add the radio values/labels/css classes to suit your needs ?>
                <input id="gender" name="gender" type="radio" class="" value="Male" <?php echo $this->form_validation->set_radio('gender', 'option1'); ?> />
        		<label for="gender" class="">Male</label>

        		<input id="gender" name="gender" type="radio" class="" value="Female" <?php echo $this->form_validation->set_radio('gender', 'option2'); ?> />
        		<label for="gender" class="">Female</label>
</p>


<p>
        <label for="contact_no">Contact No <span class="required">*</span></label>
        <?php echo form_error('contact_no'); ?>
        <br /><input id="contact_no" type="text" name="contact_no" maxlength="11" value="<?php echo set_value('contact_no'); ?>"  />
</p>

<p>
        <label for="weight">Weight <span class="required">*</span></label>
        <?php echo form_error('weight'); ?>
        <br /><input id="weight" type="text" name="weight"  value="<?php echo set_value('weight'); ?>"  />
</p>

<p>
        <label for="height">Height <span class="required">*</span></label>
        <?php echo form_error('height'); ?>
        <br /><input id="height" type="text" name="height"  value="<?php echo set_value('height'); ?>"  />
</p>

<p>
        <label for="age">Age <span class="required">*</span></label>
        <?php echo form_error('age'); ?>
        <br /><input id="age" type="text" name="age" maxlength="3" value="<?php echo set_value('age'); ?>"  />
</p>


<p>
        <?php echo form_submit( 'submit', 'Submit'); ?>
</p>

<?php echo form_close(); ?>
