<?php

 class M_mahasiswa extends CI_Model {
	function cek_admin($data){
	    $query=$this->db->get_where('admin',$data);
	    return $query;
    }
	//	
	function kknp() {
		$sql = "SELECT perusahaan.nm_perusahaan,
				perusahaan.alamat,
				pengajuan_kknp.objek,
				pengajuan_kknp.tanggal_mulai,
				pengajuan_kknp.tanggal_selesai,
				dosen.nm_dosen,
				status.keterangan, 
				GROUP_CONCAT(mahasiswa.nm_mhs) as nm_mhs
				
				FROM dbkknp.perusahaan
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
	
	function tawaran_kknp(){
		$sql = "
				SELECT perusahaan.nm_perusahaan, 
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
	// function add(){
		// $idMhs=$this->input->post('idmhs');
		// $nim=$this->input->post('nim');
		// $nama=$this->input->post('nama');
		// $jurusan=$this->input->post('jurusan');
// 		
		// $data=array(
			// 'idmhs'=>$idMhs,
			// 'nim'=>$nim,
			// 'nama'=>$nama,
			// 'jurusan'=>$jurusan
		// );
		// return $this->db->insert('mahasiswa',$data);
	// }
// 	
	// function getId($idMhs){
		// return $this->db->get_where('mahasiswa',array('idmhs'=>$idMhs))->row();
	// }
// 	
	// function update($idMhs){
		// $nim=$this->input->post('nim');
		// $nama=$this->input->post('nama');
		// $jurusan=$this->input->post('jurusan');
// 		
		// $data=array(
			// 'nim'=>$nim,
			// 'nama'=>$nama,
			// 'jurusan'=>$jurusan
		// );
// 		
		// $this->db->where('idmhs',$idMhs);
		// $this->db->update('mahasiswa',$data);
	// }
	// function deleteDb($idMhs){
		// $this->db->where('idmhs',$idMhs);
		// $this->db->delete('mahasiswa',$data);
	// }
	
	
	
	 
}
 
 
?>