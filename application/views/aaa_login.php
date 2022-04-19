
<html>
<head>
<title>Aplikasi Ujian Online</title>
<link href="<?php echo base_url(); ?>___/css/bootstrap.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>___/css/style.css" rel="stylesheet">
</head>
<body>

<div class="container">
	<div class="col-md-4"></div>
	<div class="col-md-4">
	<form action="" method="post" name="fl" id="f_login">
		
		<div class="panel panel-default top150">
			<div class="panel-heading"><h4 style="margin: 5px"><i class="glyphicon glyphicon-user"></i> Silakan login</h4></div>
			<div class="panel-body">
				<div id="konfirmasi"></div>
				<div class="input-group">
					<span class="input-group-addon">@</span>
					<input type="text" id="username" name="username" autofocus value="" placeholder="Username" class="form-control" />
				</div> 
				
				<div class="input-group top15">
					<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
					<input type="password" id="password" name="password" value="" placeholder="Password" class="form-control"/>
				</div> 
				<div class="login-actions">
					<button class="button btn btn-dafault btn-large col-lg-12 top15">Login</button>
				</div> 
			</div>
		</div> 
		
		
	</form>
	</div>
	<div class="col-md-4"></div>
</div> 



<script src="<?php echo base_url(); ?>___/js/jquery-1.11.3.min.js"></script> 
<script src="<?php echo base_url(); ?>___/js/bootstrap.js"></script>
<script src="<?php echo base_url(); ?>___/js/aplikasi.js"></script> 

<script type="text/javascript">
	$("#f_login").submit(function(event) {
		event.preventDefault();
		var data 	= $('#f_login').serialize();
		$("#konfirmasi").html("<div class='alert alert-info'><i class='icon icon-spinner icon-spin'></i> Checking...</div>")
		$.ajax({
			type: "POST",
			data: data,
			url: "<?php echo base_URL(); ?>adm/act_login",
			success: function(r) {
				if (r.log.status == 0) {
					$("#konfirmasi").html("<div class='alert alert-danger'>"+r.log.keterangan+"</div>");
				} else {
					$("#konfirmasi").html("<div class='alert alert-success'>"+r.log.keterangan+"</div>");
					window.location.assign("<?php echo base_url(); ?>adm"); 
				}
			}
		});
	});
</script>
</body>
</html>