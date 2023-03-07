<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal extends MY_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

    /**
     * [__construct description]
     *
     * @method __construct
     */
    public function __construct()
    {
        // Load the constructer from MY_Controller
        parent::__construct();
		$this->cek_login();
		// $this->load->model('M_jadwal');
    }

    /**
     * [index description]
     *
     * @method index
     *
     * @return [type] [description]
     */
	public function meta()
	{
	  $data_user	= $this->M_Universal->getOne(["user_id" => $this->user_id], "user");
        $data = array(
			"judul"			=> "Jadwal",
			"keterangan"		=> "Contoh Keterangan",
			"halaman"			=> "dasboard",
			"view"			=> "kelas",
			"user"			=> $data_user,
	   );
	   return $data;
	}

	public function index()
	{
		$this->load->view('template', $this->meta());
	}

	// Kelas X
	public function kelas_x()
	{
	  $data_user	= $this->M_Universal->getOne(["user_id" => $this->user_id], "user");
        $data = array(
			"judul"			=> "Jadwal",
			"keterangan"		=> "Contoh Keterangan",
			"halaman"			=> "dasboard",
			"view"			=> "folder_kelas_x/kelas_x",
			"data_x"			=> $this->M_Universal->getMulti(NULL, "kelas_x"),
			"user"			=> $data_user,
	   );
	   $this->load->view('template', $data);
	}

	public function add_x()
	{
	  $data_user	= $this->M_Universal->getOne(["user_id" => $this->user_id], "user");
        $data = array(
			"judul"			=> "Jadwal",
			"keterangan"		=> "Contoh Keterangan",
			"halaman"			=> "dasboard",
			"view"			=> "folder_kelas_x/add_x",
			"user"			=> $data_user,
	   );
	   $this->load->view('template', $data);
	}

	public function tambah_x()
	{
		$id =  $this->input->post("id_x");
		$data = array(
			"id_x"			=> $this->input->post("id_x"),
			"kelas"			=> $this->input->post("kelas"),
			"wali_kelas"		=> $this->input->post("wali_kelas"),
			"jumlah_p"		=> $this->input->post("jumlah_p"),
			"jml_siswa_x"		=> $this->input->post("jml_siswa_x"),
		);

		$tambah = $this->M_Universal->insert($data, "kelas_x");
		
		if ($tambah) {
			notifikasi_redirect("success", "Tambah kelas berhasil", redirect('jadwal/kelas_x'));
		} else {
			notifikasi_redirect("error", "Tambah kelas gagal", redirect('jadwal/kelas_x'));
		};
	}

	public function hapus_x()
	{
		$hapus = $this->M_Universal->delete(["id_x" => dekrip(uri(3))], "kelas_x");
		
		if ($hapus){
			notifikasi_redirect("success", "Berhasil menghapus data kelas", uri(1));
		} else {
			notifikasi_redirect("error", "Gagal menghapus data kelas", uri(1));
		};
	}

	public function export_x()
	{
		$data	= array(
			"id_x"			=> $this->input->post("id_x"),
			"kelas"			=> $this->input->post("kelas"),
			"wali_kelas"		=> $this->input->post("wali_kelas"),
			"jumlah_p"		=> $this->input->post("jumlah_p"),
			"jml_siswa_x"		=> $this->input->post("jml_siswa_x"),
			"data_x"			=> $this->M_Universal->getMulti(NULL, "kelas_x"),
		);
	  
		 $this->load->library('pdf');
		 $this->pdf->setPaper('A4', 'landscape');
		 $this->pdf->filename = "daftar-kelas-x.pdf";
		 $this->pdf->load_view('folder_kelas_x/export_kelas_x', $data);
	}

	public function lihat_x()
	{
	  $data_user	= $this->M_Universal->getOne(["user_id" => $this->user_id], "user");
        $data = array(
			"judul"			=> "Jadwal",
			"keterangan"		=> "Contoh Keterangan",
			"halaman"			=> "dasboard",
			"view"			=> "folder_kelas_x/lihat_x",
			"data_x"			=> $this->M_Universal->getMulti(["id_x" => dekrip(uri(3))], "kelas_x"),
			"user"			=> $data_user,
	   );
	   $this->load->view('template', $data);
	}
	// End Kelas X

	public function kelas_xi()
	{
	  $data_user	= $this->M_Universal->getOne(["user_id" => $this->user_id], "user");
        $data = array(
			"judul"			=> "Jadwal",
			"keterangan"		=> "Contoh Keterangan",
			"halaman"			=> "dasboard",
			"view"			=> "folder_kelas_xi/kelas_xi",
			"user"			=> $data_user,
	   );
	   $this->load->view('template', $data);
	}

	public function kelas_xii()
	{
	  $data_user	= $this->M_Universal->getOne(["user_id" => $this->user_id], "user");
        $data = array(
			"judul"			=> "Jadwal",
			"keterangan"		=> "Contoh Keterangan",
			"halaman"			=> "dasboard",
			"view"			=> "folder_kelas_xii/kelas_xii",
			"user"			=> $data_user,
	   );
	   $this->load->view('template', $data);
	}

}