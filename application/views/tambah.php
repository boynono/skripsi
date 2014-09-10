
<!DOCTYPE html>
<html lang="en">
	<head>	
	<title>LIHAT DATA</title>
 	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/bootstrap/css/bootstrap.css" />
 	<script type="text/javascript" src="<?php echo base_url();?>asset/bootstrap/js/bootstrap.min.js"></script>
 	</head>	
	<body>
		<div class="container">
			<div class="col-lg-10">
			<fieldset>
    		<legend>tambah peserta</legend>
				<form class="form-horizontal" role="form" action='<?= base_url();?>index.php/admin/add' method="post">
				 <div class="form-group">
				    <label for="firstName" class="col-lg-3 control-label">NIM</label>
				    <div class="col-lg-6">
				      <input type="text" class="form-control" name="nim" id="nim" placeholder="Masukkan NIM">
				    </div>
				  </div>	
				  <div class="form-group">
				    <label for="lastName" class="col-lg-3 control-label">NAMA</label>
				    <div class="col-lg-6">
				      <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Mahasiswa">
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="email" class="col-lg-3 control-label">Jurusan</label>
				    <div class="col-lg-6">
				      <input type="text" class="form-control" name="jurusan" id="jurusan" placeholder="Jurusan">
				    </div>
				  </div>
				  <div class="form-group">
				    <div class="col-lg-offset-3 col-lg-10">
				      <button type="submit" class="btn btn-success">Save</button> <a href="<?= base_url();?>index.php/admin" class="btn btn-primary">Cancel</a>
				    </div>
				  </div>
				</form>
			</fieldset>
        </div>
		</div>
	</body>
</html>