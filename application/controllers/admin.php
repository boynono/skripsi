<?php

/**
 * 
 */
class Admin extends CI_Controller {
		
	public function index() {
		$data['mhs']=$this->m_admin->selectAll();
		$this->load->view('v_admin',$data);	
	}
	
	function logout(){
			$this->session->sess_destroy();
			redirect("user");
			echo "anda telah berhasil logout";
	}
	
	function add(){
		if($_POST==NULL){
			$this->load->view('tambah');
		}
		else{
			$this->m_admin->add();
			redirect('admin','refresh');
		}
	}	

	function updateMhs($idMhs){
		if($_POST==NULL){	
			$data['hasil']= $this->m_admin->getId($idMhs);	
			$this->load->view('ubah',$data);	
		}
		else{
			$this->m_admin->update($idMhs);
			redirect('admin');
		}
	}
	
	function delete($idMhs)
	{
		$this->m_admin->deleteDb($idMhs);
		redirect('admin');
	}
	
	function lihat_user(){
		$data['user']=$this->m_admin->lihat_user();
		$this->load->view('v_user',$data);
	}
	
	function add_user(){
		if($_POST==NULL){
			$this->load->view('v_tambahuser');
		}
		else{
			
			$this->m_admin->add_user();
			redirect('admin','refresh');
		}
	}
	function lihat_nilai(){
		$data['nilai']=$this->m_admin->get_nilai();
		$this->load->view('v_nilai',$data);	
	}
}	  
?>