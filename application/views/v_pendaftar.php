<html lang="en">
<head>
  <meta charset="utf-8">
  <title>HOME</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
	<!-- GLOBAL -->
	<link href="<?php echo base_url();?>asset/css/2bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url();?>asset/css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url();?>asset/css/sb-admin.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url();?>asset/css/tambahan.css" rel="stylesheet" type="text/css">
  
  
	
	<!-- DataTables CSS -->
	<link href="<?php echo base_url();?>asset/css/2dataTables.bootstrap.css" rel="stylesheet" type="text/css">
	  
	<!-- DataTables Jquery -->
	<script type="text/javascript" src="<?php echo base_url();?>asset/js/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>asset/js/2jquery.dataTables.min.js"></script>		
	<script type="text/javascript" src="<?php echo base_url();?>asset/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>asset/js/2dataTables.bootstrap.js"></script>
	  

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