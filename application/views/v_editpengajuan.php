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
                            </span>Account</a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in">
                        <div class="panel-body">
                            <table class="table">
		                        <tr>
			                        <td>
			                            <span class="glyphicon glyphicon-trash"></span>
			                            <?php echo anchor('c_admin/logout'," keluar ");?>
			                        </td>
		                        </tr>        
                    		</table>
                    	</div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><span class="glyphicon glyphicon-folder-close">
                            </span>KKNP</a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-pencil text-primary"></span><a><?php echo anchor('c_admin/tambahkknp',"Tambah KKNP");?></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-pencil text-success"></span><a ><?php echo anchor('c_admin/index',"Edit & Hapus KKNP");?></a>
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
                                        <span class="glyphicon glyphicon-pencil text-primary"></span><a><?php echo anchor('c_admin/tambahtawaran',"Tambah Tawaran KKNP");?></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-pencil text-success"></span><a ><?php echo anchor('c_admin/v_tawaran',"Edit & Hapus Tawaran KKNP");?></a>
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
                            </span>Pengajuan Perusahaan</a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-pencil text-primary"></span><a><?php echo anchor('c_admin/tambahpengajuan',"Tambah Pengajuan");?></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-pencil text-success"></span><a ><?php echo anchor('c_admin/v_pengajuan',"Edit & Hapus Pengajuan");?></a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive"><span class="glyphicon glyphicon-file">
                            </span>Mahasiswa KKNP</a>
                        </h4>
                    </div>
                    <div id="collapseFive" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-pencil text-primary"></span><a><?php echo anchor('c_admin/tambahmhs',"Tambah Mahasiswa KKNP");?></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-pencil text-success"></span><a ><?php echo anchor('c_admin/v_mhs',"Edit & Hapus Mahasiswa");?></a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseSix"><span class="glyphicon glyphicon-file">
                            </span>Perusahaan</a>
                        </h4>
                    </div>
                    <div id="collapseSix" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-pencil text-primary"></span><a><?php echo anchor('c_admin/tambahperusahaan',"Tambah Perusahaan");?></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-pencil text-success"></span><a ><?php echo anchor('c_admin/v_perusahaan',"Edit & Hapus Perusahaan");?></a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseSeven"><span class="glyphicon glyphicon-file">
                            </span>Dosen Pembimbing</a>
                        </h4>
                    </div>
                    <div id="collapseSeven" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-pencil text-primary"></span><a><?php echo anchor('c_admin/tambahdosen',"Tambah Dosen");?></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-pencil text-success"></span><a ><?php echo anchor('c_admin/v_dosen',"Edit & Hapus Dosen");?></a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                
              <!-- batas menu -->  
			</div>
			
		</div>
		<div class="col-md-9 column">
			<legend>edit pengajuan</legend>
				<?php echo form_open('c_admin/editpengajuan/'.$hasil->id_pengajuan , 'class="form-horizontal"'); ?>
					<div class="form-group">
				    	<label for="nim" class="col-lg-3 control-label">Objek</label>
				    	<div class="col-lg-6">
				      	<input type="text" class="form-control" name="objek" value="<?php echo $hasil->objek; ?>" placeholder="Nim Mahasiswa">
				    	</div>
				  	</div>		
					<div class="form-group">
				    	<label for="nama" class="col-lg-3 control-label">Mulai</label>
				    	<div class="col-lg-6">
				      	<input type="text" class="form-control" name="tanggal_mulai" value="<?php echo $hasil->tanggal_mulai; ?>" placeholder="Nama Mahasiswa">
				    	</div>
				  	</div>
				  	<div class="form-group">
				    	<label for="nama" class="col-lg-3 control-label">Selesai</label>
				    	<div class="col-lg-6">
				      	<input type="text" class="form-control" name="tanggal_selesai" value="<?php echo $hasil->tanggal_selesai; ?>" placeholder="Nama Mahasiswa">
				    	</div>
				  	</div>
				  	<div class="form-group">
				    	<label for="id dosen" class="col-lg-3 control-label">perusahaan</label>
				    	<div class="col-lg-6">
				    		<select class="form-control" name="id_perusahaan" id="id_perusahaan">
						    	<?php 
									$i = 1 ;
									foreach ($perusahaan as $data): 
								?>
						    	<option><?php echo $data->id_perusahaan ?></option>
						    	<?php endforeach ?>
				    		</select>
				    	</div>
				 	</div>
				  <div class="form-group">
				    <div class="col-lg-offset-3 col-lg-10">
				      <button type="submit" class="btn btn-success">Save</button> <a href="<?= base_url();?>index.php/c_admin" class="btn btn-primary">Cancel</a>
				    </div>
				  </div>
				  
				<?php echo form_close(); ?>  
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
		
	

