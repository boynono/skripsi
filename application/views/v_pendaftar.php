<html lang="en">
<head>
  <meta charset="utf-8">
  <title>HOME</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

	<!--link rel="stylesheet/less" href="asset/less/bootstrap.less" type="text/css" /-->
	<!--link rel="stylesheet/less" href="asset/less/responsive.less" type="text/css" /-->
	<!--script src="js/less-1.3.3.min.js"></script-->
	<!--append ‘#!watch’ to the browser URL, then refresh the page. -->
	
	<link href="<?php echo base_url();?>asset/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url();?>asset/css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url();?>asset/css/style.css" rel="stylesheet" type="text/css">

  <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
    <script src="asset/js/html5shiv.js"></script>
  <![endif]-->

  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="asset/img/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="asset/img/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="asset/img/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="asset/img/apple-touch-icon-57-precomposed.png">
  <link rel="shortcut icon" href="asset/img/favicon.png">
  
	<script type="text/javascript" src="<?php echo base_url();?>asset/js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>asset/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>asset/js/scripts.js"></script>
</head>
<body>
<div class="container">
	<div class="row clearfix">
		<div class="col-md-12 column">
			<h3>
				SISTEM INFORMASI KKNP PTIIK
			</h3>
			<nav class="navbar navbar-default" role="navigation">
				<div class="navbar-header">
					 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button> <a class="navbar-brand" href="#">HOME</a>
				</div>
				
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="active">
							<a href="#">Link</a>
						</li>
						<li>
							<a href="#">Link</a>
						</li>
						<li class="dropdown">
							 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Jurusan<strong class="caret"></strong></a>
							<ul class="dropdown-menu">
								<li>
									<a href="#">Teknik Informatika</a>
								</li>
								<li>
									<a href="#">Teknik Komputer</a>
								</li>
								<li>
									<a href="#">Sistem Informasi</a>
								</li>
								<li class="divider">
								</li>
								<li>
									<a href="#">Separated link</a>
								</li>
								<li class="divider">
								</li>
								<li>
									<a href="#">One more separated link</a>
								</li>
							</ul>
						</li>
					</ul>
					<form class="navbar-form navbar-left" role="search">
						<div class="form-group">
							<input class="form-control" type="text" />
						</div> <button type="submit" class="btn btn-default">Submit</button>
					</form>
					<ul class="nav navbar-nav navbar-right">
						<li>
							<a href="#">Link</a>
						</li>
						<li class="dropdown">
							 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown<strong class="caret"></strong></a>
							<ul class="dropdown-menu">
								<li>
									<a href="#">Action</a>
								</li>
								<li>
									<a href="#">Another action</a>
								</li>
								<li>
									<a href="#">Something else here</a>
								</li>
								<li class="divider">
								</li>
								<li>
									<a href="#">Separated link</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
				
			</nav>
		</div>
	</div>
	<div class="row clearfix">
			
		<div class="col-md-3 column">
			<legend>Login</legend>
				<?php echo form_open('login/cekuser' , 'class="form-horizontal"'); ?>
					<div class="form-group">
				    	<label for="username" class="col-lg-3 control-label">Username</label>
				    	<div class="col-lg-9">
				      	<input type="text" class="form-control" name="username"  placeholder="username">
				    	</div>
				  	</div>		
				  <div class="form-group">
				    <label for="password" class="col-lg-3 control-label">Password</label>
				    <div class="col-lg-9">
				      <input type="text" class="form-control" name="password"  placeholder="password">
				    </div>
				  </div>
				  
				  <div class="form-group">
				    <div class="col-lg-offset-8 col-lg-10">
				      <button type="submit" class="btn btn-success">Login</button>
				    </div>
				  
				  </div>
				  
				<?php echo form_close(); ?>		
		</div>
		<div class="col-md-9 column">
			
			<table class="table">
				<thead>
					<tr>
						<th>
							NO
						</th>
						<th>
							NIM
						</th>
						<th>
							NAMA
						</th>
						<th>
							JURUSAN
						</th>
						<th>
							PILIHAN
						</th>
					</tr>
				</thead>
		<?php 
			$i = 1 ;
			foreach ($mhs as $data): 
		?>
   				<tbody>
					<tr class="warning">
					    <td><?php echo $i++ ?></td>
					    <td><?php echo $data->nim ?></td>
					    <td><?php echo $data->nama ?></td>
					    <td><?php echo $data->jurusan ?></td>
					    <td><a href="updateMhs/<?php echo $data->idMhs;?>">update</a>|
					    <a href="delete/<?php echo $data->idMhs;?>">delete</a></td>
					</tr>
				</tbody>
  		<?php endforeach ?>
  		
  			</table>
  				<ul class="pagination">
				<?php echo $pagination ; ?>
	  				
				</ul>
		</div>
	</div>
	<div class="row clearfix">
		<div class="col-md-12 column">
			<h3>
				HALAMAN PENDAFTAR
				<?php echo anchor('pendaftar/logout'," </br> keluar <br> ");?>
			</h3>
		</div>
	</div>
</div> 
</body>

</html>