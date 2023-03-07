<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends MY_Controller {

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
			"view"			=> "users",
			"data_user"	=> $this->M_Universal->getMulti(NULL, "user"),
			"user"			=> $data_user,
	   );
	   return $data;
	}

	public function index()
	{
		$this->load->view('template', $this->meta());
	}

	public function edit()
	{
		$data		= $this->meta();
		$data["edit"]	= $this->M_Universal->getOne(["user_id" => dekrip(uri(3))], "user");
		
		$this->load->view('template', $data);
	}
	
	public function tambah()
	{
		$data = array(
			"user_id"			=> date("ymdHis"),
			"user_nama"		=> $this->input->post("user_nama"),
			"user_password"	=> password_hash($this->input->post("user_password"), PASSWORD_BCRYPT),
			"user_namalengkap"	=> $this->input->post("user_namalengkap"),
			"user_level"		=> $this->input->post("user_level")
		);
		
		$tambah = $this->M_Universal->insert($data, "user");
		
		if ($tambah){
			notifikasi_redirect("success", "Tambah user berhasil", uri(1));
		} else {
			notifikasi_redirect("error", "Tambah user gagal", uri(1));
		}
	}
	
	public function update()
	{
		$user_id		= dekrip($this->input->post("user_id"));
		$user_password	= $this->input->post("user_password");
		$cek			= $this->M_Universal->getOneSelect("user_password", ["user_id" => $user_id], "user");
		$data		= array(
			"user_nama"		=> $this->input->post("user_nama"),
			"user_password"	=> $user_password != $cek->user_password ? password_hash($user_password, PASSWORD_BCRYPT) : $user_password,
			"user_namalengkap"	=> $this->input->post("user_namalengkap"),
			"user_level"		=> $this->input->post("user_level")
		);
		
		$update = $this->M_Universal->update($data, ["user_id" => $user_id], "user");
		
		if ($update){
			notifikasi_redirect("success", "Update user berhasil", uri(1));
		} else {
			notifikasi_redirect("error", "Update user gagal", uri(1));
		};
	}
	
	public function hapus()
	{
		$hapus = $this->M_Universal->delete(["user_id" => dekrip(uri(3))], "user");
		
		if ($hapus){
			notifikasi_redirect("success", "Hapus user berhasil", uri(1));
		} else {
			notifikasi_redirect("error", "Hapus user gagal", uri(1));
		};
	}
}