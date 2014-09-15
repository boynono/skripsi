<?php

 class M_admin extends CI_Model {
	
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
	
	function lihat_user(){
		$query=$this->db->get('login');
		return $query->result();
	}
	function add_user(){
		$idlogin=$this->input->post('idlogin');
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		$hak=$this->input->post('hak');
		
		$user=array(
			'idlogin'=>$idlogin,
			'username'=>$username,
			'password'=>$password,
			'hak'=>$hak
		);
		return $this->db->insert('login',$user);
	}
	function get_nilai() {
		$query=$this->db->get('nilai');
		return $query->result();
	}
	 
}
 
 
?>