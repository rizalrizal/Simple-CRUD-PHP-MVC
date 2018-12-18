<?php 
class Home extends Controller{
	public function index(){
		$data['judul'] = "Halaman Home"; 
		$data['aktif'] = "home"; 
		$data['nama_kampus'] = $this->model('User_model')->getNamaKampus();
		$this->view('template/header',$data);
		$this->view('home/index',$data);
		$this->view('template/footer');
	}
}

 ?>