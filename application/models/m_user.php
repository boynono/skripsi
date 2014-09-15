<?php

 class M_user extends CI_Model {
	function selectAll() {
		//$query=$this->db->query('select * from mahasiswa');
		$query=$this->db->get('mahasiswa');
		return $query->result();
	}
	
	function add(){
		$idMhs=$this->input->post('idmhs');
		$nim=$this->input->post('nim');
		$nama=$this->input->post('nama');
		$jurusan=$this->input->post('jurusan');
		
		$data=array(
			'idmhs'=>$idMhs,
			'nim'=>$nim,
			'nama'=>$nama,
			'jurusan'=>$jurusan
		);
		return $this->db->insert('mahasiswa',$data);
	}
	
	function getId($idMhs){
		return $this->db->get_where('mahasiswa',array('idmhs'=>$idMhs))->row();
	}
	
	function update($idMhs){
		$nim=$this->input->post('nim');
		$nama=$this->input->post('nama');
		$jurusan=$this->input->post('jurusan');
		
		$data=array(
			'nim'=>$nim,
			'nama'=>$nama,
			'jurusan'=>$jurusan
		);
		
		$this->db->where('idmhs',$idMhs);
		$this->db->update('mahasiswa',$data);
	}
	function deleteDb($idMhs){
		$this->db->where('idmhs',$idMhs);
		$this->db->delete('mahasiswa',$data);
	}
	
	function cek_user($data){
	        $query=$this->db->get_where('login',$data);
	        return $query;
    	}
	
	 
}
 
 
?>