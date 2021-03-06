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
                    	<a href="<?php echo site_url('c_admin'); ?>"><i class="glyphicon glyphicon-home"></i> Home</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo1"><i class="glyphicon glyphicon-file"></i> Data KKNP  <i class="glyphicon glyphicon-chevron-down"></i></a>
                        <ul id="demo1" class="collapse">
                            <li>
                                <a href="<?php echo site_url('c_admin/tambahkknp'); ?>"><i class="glyphicon glyphicon-info"></i> Tambah KKNP</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('c_admin/lihatkknp'); ?>"><i class="glyphicon glyphicon-info"></i> Lihat & Edit KKNP</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo2"><i class="glyphicon glyphicon-file"></i> Tawaran KKNP  <i class="glyphicon glyphicon-chevron-down"></i></a>
                        <ul id="demo2" class="collapse">
                            <li>
                                <a href="<?php echo site_url('c_admin/tambahtawaran'); ?>"><i class="glyphicon glyphicon-info"></i> Tambah Tawaran</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('c_admin/lihattawaran'); ?>"><i class="glyphicon glyphicon-info"></i> Lihat & Edit Tawaran</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo3"><i class="glyphicon glyphicon-file"></i> Pengajuan Perusahaan  <i class="glyphicon glyphicon-chevron-down"></i></a>
                        <ul id="demo3" class="collapse">
                            <li>
                                <a href="<?php echo site_url('c_admin/tambahpengajuan'); ?>"><i class="glyphicon glyphicon-info"></i> Tambah Pengajuan</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('c_admin/lihatpengajuan'); ?>"><i class="glyphicon glyphicon-info"></i> Lihat & Edit Pengajuan</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo4"><i class="glyphicon glyphicon-file"></i> Daftar Mahasiswa  <i class="glyphicon glyphicon-chevron-down"></i></a>
                        <ul id="demo4" class="collapse">
                            <li>
                                <a href="<?php echo site_url('c_admin/tambahmahasiswa'); ?>"><i class="glyphicon glyphicon-info"></i> Tambah Mahasiswa</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('c_admin/lihatmahasiswa'); ?>"><i class="glyphicon glyphicon-info"></i> Lihat & Edit Mahasiswa</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo5"><i class="glyphicon glyphicon-file"></i> Data Perusahaan  <i class="glyphicon glyphicon-chevron-down"></i></a>
                        <ul id="demo5" class="collapse">
                            <li>
                                <a href="<?php echo site_url('c_admin/tambahperusahaan'); ?>"><i class="glyphicon glyphicon-info"></i> Tambah Perusahaan</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('c_admin/lihatperusahaan'); ?>"><i class="glyphicon glyphicon-info"></i> Lihat & Edit Perusahaan</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo6"><i class="glyphicon glyphicon-file"></i> Dosen Pembimbing  <i class="glyphicon glyphicon-chevron-down"></i></a>
                        <ul id="demo6" class="collapse">
                            <li>
                                <a href="<?php echo site_url('c_admin/tambahdosen'); ?>"><i class="glyphicon glyphicon-info"></i> Tambah Dosen</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('c_admin/lihatdosen'); ?>"><i class="glyphicon glyphicon-info"></i> Lihat & Edit Dosen</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo7"><i class="glyphicon glyphicon-user"></i> Admin  <i class="glyphicon glyphicon-chevron-down"></i></a>
                        <ul id="demo7" class="collapse">
                            <li>
                                <a href="<?php echo site_url('c_admin/logout'); ?>"><i class="glyphicon glyphicon-trash"></i> Keluar</a>
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
									<th>NIM</th>
									<th>Nama</th>
									<th>Jurusan</th>
									<th>pilihan</th>
								</tr>
							</thead>
					
			   				<tbody>
			   					<?php 
									$i = 1 ;
									foreach ($mahasiswa as $data): 
								?>
								
								
								<tr>
								    <td><?php echo $data->nim ?></td>
								    <td><?php echo $data->nm_mhs ?></td>
								    <td><?php echo $data->nm_jurusan ?></td>
								    <td>
								    	<div class="btn-group">
								    	<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"> 
								    	Pilihan
								    	<span class="caret"></span>
								    	</button>
											<ul class="dropdown-menu" role="menu">
												<li>
													<a ><?php echo anchor('c_admin/editmahasiswa/'.$data->nim,"  Edit  ");?></a>
												</li>
												<li>
													<a ><?php echo anchor('c_admin/hapusmahasiswa/'.$data->nim,"   Hapus  ");?></a>
												</li>
												<li class="disabled">
													<a href="#">Another action</a>
												</li>
												<li class="divider">
												</li>
											</ul>	
										</div>
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