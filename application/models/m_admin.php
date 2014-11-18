<?php

 class M_admin extends CI_Model {
//==========================KKNP===================		
	function kknp() {
		$sql = "
				SELECT kknp.id_kknp, 
				perusahaan.nm_perusahaan, 
				perusahaan.alamat, 
				pengajuan_kknp.objek,
                CONCAT(
				pengajuan_kknp.tanggal_mulai,',', 
				pengajuan_kknp.tanggal_selesai
                ) as tgl, 
				dosen.nm_dosen, status.keterangan, 
				GROUP_CONCAT(mahasiswa.nm_mhs) as nm_mhs, 
				jurusan.nm_jurusan 
				FROM kknp 
				LEFT JOIN pengajuan_kknp ON pengajuan_kknp.id_pengajuan = kknp.id_pengajuan 
				LEFT JOIN perusahaan ON perusahaan.id_perusahaan = pengajuan_kknp.id_perusahaan 
				LEFT JOIN mahasiswa ON mahasiswa.nim = kknp.nim 
				LEFT JOIN jurusan ON jurusan.id_jurusan = mahasiswa.id_jurusan 
				LEFT JOIN dosen ON dosen.id_dosen = kknp.id_dosen 
				LEFT JOIN status ON status.id_status = kknp.id_status 
				GROUP BY pengajuan_kknp.id_pengajuan, status.keterangan
				";
		$query=$this->db->query($sql);
		return $query->result();
	}
	// function kknp2($id_kknp){
			// $query=$this->db->query('
				// SELECT kknp.id_kknp, 
				// mahasiswa.nim,
				// mahasiswa.nm_mhs, 
				// jurusan.nm_jurusan,
				// perusahaan.nm_perusahaan, 
				// perusahaan.alamat as p_alamat,
				// perusahaan.email as p_email,
				// perusahaan.kontak as p_kontak, 
				// pengajuan_kknp.objek,
				// pengajuan_kknp.tanggal_mulai, 
				// pengajuan_kknp.tanggal_selesai,
                // dosen.nm_dosen, 
				// dosen.email,
				// dosen.kontak,
				// status.keterangan 
// 				 
				// FROM kknp 
				// LEFT JOIN pengajuan_kknp ON pengajuan_kknp.id_pengajuan = kknp.id_pengajuan 
				// LEFT JOIN perusahaan ON perusahaan.id_perusahaan = pengajuan_kknp.id_perusahaan 
				// LEFT JOIN mahasiswa ON mahasiswa.nim = kknp.nim 
				// LEFT JOIN jurusan ON jurusan.id_jurusan = mahasiswa.id_jurusan 
				// LEFT JOIN dosen ON dosen.id_dosen = kknp.id_dosen 
				// LEFT JOIN status ON status.id_status = kknp.id_status 
				// WHERE id_kknp="'.$id_kknp.'"
			// ');
			// return $query->result();
	// }
	function lihatkknp() {
		$sql = "SELECT kknp.id_kknp, 
				perusahaan.nm_perusahaan,
				perusahaan.alamat,
				pengajuan_kknp.objek,
				pengajuan_kknp.tanggal_mulai,
				pengajuan_kknp.tanggal_selesai,
				mahasiswa.nm_mhs,
				dosen.nm_dosen,
				status.keterangan
				
				FROM perusahaan
				LEFT JOIN pengajuan_kknp ON pengajuan_kknp.id_perusahaan = perusahaan.id_perusahaan
				LEFT JOIN kknp ON kknp.id_pengajuan = pengajuan_kknp.id_pengajuan 
				LEFT JOIN mahasiswa ON mahasiswa.nim = kknp.nim
				LEFT JOIN dosen ON dosen.id_dosen = kknp.id_dosen
				LEFT JOIN status ON status.id_status = kknp.id_status
				WHERE 1
			   ";
		
		$query=$this->db->query($sql);
		return $query->result();
	}
	function status()
	{
		$sql = "SELECT * FROM status ";
		
		$query=$this->db->query($sql);
		return $query->result();
	}
	function tambah_kknp(){
		$id_kknp=$this->input->post('id_kknp');
		$id_pengajuan=$this->input->post('id_pengajuan');
		$nim=$this->input->post('nim');
		$id_dosen=$this->input->post('id_dosen');
		$id_status=$this->input->post('id_status');
		
		$data=array(
			'id_kknp'=>$id_kknp,
			'id_pengajuan'=>$id_pengajuan,
			'nim'=>$nim,
			'id_dosen'=>$id_dosen,
			'id_status'=>$id_status
		);
		return $this->db->insert('kknp',$data);
	}
	function getIdkknp($id_kknp){
		return $this->db->get_where('kknp',array('id_kknp'=>$id_kknp))->row();
	}
	
	function edit_kknp($id_kknp){
		$nim=$this->input->post('nim');	
		$id_pengajuan=$this->input->post('id_pengajuan');
		$id_dosen=$this->input->post('id_dosen');
		$id_status=$this->input->post('id_status');
		
		$data=array(
			'nim'=>$nim,
			'id_pengajuan'=>$id_pengajuan,
			'id_dosen'=>$id_dosen,
			'id_status'=>$id_status
		);
		$this->db->where('id_kknp',$id_kknp);
		$this->db->update('kknp',$data);
	}
	function hapus_kknp($idkknp){
		$this->db->where('id_kknp',$idkknp);
		$this->db->delete('kknp',$data);
	}
//===================TAWARAN===============	
	function tawaran(){
		$sql = "
				SELECT tawaran_kknp.id_tawaran,
				perusahaan.nm_perusahaan, 
				perusahaan.alamat, 
				perusahaan.email, 
				perusahaan.kontak, 
				tawaran_kknp.objek, 
				tawaran_kknp.tanggal_mulai, 
				tawaran_kknp.tanggal_selesai 
				FROM perusahaan 
				LEFT JOIN tawaran_kknp ON tawaran_kknp.id_perusahaan = perusahaan.id_perusahaan 
				WHERE 1 
			   ";
		
		$query=$this->db->query($sql);
		return $query->result();
	}
	function tambah_tawaran(){
		$id_tawaran=$this->input->post('id_tawaran');
		$objek=$this->input->post('objek');
		$tanggal_mulai=$this->input->post('tanggal_mulai');
		$tanggal_selesai=$this->input->post('tanggal_selesai');
		$id_perusahaan=$this->input->post('id_perusahaan');
		
		$data=array(
			'id_tawaran'=>$id_tawaran,
			'objek'=>$objek,
			'tanggal_mulai'=>$tanggal_mulai,
			'tanggal_selesai'=>$tanggal_selesai,
			'id_perusahaan'=>$id_perusahaan
		);
		return $this->db->insert('tawaran_kknp',$data);
	}
	function getIdtawaran($id_tawaran){
		return $this->db->get_where('tawaran_kknp',array('id_tawaran'=>$id_tawaran))->row();
	}
	
	function edit_tawaran($id_tawaran){
		$objek=$this->input->post('objek');
		$tanggal_mulai=$this->input->post('tanggal_mulai');
		$tanggal_selesai=$this->input->post('tanggal_selesai');
		$id_perusahaan=$this->input->post('id_perusahaan');
		
		$data=array(
			'objek'=>$objek,
			'tanggal_mulai'=>$tanggal_mulai,
			'tanggal_selesai'=>$tanggal_selesai,
			'id_perusahaan'=>$id_perusahaan
		);
		$this->db->where('id_tawaran',$id_tawaran);
		$this->db->update('tawaran_kknp',$data);
	}
	function hapus_tawaran($id_tawaran){
		$this->db->where('id_tawaran',$id_tawaran);
		$this->db->delete('tawaran_kknp',$data);
	}
//===================TAWARAN===============
	function pengajuan(){
		$sql = "
				SELECT pengajuan_kknp.id_pengajuan,
				perusahaan.nm_perusahaan, 
				perusahaan.alamat, 
				pengajuan_kknp.objek, 
				pengajuan_kknp.tanggal_mulai, 
				pengajuan_kknp.tanggal_selesai 
				FROM perusahaan 
				LEFT JOIN pengajuan_kknp ON pengajuan_kknp.id_perusahaan = perusahaan.id_perusahaan 
				WHERE 1 
			   ";
		
		$query=$this->db->query($sql);
		return $query->result();
	}
	function tambah_pengajuan(){
		$id_pengajuan=$this->input->post('id_pengajuan');
		$objek=$this->input->post('objek');
		$tanggal_mulai=$this->input->post('tanggal_mulai');
		$tanggal_selesai=$this->input->post('tanggal_selesai');
		$id_perusahaan=$this->input->post('id_perusahaan');
		
		$data=array(
			'id_pengajuan'=>$id_pengajuan,
			'objek'=>$objek,
			'tanggal_mulai'=>$tanggal_mulai,
			'tanggal_selesai'=>$tanggal_selesai,
			'id_perusahaan'=>$id_perusahaan
		);
		return $this->db->insert('pengajuan_kknp',$data);
	}
	function getIdpengajuan($id_pengajuan){
		return $this->db->get_where('pengajuan_kknp',array('id_pengajuan'=>$id_pengajuan))->row();
	}
	
	function edit_pengajuan($id_pengajuan){
		$objek=$this->input->post('objek');
		$tanggal_mulai=$this->input->post('tanggal_mulai');
		$tanggal_selesai=$this->input->post('tanggal_selesai');
		$id_perusahaan=$this->input->post('id_perusahaan');
		
		$data=array(
			'id_pengajuan'=>$id_pengajuan,
			'objek'=>$objek,
			'tanggal_mulai'=>$tanggal_mulai,
			'tanggal_selesai'=>$tanggal_selesai,
			'id_perusahaan'=>$id_perusahaan
		);
		$this->db->where('id_pengajuan',$id_pengajuan);
		$this->db->update('pengajuan_kknp',$data);
	}
	function hapus_pengajuan($id_pengajuan){
		$this->db->where('id_pengajuan',$id_pengajuan);
		$this->db->delete('pengajuan_kknp',$data);
	}
//===================MAHASISWA===============
	function mahasiswa(){
		$sql = "
				SELECT mahasiswa.nim, 
				mahasiswa.nm_mhs,
				jurusan.id_jurusan, 
				jurusan.nm_jurusan 
				FROM jurusan 
				LEFT JOIN mahasiswa ON mahasiswa.id_jurusan = jurusan.id_jurusan 
				WHERE 1 
			   ";
		
		$query=$this->db->query($sql);
		return $query->result();
	}
	function jurusan(){
		$sql = "SELECT * FROM jurusan ";
		
		$query=$this->db->query($sql);
		return $query->result();
	}
	function tambah_mahasiswa(){
		$nim=$this->input->post('nim');
		$nm_mhs=$this->input->post('nm_mhs');
		$id_jurusan=$this->input->post('id_jurusan');
		
		$data=array(
			'nim'=>$nim,
			'nm_mhs'=>$nm_mhs,
			'id_jurusan'=>$id_jurusan
		);
		return $this->db->insert('mahasiswa',$data);
	}
	function getNim($nim){
		return $this->db->get_where('mahasiswa',array('nim'=>$nim))->row();
	}
	
	function edit_mahasiswa($nim){
		$nm_mhs=$this->input->post('nm_mhs');
		$id_jurusan=$this->input->post('id_jurusan');
		
		$data=array(
			'nim'=>$nim,
			'nm_mhs'=>$nm_mhs,
			'id_jurusan'=>$id_jurusan
		);
		$this->db->where('nim',$nim);
		$this->db->update('mahasiswa',$data);
	}
	function hapus_mahasiswa($nim){
		$this->db->where('nim',$nim);
		$this->db->delete('mahasiswa',$data);
	}
//===================DOSEN===============
	function dosen(){
		$sql = "SELECT * FROM dosen ";
		
		$query=$this->db->query($sql);
		return $query->result();
	}
	function tambah_dosen(){
		$id_dosen=$this->input->post('id_dosen');
		$nm_dosen=$this->input->post('nm_dosen');
		$email=$this->input->post('email');
		$kontak=$this->input->post('kontak');
		
		$data=array(
			'id_dosen'=>$id_dosen,
			'nm_dosen'=>$nm_dosen,
			'email'=>$email,
			'kontak'=>$kontak
		);
		return $this->db->insert('dosen',$data);
	}
	function getIddosen($id_dosen){
		return $this->db->get_where('dosen',array('id_dosen'=>$id_dosen))->row();
	}
	
	function edit_dosen($id_dosen){
		$nm_dosen=$this->input->post('nm_dosen');
		$email=$this->input->post('email');
		$kontak=$this->input->post('kontak');
		
		$data=array(
			'nm_dosen'=>$nm_dosen,
			'email'=>$email,
			'kontak'=>$kontak
		);
		$this->db->where('id_dosen',$id_dosen);
		$this->db->update('dosen',$data);
	}
	function hapus_dosen($id_dosen){
		$this->db->where('id_dosen',$id_dosen);
		$this->db->delete('dosen',$data);
	}
//===================PERUSAHAAN===============
	function perusahaan(){
		$sql = "SELECT * FROM perusahaan ";
		
		$query=$this->db->query($sql);
		return $query->result();
	}
	function tambah_perusahaan(){
		$idperusahaan=$this->input->post('id_perusahaan');
		$nm_perusahaan=$this->input->post('nm_perusahaan');
		$alamat=$this->input->post('alamat');
		$email=$this->input->post('email');
		$kontak=$this->input->post('kontak');
		
		$data=array(
			'id_perusahaan'=>$idperusahaan,
			'nm_perusahaan'=>$nm_perusahaan,
			'alamat'=>$alamat,
			'email'=>$email,
			'kontak'=>$kontak
		);
		return $this->db->insert('perusahaan',$data);
	}
	function getIdperusahaan($id_perusahaan){
		return $this->db->get_where('perusahaan',array('id_perusahaan'=>$id_perusahaan))->row();
	}
	
	function edit_perusahaan($id_perusahaan){
		$nm_perusahaan=$this->input->post('nm_perusahaan');
		$alamat=$this->input->post('alamat');
		$email=$this->input->post('email');
		$kontak=$this->input->post('kontak');
		
		$data=array(
			'id_perusahaan'=>$id_perusahaan,
			'nm_perusahaan'=>$nm_perusahaan,
			'alamat'=>$alamat,
			'email'=>$email,
			'kontak'=>$kontak
		);
		$this->db->where('id_perusahaan',$id_perusahaan);
		$this->db->update('perusahaan',$data);
	}
	function hapus_perusahaan($id_perusahaan){
		$this->db->where('id_perusahaan',$id_perusahaan);
		$this->db->delete('perusahaan',$data);
	}
//==================================
	
 
}
 
 
?>