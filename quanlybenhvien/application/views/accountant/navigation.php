<div class="sidebar-background">

	<div class="primary-sidebar-background"  style=" background-color: #003366">

	</div>

</div>

<div class="primary-sidebar">

	<!-- Main nav -->

    <br />

    <div style="text-align:center;">

    	<a href="<?php echo base_url();?>">

        	<img src="<?php echo base_url();?>uploads/logo1.png"  style="max-height:100px; max-width:100px;"/>

        </a>

    </div>

   	<br />

	<ul class="nav nav-collapse collapse nav-collapse-primary">

    

        

        <!------dashboard----->

		<li class="<?php if($page_name == 'dashboard')echo 'dark-nav active';?>">

			<span class="glow"></span>

				<a href="<?php echo base_url();?>index.php?accountant/dashboard" >

					<i class="icon-desktop icon-2x"></i>

					<span><?php echo get_phrase('dashboard');?></span>

				</a>

		</li>

        

        <!------manage invoice ----->

		<li class="<?php if($page_name == 'manage_invoice')echo 'dark-nav active';?>">

			<span class="glow"></span>

				<a href="<?php echo base_url();?>index.php?accountant/manage_invoice" >

					<i class="icon-list-alt icon-2x"></i>

					<span><?php echo get_phrase('invoice / take_payment');?></span>

				</a>

		</li>

        
<!------bed/ward------>

<li class="dark-nav <?php if($page_name == 'manage_bed' || $page_name == 'manage_bed_allotment')echo 'active';?>">

<span class="glow"></span>

<a class="accordion-toggle  " data-toggle="collapse" href="#bed_submenu" >

	<i class="icon-hdd icon-2x"></i>

	<span><?php echo get_phrase('bed_ward');?><i class="icon-caret-down"></i></span>

</a>



<ul id="bed_submenu" class="collapse <?php if($page_name == 'manage_bed' || $page_name == 'manage_bed_allotment')echo 'in';?>">

	<li class="<?php if($page_name == 'manage_bed')echo 'active';?>">

	  <a href="<?php echo base_url();?>index.php?accountant/manage_bed">

		  <i class="icon-hdd"></i> <?php echo get_phrase('manage_bed');?>

	  </a>

	</li>

	<li class="<?php if($page_name == 'manage_bed_allotment')echo 'active';?>">

	  <a href="<?php echo base_url();?>index.php?accountant/manage_bed_allotment">

		  <i class="icon-wrench"></i> <?php echo get_phrase('manage_bed_allotment');?>

	  </a>

	</li>

</ul>

</li>

        

        <!------view_payment----->

		<li class="<?php if($page_name == 'view_payment')echo 'dark-nav active';?>">

			<span class="glow"></span>

				<a href="<?php echo base_url();?>index.php?accountant/view_payment" >

					<i class="icon-money icon-2x"></i>

					<span><?php echo get_phrase('view_payment');?></span>

				</a>

		</li>

        

        

		<!------manage own profile--->

		<li class="<?php if($page_name == 'manage_profile')echo 'dark-nav active';?>">

			<span class="glow"></span>

				<a href="<?php echo base_url();?>index.php?accountant/manage_profile" >

					<i class="icon-lock icon-2x"></i>

					<span><?php echo get_phrase('profile');?></span>

				</a>

		</li>

		

	</ul>

	

</div>