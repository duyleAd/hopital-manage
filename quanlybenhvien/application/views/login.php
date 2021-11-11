<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">



<html>

    <head  >

        <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0">

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

        <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">

		<?php include 'includes.php';?>

        <title><?php echo get_phrase('login');?> | <?php echo $system_title;?></title>

    </head>

	<body style="background-image: url('uploads/back.jpg'); height:100%; background-size:cover;" >

		<?php if($this->session->flashdata('flash_message') != ""):?>

 		<script>

			$(document).ready(function() {

				Growl.info({title:"<?php echo $this->session->flashdata('flash_message');?>",text:" "})

			});

		</script>

        <?php endif;?>

        <div class="navbar navbar-top navbar-inverse" >

            <div class="navbar-inner" style=" background-color: #003366">

                <div class="container-fluid" >

                    <a class="brand" href="<?php echo base_url();?>"><?php echo $system_name;?></a>

                    

                    <ul class="nav pull-right" >

                        <li class="dropdown"  >

                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" style=" border-radius: 20px;">Select Language <b class="caret"></b></a>

                        <!-- Language Selector -->

                            <ul class="dropdown-menu">

                                <?php

                                $fields = $this->db->list_fields('language');

                                foreach ($fields as $field)

                                {

                                    if($field == 'phrase_id' || $field == 'phrase')continue;

                                    ?>

                                        <li>

                                            <a href="<?php echo base_url();?>index.php?multilanguage/select_language/<?php echo $field;?>">

                                                <?php echo $field;?>

                                                <?php //selecting current language

                                                    if($this->session->userdata('current_language') == $field):?>

                                                        <i class="icon-ok"></i>

                                                <?php endif;?>

                                            </a>

                                        </li>

                                    <?php

                                }

                                ?>

                            </ul>

                        <!-- Language Selector -->

                        </li>

                    </ul>

                    

                </div>

            </div>

        </div>

        <div class="container" >

            <div class="span4 offset4" >

                <div class="padded">

                    <center>

                        <img src="<?php echo base_url();?>uploads/logo1.png" style="height:200px;" />

                    </center>

                    <div class="login box" style="margin-top: 10px; border-radius:5%;">

                        <div class="box-header" style="border-radius:10px;">

                            <span class="title"><?php echo get_phrase('login');?></span>

                        </div>

                        <div class="box-content padded" >

                        <i class="m-icon-swapright m-icon-white"></i>

                        	<?php echo form_open('login' , array('class' => 'separate-sections'));?>

                                <div class="" >

                                    

                                    <select class="validate[required]" name="login_type" style="width:100%; border-radius: 20px;" >

                                        <option value=""><?php echo get_phrase('account_type');?></option>

                                        <option value="admin"><?php echo get_phrase('admin');?></option>

                                        <option value="doctor"><?php echo get_phrase('doctor');?></option>

                                        <option value="patient"><?php echo get_phrase('patient');?></option>

                                        <option value="pharmacist"><?php echo get_phrase('pharmacist');?></option>

                                        <option value="accountant"><?php echo get_phrase('accountant');?></option>

                                    </select>

    

                                </div>

                                <div class="input-prepend" >

                                    <span class="add-on" href="#" style="border-radius: 20px">

                                    <i class="icon-envelope"></i>

                                    </span>

                                    <input name="email" type="text" placeholder="<?php echo get_phrase('email');?>" style="border-radius: 20px">

                                </div>

                                <div class="input-prepend">

                                    <span class="add-on" href="#" style="border-radius: 20px">

                                    <i class="icon-key"></i>

                                    </span>

                                    <input name="password" type="password" placeholder="<?php echo get_phrase('password');?>" style="border-radius: 20px">

                                </div>

                                <div>

                                    <button type="submit" class="btn btn-blue btn-block" style="border-radius: 20px; background-color: #003366" >

                                        <?php echo get_phrase('login');?>

                                    </button>

                                </div>

                            <?php echo form_close();?>

                            <div>

                                <a  data-toggle="modal" href="#modal-simple">

                                    <?php echo get_phrase('forgot_password?');?>

                                </a>

                            </div>

                        </div>

                    </div>

                    <?php include 'application/views/footer.php';?>

                </div>

            </div>

        </div>

        

        

        <!-----------password reset form ------>

        <div id="modal-simple" class="modal hide fade" style="border-radius: 20px">

          <div class="modal-header" style="border-radius: 20px">

            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

            <h6 id="modal-tablesLabel"><?php echo get_phrase('reset_password');?></h6>

          </div>

          <div class="modal-body" >

            <?php echo form_open('login/reset_password');?>

            	<select class="validate[required]" name="account_type"  style="margin-bottom: 0px !important;border-radius: 20px;">

                    <option value=""><?php echo get_phrase('account_type');?></option>

                    <option value="admin"><?php echo get_phrase('admin');?></option>

                    <option value="doctor"><?php echo get_phrase('doctor');?></option>

                    <option value="patient"><?php echo get_phrase('patient');?></option>

                    <option value="pharmacist"><?php echo get_phrase('pharmacist');?></option>

                    <option value="accountant"><?php echo get_phrase('accountant');?></option>

                </select>

                <input type="email" name="email"  placeholder="<?php echo get_phrase('email');?>"  style="margin-bottom: 0px !important;border-radius: 20px;"/>

                <input type="submit" value="<?php echo get_phrase('reset');?> "  class="btn btn-blue btn-medium" style="border-radius: 20px; background-color: #003366"/>

            <?php echo form_close();?>

          </div>

          <div class="modal-footer">

            <button class="btn btn-default" data-dismiss="modal" style="border-radius: 20px; background-color: #003366">Close</button>

          </div>

        </div>

        <!-----------password reset form ------>

        

        

	</body>

</html>