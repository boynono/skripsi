<?php

 class Model1 extends CI_Model {
	
	function selectAll($page, $uri) {
		//$query=$this->db->query('select * from mahasiswa');
		$query=$this->db->get('mahasiswa',$page,$uri);
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
	
	function cekuser(){
	        $username = $this->input->post('username');
	        $password = $this->input->post('password');
	        $hak = $this->input->post('hak');
	
	        $this->db->where('username',$username);
	        $this->db->where('password',$password);
	        $this->db->where('hak',$hak);
	        $query = $this->db->get('member');
	
	        return $query->result();
    	}
	 
}
 
 
?>