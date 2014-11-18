<?php

 class M_mahasiswa extends CI_Model {
		//cek data admin
	function cek_admin($data){
	    $query=$this->db->get_where('admin',$data);
	    return $query;
    }
	//get data kknp	
	function kknp() {
		$sql = "SELECT kknp.id_kknp, 
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
	//get data tawaran kknp
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
	//get id kknp
	function getIdkknp($id_kknp){
		return $this->db->get_where('kknp',array('id_kknp'=>$id_kknp))->row();
	}
	//get fitur detail kknp
	function detail_kknp($id_kknp){
			$query=$this->db->query('
				SELECT kknp.id_kknp, 
				GROUP_CONCAT(mahasiswa.nim) as nim,
				GROUP_CONCAT(mahasiswa.nm_mhs) as nm_mhs, 
				jurusan.nm_jurusan,
				perusahaan.nm_perusahaan, 
				perusahaan.alamat as p_alamat,
				perusahaan.email as p_email,
				perusahaan.kontak as p_kontak, 
				pengajuan_kknp.objek,
                CONCAT(
				pengajuan_kknp.tanggal_mulai,",", 
				pengajuan_kknp.tanggal_selesai
                ) as tgl,
                dosen.nm_dosen, 
				dosen.email,
				dosen.kontak,
				status.keterangan 
				 
				FROM kknp 
				LEFT JOIN pengajuan_kknp ON pengajuan_kknp.id_pengajuan = kknp.id_pengajuan 
				LEFT JOIN perusahaan ON perusahaan.id_perusahaan = pengajuan_kknp.id_perusahaan 
				LEFT JOIN mahasiswa ON mahasiswa.nim = kknp.nim 
				LEFT JOIN jurusan ON jurusan.id_jurusan = mahasiswa.id_jurusan 
				LEFT JOIN dosen ON dosen.id_dosen = kknp.id_dosen 
				LEFT JOIN status ON status.id_status = kknp.id_status 
				GROUP BY pengajuan_kknp.id_pengajuan, status.keterangan
				HAVING id_kknp="'.$id_kknp.'"
			');
			return $query->result();
	}
	
	function kknp_tif(){
		$sql = "SELECT kknp.id_kknp, 
				perusahaan.nm_perusahaan, 
				perusahaan.alamat, 
				pengajuan_kknp.objek,
                CONCAT(
				pengajuan_kknp.tanggal_mulai,',', 
				pengajuan_kknp.tanggal_selesai
                ) as tgl, 
				dosen.nm_dosen, status.keterangan, 
				GROUP_CONCAT(mahasiswa.nm_mhs) as nm_mhs, 
				jurusan.id_jurusan,
				jurusan.nm_jurusan 
				FROM kknp 
				LEFT JOIN pengajuan_kknp ON pengajuan_kknp.id_pengajuan = kknp.id_pengajuan 
				LEFT JOIN perusahaan ON perusahaan.id_perusahaan = pengajuan_kknp.id_perusahaan 
				LEFT JOIN mahasiswa ON mahasiswa.nim = kknp.nim 
				LEFT JOIN jurusan ON jurusan.id_jurusan = mahasiswa.id_jurusan 
				LEFT JOIN dosen ON dosen.id_dosen = kknp.id_dosen 
				LEFT JOIN status ON status.id_status = kknp.id_status 
				GROUP BY pengajuan_kknp.id_pengajuan, status.keterangan
				HAVING id_jurusan='1'
			   ";
		
		$query=$this->db->query($sql);
		return $query->result();
	}
	function kknp_si(){
		$sql = "SELECT kknp.id_kknp, 
				perusahaan.nm_perusahaan, 
				perusahaan.alamat, 
				pengajuan_kknp.objek,
                CONCAT(
				pengajuan_kknp.tanggal_mulai,',', 
				pengajuan_kknp.tanggal_selesai
                ) as tgl, 
				dosen.nm_dosen, status.keterangan, 
				GROUP_CONCAT(mahasiswa.nm_mhs) as nm_mhs, 
				jurusan.id_jurusan,
				jurusan.nm_jurusan 
				FROM kknp 
				LEFT JOIN pengajuan_kknp ON pengajuan_kknp.id_pengajuan = kknp.id_pengajuan 
				LEFT JOIN perusahaan ON perusahaan.id_perusahaan = pengajuan_kknp.id_perusahaan 
				LEFT JOIN mahasiswa ON mahasiswa.nim = kknp.nim 
				LEFT JOIN jurusan ON jurusan.id_jurusan = mahasiswa.id_jurusan 
				LEFT JOIN dosen ON dosen.id_dosen = kknp.id_dosen 
				LEFT JOIN status ON status.id_status = kknp.id_status 
				GROUP BY pengajuan_kknp.id_pengajuan, status.keterangan
			   	HAVING id_jurusan='3'
			   ";
		
		$query=$this->db->query($sql);
		return $query->result();
	}
	function kknp_siskom(){
		$sql = "SELECT kknp.id_kknp, 
				perusahaan.nm_perusahaan, 
				perusahaan.alamat, 
				pengajuan_kknp.objek,
                CONCAT(
				pengajuan_kknp.tanggal_mulai,',', 
				pengajuan_kknp.tanggal_selesai
                ) as tgl, 
				dosen.nm_dosen, status.keterangan, 
				GROUP_CONCAT(mahasiswa.nm_mhs) as nm_mhs, 
				jurusan.id_jurusan,
				jurusan.nm_jurusan 
				FROM kknp 
				LEFT JOIN pengajuan_kknp ON pengajuan_kknp.id_pengajuan = kknp.id_pengajuan 
				LEFT JOIN perusahaan ON perusahaan.id_perusahaan = pengajuan_kknp.id_perusahaan 
				LEFT JOIN mahasiswa ON mahasiswa.nim = kknp.nim 
				LEFT JOIN jurusan ON jurusan.id_jurusan = mahasiswa.id_jurusan 
				LEFT JOIN dosen ON dosen.id_dosen = kknp.id_dosen 
				LEFT JOIN status ON status.id_status = kknp.id_status 
				GROUP BY pengajuan_kknp.id_pengajuan, status.keterangan
				HAVING id_jurusan='2'
			   ";
		
		$query=$this->db->query($sql);
		return $query->result();
	}	
		
		//berdasarkan status
		function kknp_pengajuan(){
		$sql = "SELECT kknp.id_kknp, 
				perusahaan.nm_perusahaan, 
				perusahaan.alamat, 
				pengajuan_kknp.objek,
                CONCAT(
				pengajuan_kknp.tanggal_mulai,',', 
				pengajuan_kknp.tanggal_selesai
                ) as tgl, 
				dosen.nm_dosen, 
				status.id_status,
				status.keterangan, 
				GROUP_CONCAT(mahasiswa.nm_mhs) as nm_mhs, 
				jurusan.id_jurusan,
				jurusan.nm_jurusan 
				FROM kknp 
				LEFT JOIN pengajuan_kknp ON pengajuan_kknp.id_pengajuan = kknp.id_pengajuan 
				LEFT JOIN perusahaan ON perusahaan.id_perusahaan = pengajuan_kknp.id_perusahaan 
				LEFT JOIN mahasiswa ON mahasiswa.nim = kknp.nim 
				LEFT JOIN jurusan ON jurusan.id_jurusan = mahasiswa.id_jurusan 
				LEFT JOIN dosen ON dosen.id_dosen = kknp.id_dosen 
				LEFT JOIN status ON status.id_status = kknp.id_status 
				GROUP BY pengajuan_kknp.id_pengajuan, status.keterangan
				HAVING id_status='1'
			   ";
		
		$query=$this->db->query($sql);
		return $query->result();
	}
	
	function kknp_pengerjaan(){
		$sql = "SELECT kknp.id_kknp, 
				perusahaan.nm_perusahaan, 
				perusahaan.alamat, 
				pengajuan_kknp.objek,
                CONCAT(
				pengajuan_kknp.tanggal_mulai,',', 
				pengajuan_kknp.tanggal_selesai
                ) as tgl, 
				dosen.nm_dosen, 
				status.id_status,
				status.keterangan, 
				GROUP_CONCAT(mahasiswa.nm_mhs) as nm_mhs, 
				jurusan.id_jurusan,
				jurusan.nm_jurusan 
				FROM kknp 
				LEFT JOIN pengajuan_kknp ON pengajuan_kknp.id_pengajuan = kknp.id_pengajuan 
				LEFT JOIN perusahaan ON perusahaan.id_perusahaan = pengajuan_kknp.id_perusahaan 
				LEFT JOIN mahasiswa ON mahasiswa.nim = kknp.nim 
				LEFT JOIN jurusan ON jurusan.id_jurusan = mahasiswa.id_jurusan 
				LEFT JOIN dosen ON dosen.id_dosen = kknp.id_dosen 
				LEFT JOIN status ON status.id_status = kknp.id_status 
				GROUP BY pengajuan_kknp.id_pengajuan, status.keterangan
				HAVING id_status='2'
			   ";
		
		$query=$this->db->query($sql);
		return $query->result();
	}
	function kknp_selesai(){
		$sql = "SELECT kknp.id_kknp, 
				perusahaan.nm_perusahaan, 
				perusahaan.alamat, 
				pengajuan_kknp.objek,
                CONCAT(
				pengajuan_kknp.tanggal_mulai,',', 
				pengajuan_kknp.tanggal_selesai
                ) as tgl, 
				dosen.nm_dosen, 
				status.id_status,
				status.keterangan, 
				GROUP_CONCAT(mahasiswa.nm_mhs) as nm_mhs, 
				jurusan.id_jurusan,
				jurusan.nm_jurusan 
				FROM kknp 
				LEFT JOIN pengajuan_kknp ON pengajuan_kknp.id_pengajuan = kknp.id_pengajuan 
				LEFT JOIN perusahaan ON perusahaan.id_perusahaan = pengajuan_kknp.id_perusahaan 
				LEFT JOIN mahasiswa ON mahasiswa.nim = kknp.nim 
				LEFT JOIN jurusan ON jurusan.id_jurusan = mahasiswa.id_jurusan 
				LEFT JOIN dosen ON dosen.id_dosen = kknp.id_dosen 
				LEFT JOIN status ON status.id_status = kknp.id_status 
				GROUP BY pengajuan_kknp.id_pengajuan, status.keterangan
				HAVING id_status='3'
			   ";
		
		$query=$this->db->query($sql);
		return $query->result();
	}
	function kknp_ditolak(){
		$sql = "SELECT kknp.id_kknp, 
				perusahaan.nm_perusahaan, 
				perusahaan.alamat, 
				pengajuan_kknp.objek,
                CONCAT(
				pengajuan_kknp.tanggal_mulai,',', 
				pengajuan_kknp.tanggal_selesai
                ) as tgl, 
				dosen.nm_dosen, 
				status.id_status,
				status.keterangan, 
				GROUP_CONCAT(mahasiswa.nm_mhs) as nm_mhs, 
				jurusan.id_jurusan,
				jurusan.nm_jurusan 
				FROM kknp 
				LEFT JOIN pengajuan_kknp ON pengajuan_kknp.id_pengajuan = kknp.id_pengajuan 
				LEFT JOIN perusahaan ON perusahaan.id_perusahaan = pengajuan_kknp.id_perusahaan 
				LEFT JOIN mahasiswa ON mahasiswa.nim = kknp.nim 
				LEFT JOIN jurusan ON jurusan.id_jurusan = mahasiswa.id_jurusan 
				LEFT JOIN dosen ON dosen.id_dosen = kknp.id_dosen 
				LEFT JOIN status ON status.id_status = kknp.id_status 
				GROUP BY pengajuan_kknp.id_pengajuan, status.keterangan
				HAVING id_status='4'
			   ";
		
		$query=$this->db->query($sql);
		return $query->result();
	}
		 
}
 
?>