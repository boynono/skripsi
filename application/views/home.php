<!DOCTYPE html>
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
	<div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand"><img class="tengah" height="20px" src="<?php echo base_url();?>asset/gambar/ptiik_full.png" /></a>
            </div>
            <!-- Top Menu Items -->
            
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                    	<a href="<?php echo site_url('c_mahasiswa'); ?>"><i class="glyphicon glyphicon-home"></i> Home</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo1"><i class="glyphicon glyphicon-file"></i> KKNP Jurusan  <i class="glyphicon glyphicon-chevron-down"></i></a>
                        <ul id="demo1" class="collapse">
                            <li>
                                <a href="<?php echo site_url('c_mahasiswa/kknptif'); ?>"><i class="glyphicon glyphicon-info"></i> Informatika</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('c_mahasiswa/kknpsi'); ?>"><i class="glyphicon glyphicon-info"></i> Sistem Informasi</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('c_mahasiswa/kknpsiskom'); ?>"><i class="glyphicon glyphicon-info"></i> Sistem Komputer</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo2"><i class="glyphicon glyphicon-file"></i> Status KKNP  <i class="glyphicon glyphicon-chevron-down"></i></a>
                        <ul id="demo2" class="collapse">
                            <li>
                                <a href="<?php echo site_url('c_mahasiswa/pengajuan'); ?>"><i class="glyphicon glyphicon-info"></i> Pengajuan</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('c_mahasiswa/pengerjaan'); ?>"><i class="glyphicon glyphicon-info"></i> Pengerjaan</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('c_mahasiswa/selesai'); ?>"><i class="glyphicon glyphicon-info"></i> Selesai</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('c_mahasiswa/ditolak'); ?>"><i class="glyphicon glyphicon-info"></i> Ditolak</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                    	<a href="<?php echo site_url('c_mahasiswa/tawaran'); ?>"><i class="glyphicon glyphicon-upload"></i> Tawaran KKNP</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo3"><i class="glyphicon glyphicon-user"></i> Login Admin  <i class="glyphicon glyphicon-chevron-down"></i></a>
                        <ul id="demo3" class="collapse">
                            <li>
                                <?php echo form_open('c_mahasiswa/cekadmin' , 'class="form-horizontal"'); ?>
								<div class="form-group">
								<label class="col-lg-2 control-label">User<br></label>
									<div class="col-lg-6">
									  	<input type="text" class="form-control" name="username"  placeholder="username">
									</div>
								</div>		
								<div class="form-group">
								    <label class="col-lg-2 control-label">Pass<br></label>
									    <div class="col-lg-6">
											<input type="password" class="form-control" name="password"  placeholder="password">
										 </div>
								</div>
								<div class="form-group">
									<div class="col-lg-offset-2 col-lg-4">
										<button type="submit" class="btn btn-success">Login</button>
									</div>
								</div>
							<?php echo form_close(); ?>
                            </li>
                            
                        </ul>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            <img class="tengah" src="<?php echo base_url();?>asset/gambar/kknp2.png" />
                            <br />
                            <small><?php echo $judul;?></small>
                        </h1>
                        
                    </div>
                </div>
                <!-- /.row -->
				<div class="row">
                    <div class="col-lg-12">
                    	<div class="table-responsive">
                        <table id="lihat" class="display table table-striped table-bordered" width="100%">
							<thead>
								<tr>
									<th>Perusahaan</th>
									<th>Alamat</th>
									<th>Waktu</th>
									<!-- <th>tanggal selesai</th>
									 -->
									<th>Objek</th>
									<th>Mahasiswa</th>
									<th>Dosen Pembimbing</th>
									<th>Status</th>
									<th>Pilihan</th>
								</tr>
							</thead>
					
			   				<tbody>
			   					<?php 
									$i = 1 ;
									foreach ($kknp as $data): 
								?>
								
								
								<tr>
								    <td><b><?php echo $data->nm_perusahaan ?></b></td>
								    <td><?php echo $data->alamat ?></td>
								    <!-- <td><?php echo $data->tgl ?></td>
								     -->
								    <!-- <td><?php echo date("d M Y",strtotime($data->tanggal_mulai)); ?></td>
								    <td><?php echo date("d M Y",strtotime($data->tgl)); ?></td>
								    -->
								    <td>
								    	<?php 
								    	$tgl = explode(',', $data->tgl);
								    	foreach ($tgl as $tgl){
								    		//echo "<span class='label label-info'>".$tgl."</span><br><br>";
											echo date("d M Y -",strtotime($tgl));
								    	}
								    	?>
								    </td>
								    <td>
								    	<?php 
								    	$objk = explode(',', $data->objek);
								    	foreach ($objk as $objk){
								    		echo "<span class='label label-info'>".$objk."</span><br><br>";
								    	}
								    	?>
								    </td>
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
								    <td>
								    	<a href="<?php echo site_url('c_mahasiswa/detailkknp/'.$data->id_kknp); ?>"><button class="button">Detail</button></a>
								  	</td>
								</tr>
								<?php endforeach ?>
							</tbody>
			  			</table>
			  			</div>
                    </div>
                </div>
                
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->
		<!-- <div class="row bawah">
			<div class="col-md-12">
				<footer class="footer">
				<h3>
					h3. Lorem ipsum dolor sit amet.
				</h3>
				</footer>
			</div>
		</div> -->
    </div>
    <!-- /#wrapper -->

	
	

</body>

</html>