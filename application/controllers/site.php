<?php

/**
 * 
 */
class Site extends CI_Controller {
		
	public function index() {
		$data['judul']= 'aplikasi sederhana';
		$data['mhs']=$this->model1->selectAll();
		$this->load->view('option_view',$data);	
	}
	
	public function lihat(){
		$data['mhs']=$this->model1->selectAll();
		$this->load->view('lihat',$data);	
	}
	 
	public function add(){
		if($_POST==NULL){	
			$data['judul']= 'tambah data';
			$this->load->view('tambah',$data);
		}
		else{
			$this->model1->add();
			redirect('site/lihat','refresh');
		}
	}	

	public function updateMhs($idMhs){
		if($_POST==NULL){	
			$data['hasil']= $this->model1->getId($idMhs);	
			$this->load->view('ubah',$data);	
		}
		else{
			$this->model1->update($idMhs);
			redirect('site/lihat');
		}
	}
	
	public function delete($idMhs)
	{
		
		$this->model1->deleteDb($idMhs);
		redirect('site/lihat');
	
	}
	
}	  
?>