<?php

class C_admin extends CI_Controller {
		
	public function index() {
		$data['judul']="Halaman Admin";
		$data['kknp']=$this->m_admin->kknp();
		$this->load->view('v_admin',$data);	
	}
	
	function logout(){
			$this->session->sess_destroy();
			redirect("c_mahasiswa");
			echo "anda telah berhasil logout";
	}
//=====================KKNP	
	function lihatkknp() {
		$data['judul']="Data KKNP";
		$data['lihatkknp']=$this->m_admin->lihatkknp();
		$this->load->view('v_kknp',$data);	
	}
	function tambahkknp(){
		if($_POST==NULL){
			$data['mahasiswa']=$this->m_admin->mahasiswa();
			$data['pengajuan']=$this->m_admin->pengajuan();
			$data['dosen']=$this->m_admin->dosen();
			$data['status']=$this->m_admin->status();
			$data['judul']="Tambah Data KKNP";
			$this->load->view('v_tambahkknp',$data);
		}
		else{
			$this->m_admin->tambah_kknp();
			redirect('c_admin','refresh');
		}
	}	
	
	function editkknp($id_kknp){
		if($_POST==NULL){
			$data['judul']="Edit Data KKNP";	
			$data['hasil']= $this->m_admin->getIdkknp($id_kknp);
			// $data['kknp']= $this->m_admin->kknp2($id_kknp);
			$data['mahasiswa']=$this->m_admin->mahasiswa();
			$data['pengajuan']=$this->m_admin->pengajuan();
			$data['dosen']=$this->m_admin->dosen();
			$data['status']=$this->m_admin->status();	
			$this->load->view('v_editkknp',$data);	
		}
		else{
			$this->m_admin->edit_kknp($id_kknp);
			redirect('c_admin');
		}
	}
	
	function hapuskknp($id_kknp)
	{
		$this->m_admin->hapus_kknp($id_kknp);
		redirect('c_admin');
	}
//======================TAWARAN========================
	function lihattawaran(){
		$data['judul']="Data Tawaran KKNP";
		$data['tawaran']=$this->m_admin->tawaran();
		$this->load->view('v_tawaran',$data);
	}
	function tambahtawaran(){
		if($_POST==NULL){
			$data['judul']="Tambah Tawaran KKNP";
			$data['perusahaan']=$this->m_admin->perusahaan();
			$this->load->view('v_tambahtawaran',$data);
		}
		else{
			$this->m_admin->tambah_tawaran();
			redirect('c_admin/lihattawaran','refresh');
		}
	}
	function edittawaran($id_tawaran){
		if($_POST==NULL){
			$data['judul']="Edit Tawaran KKNP";	
			$data['hasil']= $this->m_admin->getIdtawaran($id_tawaran);	
			$data['perusahaan']=$this->m_admin->perusahaan();
			$this->load->view('v_edittawaran',$data);	
		}
		else{
			$this->m_admin->edit_tawaran($id_tawaran);
			redirect('c_admin/lihattawaran');
		}
	}
	
	function hapustawaran($id_tawaran)
	{
		$this->m_admin->hapus_tawaran($id_tawaran);
		redirect('c_admin/lihattawaran');
	}
//==================PENGAJUAN============
	function lihatpengajuan(){
		$data['pengajuan']=$this->m_admin->pengajuan();
		$this->load->view('v_pengajuan',$data);
	}	
	function tambahpengajuan(){
		if($_POST==NULL){
			$data['perusahaan']=$this->m_admin->perusahaan();
			$this->load->view('v_tambahpengajuan',$data);
		}
		else{
			$this->m_admin->tambah_pengajuan();
			redirect('c_admin/lihatpengajuan','refresh');
		}
	}
	function editpengajuan($id_pengajuan){
		if($_POST==NULL){	
			$data['hasil']= $this->m_admin->getIdpengajuan($id_pengajuan);	
			$data['perusahaan']=$this->m_admin->perusahaan();
			$this->load->view('v_editpengajuan',$data);	
		}
		else{
			$this->m_admin->edit_pengajuan($id_pengajuan);
			redirect('c_admin/lihatpengajuan');
		}
	}
	
	function hapuspengajuan($id_pengajuan)
	{
		$this->m_admin->hapus_pengajuan($id_pengajuan);
		redirect('c_admin/lihatpengajuan');
	}
//========================MAHASISWA=============	
	function lihatmahasiswa(){
		$data['mahasiswa']=$this->m_admin->mahasiswa();
		$this->load->view('v_mahasiswa',$data);
	}
	function tambahmahasiswa(){
		if($_POST==NULL){
			$data['jurusan']=$this->m_admin->jurusan();
			$this->load->view('v_tambahmahasiswa',$data);
		}
		else{
			$this->m_admin->tambah_mahasiswa();
			redirect('c_admin/lihatmahasiswa','refresh');
		}
	}
	function editmahasiswa($nim){
		if($_POST==NULL){	
			$data['hasil']= $this->m_admin->getNim($nim);
			$data['jurusan']=$this->m_admin->jurusan();	
			$this->load->view('v_editmahasiswa',$data);	
		}
		else{
			$this->m_admin->edit_mahasiswa($nim);
			redirect('c_admin/lihatmahasiswa');
		}
	}
	
	function hapusmahasiswa($nim)
	{
		$this->m_admin->hapus_mahasiswa($nim);
		redirect('c_admin/lihatmahasiswa');
	}
//=========================PERUSAHAAN======
	function lihatperusahaan(){
		$data['perusahaan']=$this->m_admin->perusahaan();
		$this->load->view('v_perusahaan',$data);
	}	
	function tambahperusahaan(){
		if($_POST==NULL){
			$this->load->view('v_tambahperusahaan');
		}
		else{
			$this->m_admin->tambah_perusahaan();
			redirect('c_admin/lihatperusahaan','refresh');
		}
	}
	function editperusahaan($id_perusahaan){
		if($_POST==NULL){	
			$data['hasil']= $this->m_admin->getIdperusahaan($id_perusahaan);	
			$this->load->view('v_editperusahaan',$data);	
		}
		else{
			$this->m_admin->edit_perusahaan($id_perusahaan);
			redirect('c_admin/lihatperusahaan');
		}
	}
	
	function hapusperusahaan($id_perusahaan)
	{
		$this->m_admin->hapus_perusahaan($id_perusahaan);
		redirect('c_admin/lihatperusahaan');
	}
//==============================DOSEN=================
	function lihatdosen(){
		$data['dosen']=$this->m_admin->dosen();
		$this->load->view('v_dosen',$data);
	}
	function tambahdosen(){
		if($_POST==NULL){
			$this->load->view('v_tambahdosen');
		}
		else{
			$this->m_admin->tambah_dosen();
			redirect('c_admin/lihatdosen','refresh');
		}
	}
	function editdosen($id_dosen){
		if($_POST==NULL){	
			$data['hasil']= $this->m_admin->getIddosen($id_dosen);	
			$this->load->view('v_editdosen',$data);	
		}
		else{
			$this->m_admin->edit_dosen($id_dosen);
			redirect('c_admin/lihatdosen');
		}
	}
	
	function hapusdosen($id_dosen)
	{
		$this->m_admin->hapus_dosen($id_dosen);
		redirect('c_admin/lihatdosen');
	}
//====================================	
	
}	  
?>