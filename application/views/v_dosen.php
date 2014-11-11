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
                                        <span class="glyphicon glyphicon-pencil text-success"></span><a ><?php echo anchor('c_admin/lihattawaran',"Edit & Hapus Tawaran KKNP");?></a>
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
                                        <span class="glyphicon glyphicon-pencil text-success"></span><a ><?php echo anchor('c_admin/lihatpengajuan',"Edit & Hapus Pengajuan");?></a>
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
                            </span>Daftar Mahasiswa</a>
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
                                        <span class="glyphicon glyphicon-pencil text-success"></span><a ><?php echo anchor('c_admin/lihatmhs',"Edit & Hapus Mahasiswa");?></a>
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
                                        <span class="glyphicon glyphicon-pencil text-success"></span><a ><?php echo anchor('c_admin/lihatperusahaan',"Edit & Hapus Perusahaan");?></a>
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
                                        <span class="glyphicon glyphicon-pencil text-success"></span><a ><?php echo anchor('c_admin/lihatdosen',"Edit & Hapus Dosen");?></a>
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
						<th>NIP</th>
						<th>Nama Dosen</th>
						<th>E-mail</th>
						<th>Kontak</th>
						<th>pilihan</th>
					</tr>
				</thead>
		
   				<tbody>
   					<?php 
						$i = 1 ;
						foreach ($dosen as $data): 
					?>
					
					
					<tr>
					    <td><?php echo $data->id_dosen ?></td>
					    <td><?php echo $data->nm_dosen ?></td>
					    <td><?php echo $data->email ?></td>
					    <td><?php echo $data->kontak ?></td>
					    <td>
					    	<div class="btn-group">
					    	<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"> 
					    	Pilihan
					    	<span class="caret"></span>
					    	</button>
								<ul class="dropdown-menu" role="menu">
									<li>
										<a ><?php echo anchor('c_admin/editdosen/'.$data->id_dosen,"  Edit  ");?></a>
									</li>
									<li>
										<a ><?php echo anchor('c_admin/hapusdosen/'.$data->id_dosen,"   Hapus  ");?></a>
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