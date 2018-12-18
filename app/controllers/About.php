<?php 
class About extends Controller{
	public function index(){
		$data['judul'] = "Halaman About"; 
		$data['aktif'] = "about";
		$data['nama'] = "Rizal";
		$this->view('template/header',$data);
		$this->view('about/index');
		$this->view('template/footer');
	}

	public function page(){
		$data['judul'] = "Halaman About Page"; 
		$data['aktif'] = "about";
		$data['nama'] = "Rizal";
		$this->view('template/header',$data);
		$this->view('about/page');
		$this->view('template/footer');
	}

}

 ?>