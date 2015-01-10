	<?php if (!isset($current_section)) { $current_section = ''; } ?>
	<!DOCTYPE html>
	<html lang="en">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Edit profile of faculty of NITW">
	<meta name="author" content="WSDC">
	<head>
		<title><?php if(!empty($title)) echo $title; else echo 'WSDC'; ?></title>
		<link href="<?php echo asset_url()."css/bootstrap.min.css" ?> " rel="stylesheet">
		<link href="<?php echo asset_url()."css/introjs.min.css" ?> " rel="stylesheet">
		<link href="<?php echo asset_url()."css/offcanvas.css" ?> " rel="stylesheet">
		<link href="<?php echo asset_url()."css/jqplot/jquery.jqplot.min.css" ?> " rel="stylesheet">
		<link href="<?php echo asset_url()."js/datepicker/css/datepicker.css" ?> " rel="stylesheet">
    	<script src="<?php echo asset_url()."js/jquery.js"; ?> "></script>
	</head>
	<body>
		<div class="container-fluid">
			<div class="navbar navbar-fixed-top navbar-inverse hidden-print" role="navigation">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#"> <span class="glyphicon glyphicon-user"></span>&nbsp;FACULTY PORTAL</a>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse navbar-ex1-collapse">
						<ul class="nav navbar-nav">
							<?php if($this->session->userdata('permissions') !== "5" ): ?>
								<li class="tips <?php echo ($current_section === 'profile')?'active':''; ?>" title="Profile details on institute website">
									<a href="<?php 
									if($this->ion_auth->is_admin())
										echo base_url('profile/wsdc');
									else if($this->ion_auth->is_hod())
										echo base_url('profile/hod');
									else
										echo base_url('profile/detail/view');
									?>
									" >
									<span class="glyphicon glyphicon-user"></span> <span class="hidden-sm">Website Profile</span>
								</a>
							</li>
						<?php endif; ?>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-list"></span>  Academic Section <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li data-placement="bottom" class="<?php echo ($current_section === 'registration')?'active':''; ?>">
									<a href="<?php echo base_url('registration/home'); ?>">
										<span class="hidden-sm">Semester Registration</span>
									</a>
								</li>
								<?php if($this->ion_auth->is_admin()): ?>
									<li class="<?php echo ($current_section === '')?'active':''; ?>">
										<a href="<?php echo base_url('registration/blocked'); ?>">
											<span class="hidden-sm">Unblock Student</span>
										</a>
									</li>
								<?php endif; ?>
								<li class="divider"></li>
								<?php if($this->ion_auth->is_admin()): ?>
									<li class="<?php echo ($current_section === 'feedback')?'active':''; ?>">
										<a href="<?php echo base_url('feedback'); ?>">
											<span class="hidden-sm">Feedback</span>
										</a>
									</li>
								<?php endif; ?>	
								<li class="divider"></li>
								<?php if(!$this->ion_auth->is_admin()): ?>
									<li class="<?php echo ($current_section === 'feedback')?'active':''; ?>">
										<a href="<?php echo base_url('archive_feedback_2013_14/feedback'); ?>">
											<span class="hidden-sm">Feedback</span>
										</a>
									</li>
								<?php endif; ?>	
								
								<?php if($this->ion_auth->is_admin()): ?>
									<li class="<?php echo ($current_section === 'elective')?'active':''; ?>">
										<a href="<?php echo base_url('elective'); ?>">
											<span class="hidden-sm">Open Elective</span>
										</a>
									</li>
								<?php endif; ?>	
								<li class="divider"></li>
							<?php if($this->ion_auth->is_hod()): ?>
							<li class="<?php echo ($current_section === 'message')?'active':''; ?>">
								<a href="<?php echo base_url('message'); ?>">
									<span class="glyphicon glyphicon-comment"></span> <span class="hidden-sm">Search Students</span> 
								</a>
							</li>
						<?php endif; ?>
							</ul>
						</li>
						<?php if($this->ion_auth->is_accounts()): ?>
							<li data-placement="bottom" class="tips <?php echo ($current_section === 'accounts')?'active':''; ?>" title="Accounts Section">
								<a href="<?php echo base_url('accounts'); ?>">
									<span class="glyphicon glyphicon-euro"></span> <span class="hidden-sm">Accounts</span> 
								</a>
							</li>
						<?php endif; ?>

						<li data-placement="bottom" class="tips <?php echo ($current_section === 'nba')?'active':''; ?>" title="Attainments">
							<a href="<?php echo base_url('nba'); ?>">
								<span class="glyphicon glyphicon-list"></span> <span class="hidden-sm">NBA</span> 
							</a>
						</li>

						<li data-placement="bottom" class="tips <?php echo ($current_section === 'resupload')?'active':''; ?>" title="Attainments">
							<a href="<?php echo base_url('resupload'); ?>">
								<span class="glyphicon glyphicon-list"></span> <span class="hidden-sm">Results upload</span> 
							</a>
						</li>
					</ul>

					<ul class="nav navbar-nav navbar-right">
						<li data-placement="bottom" class=" tips <?php echo ($current_section === 'wsdc')?'active':''; ?>"  title="WSDC website">
							<a href="http://www.nitw.ac.in/wsdc" target="_blank">
								<span class="glyphicon glyphicon-list"></span> <span class="hidden-sm">About WSDC</span>
							</a>
						</li>
						<li class="pops" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-html="true" data-content="
						<label> <?php echo $this->session->userdata('email'); ?></label> <br>
						Username: <label><?php echo $this->session->userdata('username'); ?></label>  <br>
						Faculty Id: <label><?php echo $this->session->userdata('user_id'); ?></label>  <br>
						<?php date_default_timezone_set('Asia/Calcutta'); ?>
						Last Login : <label><?php echo date('d-M-y H:i:s', $this->session->userdata('old_last_login')); ?></label> 
						" role="button" data-original-title="About">
						<a href="#"><?php echo $this->session->userdata('name') ?></a>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<span class="glyphicon glyphicon-cog"></span> <!-- Settings <b class="caret"></b> --> &nbsp;
						</a>
						<ul class="dropdown-menu">
							<li><a href="<?php echo base_url('auth/change_password') ?>"><span class="glyphicon glyphicon-barcode"></span> Change Password</a> </li>
							<li><a href="<?php echo base_url('auth/logout') ?>"><span class="glyphicon glyphicon-off"></span> Logout</a> </li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- Modal -->
	<div class="modal fade" id="helper_modal" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true">
		<div class="modal-dialog ">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title" id="helper_modal_title">Helper Modal</h4>
				</div>
				<div class="modal-body">
				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
