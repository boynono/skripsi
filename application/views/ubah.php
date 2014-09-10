<html lang="en">
	<head>	
	<title>UBAH DATA</title>
 	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/bootstrap/css/bootstrap.css" />
 	<script type="text/javascript" src="<?php echo base_url();?>asset/bootstrap/js/bootstrap.min.js"></script>
 	</head>	
	<body>
		<div class="container">
			<div class="col-lg-10">
			
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
				      <button type="submit" class="btn btn-success">Save</button> <a href="<?= base_url();?>index.php/admin/lihat" class="btn btn-primary">Cancel</a>
				    </div>
				  </div>
				  
				<?php echo form_close(); ?>  
				
			
        </div>
		</div>
	</body>
</html>

        