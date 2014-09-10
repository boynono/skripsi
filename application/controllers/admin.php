<?php

/**
 * 
 */
class Admin extends CI_Controller {
		
	public function index() {
		$row=$this->db->get('mahasiswa');
		$config['base_url'] = base_url(). 'index.php/admin/index';//page yg dilink kan
		$config['total_rows'] = $row->num_rows();//ambil jumlah baris
		$config['per_page'] = 3;//data per page
		$config['num_links']=4;//jumlah link yg ditampilkan
			//segmen 1 utk controllers/model;segmen 2 utk fungsi;segmen3 utk ambil nilai dari url
		$config['uri_segment'] = 3;
			//insialisasi
		$this->pagination->initialize($config);
			//membuat pagination
		$data['pagination']=$this->pagination->create_links();
		$data['mhs']=$this->model1->selectAll($config['per_page'],$this->uri->segment(3));
		$this->load->view('v_admin',$data);	
	}
	
	function logout(){
			$this->session->sess_destroy();
			redirect("user");
			echo "anda telah berhasil logout";
	}
	
	function add(){
		if($_POST==NULL){	
			$data['judul']= 'tambah data';
			$this->load->view('tambah',$data);
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
	
}	  
?>