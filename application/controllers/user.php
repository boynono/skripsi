<?php
		session_start();
	class User extends CI_Controller{
		
		public function index()
		{
			//$row=$this->db->get('mahasiswa');
			//$config['base_url'] = base_url(). 'index.php/user/index';//page yg dilink kan
			//$config['total_rows'] = $row->num_rows();//ambil jumlah baris
			//$config['per_page'] = 3;//data per page
			//$config['num_links']=4;//jumlah link yg ditampilkan
			//segmen 1 utk controllers/model;segmen 2 utk fungsi;segmen3 utk ambil nilai dari url
			//$config['uri_segment'] = 3;
			//insialisasi
			//$this->pagination->initialize($config);
			//membuat pagination
			//$data['pagination']=$this->pagination->create_links();
			$data['mhs']=$this->m_user->selectAll();
			$this->load->view('home',$data);
		}
		
		public function cekuser(){
			$data=array(
				'username'=>$this->input->post('username'),
				'password'=>$this->input->post('password')
			);
			//cek data user pada database
			$hasil=$this->m_user->cek_user($data);
			if($hasil->num_rows() == null){
				//jika gagal	
				echo "login gagal,silahkan periksa username dan password";
			}
			else{
				//jika sukses 
				foreach ($hasil->result() as $row) {
					$sess_data['username']=$row->username;
					$sess_data['hak']=$row->hak;
					//set session
					$this->session->set_userdata($sess_data);
					
					if ($this->session->userdata('hak')=='admin') {
						//mengakses controller admin	
						redirect('admin');
					}
					elseif ($this->session->userdata('hak')=='pendaftar') {
						//mengakses controller pendaftar	
						redirect('pendaftar');
					}
					else{
						echo "error";
					}
				}
			}
       }

		
	}


?>