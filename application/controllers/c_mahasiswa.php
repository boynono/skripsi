<?php
		session_start();
	class C_mahasiswa extends CI_Controller{
		
		public function index()
		{
			$data['kknp']=$this->m_mahasiswa->kknp();
			$this->load->view('home',$data);
		}
		
		public function tawarankknp()
		{
			$data['tawaran']=$this->m_mahasiswa->tawaran_kknp();
			$this->load->view('v_tawaran',$data);
		}
		public function cekadmin(){
			$data=array(
				'username'=>$this->input->post('username'),
				'password'=>$this->input->post('password')
			);
			//cek data user pada database
			$hasil=$this->m_mahasiswa->cek_admin($data);
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
						redirect('c_admin');
					}					
					else{
						echo "error";
					}
				}
			}
       }

		
	}


?>