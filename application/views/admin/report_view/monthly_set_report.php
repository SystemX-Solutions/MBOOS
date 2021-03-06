<div class="navbar navbar-fixed-top">
  <div class="navbar-inner top-nav">
    <div class="container-fluid">
      <div class="branding">
        <div class="logo"> <a href="<?php echo base_url(); ?>admin/dashboard"><img src="<?php echo base_url(); ?>template/img/logo.png" width="168" height="40" alt="Logo"></a> </div>
      </div>
      <ul class="nav pull-right">
        <li class="dropdown search-responsive"><a data-toggle="dropdown" class="dropdown-toggle" href="#"><i class="nav-icon magnifying_glass"></i><b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li class="top-search">
              <form action="#" method="get">
                <div class="input-prepend"> <span class="add-on"><i class="icon-search"></i></span>
                  <input type="text" id="searchIcon">
                </div>
              </form>
            </li>
          </ul>
        </li>
        <li class="dropdown"><a data-toggle="dropdown" class="dropdown-toggle" href="#"><?php echo $sessVar['sadmin_uname'];?> <i class="white-icons admin_user"></i><b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo base_url();?>admin/profile_mboos/edit_profile/<?php echo $sessVar['sadmin_uid'] ?>"><i class="icon-pencil"></i> Edit Profile</a></li>
            <li><a href="#"><i class="icon-cog"></i> Account Settings</a></li>
            <li class="divider"></li>
            <li><a href="<?php echo base_url();?>admin/login/logout"><i class="icon-off"></i><strong> Logout</strong></a></li>
          </ul>
        </li>
      </ul>
      <button data-target=".nav-collapse" data-toggle="collapse" class="btn btn-navbar" type="button"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>

    </div>
  </div>
</div>
<div id="main-content">
<div class="container-fluid">
    <ul class="breadcrumb">
      <li><a href="<?php echo base_url(); ?>/admin/dashboard">Home</a><span class="divider">&raquo;</span></li>
      <li>Reports<span class="divider">&raquo;</span></li>
      <li><a href="<?php echo base_url(); ?>/admin/sales_report">Sales Reports</a><span class="divider">&raquo;</span></li>
       <li class="active">Generate Monthly Report</li>
    </ul>
		<div class="row-fluid">
			<div class="span7">
				<div class="widget-block">
					<div class="widget-head">
						<h5> Generate Reports </h5>
					</div>
					<div class="widget-content">
						<div class="widget-box">
						
							<form class="form-vertical well white-box" id="admin_login_validation" action="<?php echo base_url();?>admin/sales_report/monthly_report_query" method="POST">
								<fieldset id="registration_fieldset">
		
									<div class="control-group">
										<label class="control-label" for="item_supplier">FROM: </label>
										<div class="controls">
											<select name="year_ordered">
                                                <?php $upper = 2013; $lower = 2030; ?>
                                                <?php for($i = $upper; $i <= $lower; $i++): ?>
                                                <option value="<?php echo $i;?>" ><?php echo $i; ?></option>
                                                <?php endfor; ?>                                             
                                            </select>
                                            
                                            <select name="month_ordered_start">
                                                <option value="01">January</option>
                                                <option value="02">February</option>
                                                <option value="03">March</option>
                                                <option value="04">April</option>
                                                <option value="05">May</option>
                                                <option value="06">June</option>
                                                <option value="07">July</option>
                                                <option value="08">August</option>
                                                <option value="09">September</option>
                                                <option value="10">October</option>
                                                <option value="11">November</option>
                                                <option value="12">December</option>
                                            </select>
                                            
                                            <label>To: </label>
                                            <select name="month_ordered_end">
                                                <option value="00">-N/A-</option>
                                                <option value="01">January</option>
                                                <option value="02">February</option>
                                                <option value="03">March</option>
                                                <option value="04">April</option>
                                                <option value="05">May</option>
                                                <option value="06">June</option>
                                                <option value="07">July</option>
                                                <option value="08">August</option>
                                                <option value="09">September</option>
                                                <option value="10">October</option>
                                                <option value="11">November</option>
                                                <option value="12">December</option>
                                            </select>
										</div>
									</div>
									
										
									<div class="clearfix">
                                        <input  id="monthly_report_button" class="btn btn-primary login-btn" title="theme-blue" type="submit" value="Search" name="monthly_report_submit"/>
									</div>
									
								</fieldset>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

