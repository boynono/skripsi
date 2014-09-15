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
	<link href="<?php echo base_url();?>asset/css/dataTables.bootstrap.css" rel="stylesheet" type="text/css">

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
	<script type="text/javascript" src="<?php echo base_url();?>asset/js/dataTables.bootstrap.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>asset/js/scripts.js"></script>
	
	<!-- DataTables CSS -->
<!--<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.2/css/jquery.dataTables.css">-->
<link href="<?php echo base_url();?>asset/css/jquery.dataTables.css" rel="stylesheet" type="text/css">
  
<!-- jQuery -->
<!--<script type="text/javascript" charset="utf8" src="//code.jquery.com/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>asset/js/jquery-1.10.2.min.js"></script>
-->	<script type="text/javascript" src="<?php echo base_url();?>asset/js/jquery-1.11.1.min.js"></script>
	  
<!-- DataTables -->
<!--<script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.2/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>asset/js/jquery.dataTables.js"></script>		
-->	<script type="text/javascript" src="<?php echo base_url();?>asset/js/jquery.dataTables.min.js"></script>		
	<script type="text/javascript">
		$(document).ready(function() {
			$('#lihat').DataTable();
		} );
	</script>
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
						<li>
							<a href="#">Mahasiswa KKNP</a>
						</li>
						<li>
							<a href="#">Proposal KKNP</a>
						</li>
						<li>
							<a href="#">Tawaran KKNP</a>
						</li>
						<li>
							<a href="#">Dokumen KKNP</a>
						</li>
						<li class="dropdown">
							 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Jurusan<strong class="caret"></strong></a>
							<ul class="dropdown-menu">
								
								<li>
									<a href="#">Teknik Informatika</a>
								</li>
								<li class="divider">
								</li>
								<li>
									<a href="#">Teknik Komputer</a>
								</li>
								<li class="divider">
								</li>
								<li>
									<a href="#">Sistem Informasi</a>
								</li>
								
							</ul>
						</li>
					</ul>
					<form class="navbar-form navbar-right" role="search">
						<div class="form-group">
							<input class="form-control" type="text" />
						</div> <button type="submit" class="btn btn-default">Submit</button>
					</form>
					
				</div>
				
			</nav>
		</div>
	</div>
	<div class="row clearfix">
				
		<div class="col-md-3 column">
			<legend>Halaman Admin</legend>
			<div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><span class="glyphicon glyphicon-user">
                            </span>Account</a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <a href="#">Tambah Peserta</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">Daftar Peserta</a> <span class="label label-info">5</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-trash"></span>
                                        <?php echo anchor('admin/logout'," keluar ");?>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><span class="glyphicon glyphicon-folder-close">
                            </span>Data KKNP</a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-pencil text-primary"></span><a><?php echo anchor('admin',"Lihat Peserta KKNP");?></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-flash text-success"></span><a ><?php echo anchor('admin/add',"Tambah Data KKNP");?></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-file text-info"></span><a href="#">Pengajuan</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-comment text-success"></span><a href="#">Comments</a>
                                        <span class="badge">42</span>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                
                
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour"><span class="glyphicon glyphicon-file">
                            </span>Dokumen</a>
                        </h4>
                    </div>
                    <div id="collapseFour" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-usd"></span><a href="#">Buat Surat Pengantar</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-user"></span><a href="#">Buat Surat Tugas Dosen</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-tasks"></span><a href="#">Tambah Pengumuman</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-shopping-cart"></span><a href="#">Feedback</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><span class="glyphicon glyphicon-th">
                            </span>Kelola Nilai</a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <a href="#">Masukkan Nilai</a> <span class="label label-success">$ 320</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">Edit Nilai</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
			<nav class="navbar navbar-default" role="navigation">
				<div class="navbar-header">
					 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button> <a class="navbar-brand" href="#">Admin</a>
				</div>
				
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li>
							<a><?php echo anchor('admin/add',"  tambah data  ");?></a>
						</li>
						<li>
							<a><?php echo anchor('admin/logout'," keluar ");?></a>
						</li>
					</ul>	
				</div>
				
				<div class="panel panel-faq">
				    <div class="panel-heading">
				        <h4 class="panel-title">
				            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_2">
				                1. Some title goes here
				            </a>
				        </h4>
				    </div>
				    <div id="accordion1_2" class="panel-collapse collapse">
				        <div class="panel-body">
				                sample entry text goes here
				        </div>
				    </div>
				</div>
			</nav>
			
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">
						<?php echo anchor('admin/logout'," </br> keluar <br> ");?>
					</h3>
				</div>
				<div class="panel-body">
					<?php echo anchor('admin/add'," </br> tambah data <br> ");?>
				</div>
				<div class="panel-footer">
					<?php echo anchor('admin','lihat data');?>
				</div>
			</div>
			
			<div class="list-group">
				 <a href="#" class="list-group-item active">Home</a>
				<div class="list-group-item">
					List header
				</div>
				<div class="list-group-item">
					<h4 class="list-group-item-heading">
						List group item heading
					</h4>
					<p class="list-group-item-text">
						...
					</p>
				</div>
				<div class="list-group-item">
					<span class="badge">14</span>Help
				</div> <a class="list-group-item active"><span class="badge">14</span>Help</a>
			</div>
		</div>
		<div class="col-md-9 column">
			<legend>edit peserta</legend>
				<?php echo form_open('admin/updateMhs/'.$hasil->idMhs , 'class="form-horizontal"'); ?>
					<div class="form-group">
				    	<label for="nim" class="col-lg-3 control-label">NIM</label>
				    	<div class="col-lg-6">
				      	<input type="text" class="form-control" name="nim" value="<?php echo $hasil->nim; ?>" placeholder="Nim Mahasiswa">
				    	</div>
				  	</div>		
				  <div class="form-group">
				    <label for="nama" class="col-lg-3 control-label">NAMA</label>
				    <div class="col-lg-6">
				      <input type="text" class="form-control" name="nama" value="<?php echo $hasil->nama; ?>" placeholder="Nama Mahasiswa">
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="jurusan" class="col-lg-3 control-label">Jurusan</label>
				    <div class="col-lg-6">
				      <input type="text" class="form-control" name="jurusan" value="<?php echo $hasil->jurusan; ?>" placeholder="Jurusan">
				    </div>
				  </div>
				  <div class="form-group">
				    <div class="col-lg-offset-3 col-lg-10">
				      <button type="submit" class="btn btn-success">Save</button> <a href="<?= base_url();?>index.php/admin" class="btn btn-primary">Cancel</a>
				    </div>
				  </div>
				  
				<?php echo form_close(); ?>  
		</div>
	</div>
	<div class="row clearfix">
		<div class="col-md-12 column">
			<h3>
				BAGIAN BAWAH
			</h3>
		</div>
	</div>
</div> 
</body>
</html>