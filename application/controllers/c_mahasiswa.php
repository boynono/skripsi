<?php
		session_start();
	class C_mahasiswa extends CI_Controller{
		//home
		public function index()
		{
			$data['judul']="Data Mahasiswa KKNP";	
			$data['kknp']=$this->m_mahasiswa->kknp();
			$this->load->view('home',$data);
		}
		//fitur detail kknp
		public function detailkknp($id_kknp){
			//$data['hasil']= $this->m_mahasiswa->getIdkknp($id_kknp);
			$data['judul']="Detail Data Mahasiswa KKNP";
			$data['detailkknp']=$this->m_mahasiswa->detail_kknp($id_kknp);
			$this->load->view('v_detailkknp',$data);
		}
		//lihat tawaran
		public function tawaran()
		{
			$data['judul']="Data Tawaran KKNP";	
			$data['tawaran']=$this->m_mahasiswa->tawaran_kknp();
			$this->load->view('v_tawaranmhs',$data);
		}
		//lihat data kknp berdasar jurusan
		public function kknptif(){
			$data['judul']="Data KKNP Mahasiswa Informatika";	
			$data['kknp']=$this->m_mahasiswa->kknp_tif();
			$this->load->view('home',$data);
		}
		public function kknpsi(){
			$data['judul']="Data KKNP Mahasiswa Sistem Informasi";	
			$data['kknp']=$this->m_mahasiswa->kknp_si();
			$this->load->view('home',$data);
		}
		public function kknpsiskom(){
			$data['judul']="Data KKNP Mahasiswa Sistem Komputer";
			$data['kknp']=$this->m_mahasiswa->kknp_siskom();
			$this->load->view('home',$data);
		}
		//lihat data kknp berdasar STATUS
		public function pengajuan(){
			$data['judul']="Data KKNP Berstatus Pengajuan";
			$data['kknp']=$this->m_mahasiswa->kknp_pengajuan();
			$this->load->view('home',$data);
		}
		public function pengerjaan(){
			$data['judul']="Data KKNP Berstatus Pengerjaan";
			$data['kknp']=$this->m_mahasiswa->kknp_pengerjaan();
			$this->load->view('home',$data);
		}
		public function selesai(){
			$data['judul']="Data KKNP Berstatus Selesai";
			$data['kknp']=$this->m_mahasiswa->kknp_selesai();
			$this->load->view('home',$data);
		}
		public function ditolak(){
			$data['judul']="Data KKNP Berstatus Ditolak";
			$data['kknp']=$this->m_mahasiswa->kknp_ditolak();
			$this->load->view('home',$data);
		}
		//cek prioritas admin
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
				riderect('c_mahasiswa');
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
						redirect('c_mahasiswa');
					}
				}
			}
       }

		
	}


?>