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
<div class="container-full">
	<!--
		bagian atas
	-->
	<div class="row">
		<div class="col-md-12">
			<h1>
				SISTEM INFORMASI KKNP PTIIK
			</h1>
			
		</div>
	</div>
	<!--
		bagian tengah
	-->
	<div class="row">
		<div class="col-md-3 ">
			<legend>Halaman Admin</legend>
			<div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><span class="glyphicon glyphicon-user">
                            </span>Login</a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in">
                        <div class="panel-body">
                        	<?php echo form_open('c_mahasiswa/cekadmin' , 'class="form-horizontal"'); ?>
								<div class="form-group">
								<label for="username" class="col-lg-3 control-label">Username</label>
									<div class="col-lg-9">
									  	<input type="text" class="form-control" name="username"  placeholder="username">
									</div>
								</div>		
								<div class="form-group">
								    <label for="password" class="col-lg-3 control-label">Password</label>
									    <div class="col-lg-9">
											<input type="password" class="form-control" name="password"  placeholder="password">
										 </div>
								</div>
								<div class="form-group">
									<div class="col-lg-offset-8 col-lg-10">
										<button type="submit" class="btn btn-success">Login</button>
									</div>
								</div>
							<?php echo form_close(); ?>       
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><span class="glyphicon glyphicon-folder-close">
                            </span>Mahasiswa KKNP</a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-pencil text-primary"></span><a><?php echo anchor('admin',"Informatika/Ilmu Komputer");?></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-flash text-success"></span><a ><?php echo anchor('admin/add',"Sistem Informasi");?></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-file text-info"></span><a href="#">Sistem Komputer</a>
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
                            </span>Tawaran KKNP</a>
                        </h4>
                    </div>
                    <div id="collapseFour" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-usd"></span><a><?php echo anchor('c_mahasiswa/tawarankknp',"Tawaran KKNP");?></a>
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
                                        <a><?php echo anchor('admin/lihat_nilai',"Lihat Nilai");?></a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
			</div>
		</div>
		
		<div class="col-md-9">
			
			<table id="lihat" class="display">
				<thead>
					<tr>
						<th>perusahaan</th>
						<th>alamat</th>
						<th>tanggal mulai</th>
						<th>tanggal selesai</th>
						<th>objek</th>
						<th>nama mahasiswa</th>
						<th>dosen pembimbing</th>
						<th>status</th>
					</tr>
				</thead>
		
   				<tbody>
   					<?php 
						$i = 1 ;
						foreach ($kknp as $data): 
					?>
					
					
					<tr>
					    <td><?php echo $data->nm_perusahaan ?></td>
					    <td><?php echo $data->alamat ?></td>
					    <td><?php echo $data->tanggal_mulai ?></td>
					    <td><?php echo $data->tanggal_selesai ?></td>
					    <td><?php echo $data->objek ?></td>
					    <td>
					    	<?php 
					    	$nama = explode(',', $data->nm_mhs);
					    	foreach ($nama as $nama){
					    		echo "<span class='label label-info'>".$nama."</span><br><br>";
					    	}
					    	?>
					    </td>
					    <td><?php echo $data->nm_dosen ?></td>
					    <td><?php echo $data->keterangan ?></td>
					    
					</tr>
					<?php endforeach ?>
				</tbody>
  		
  			</table>
  				
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<h3>
				h3. Lorem ipsum dolor sit amet.
			</h3>
		</div>
	</div>
</div> 
</body>

</html>