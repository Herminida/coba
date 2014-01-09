<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class mahasiswa extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->model('model_mahasiswa');
		$data['mahasiswa']=$this->model_mahasiswa->getMahasiswa();
		$this->load->view('view_mahasiswa',$data);
	}

	public function simpan()
	{
		$this->load->model('model_mahasiswa');
		
		$data['nim'] = $_POST['nim'];
		$data['nama'] = $_POST['nama'];
		$data['alamat'] = $_POST['alamat'];
		
		$result = $this->model_mahasiswa->insert($data);
		if ($result){
			header ("location : /ci/index.php/mahasiswa/");
		}
	}

	public function hapus ($id){
		$this->load->model("model_mahasiswa");
		$this->model_mahasiswa->hapus($id);
		header("location : /ci/index.php/mahasiswa/");
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */