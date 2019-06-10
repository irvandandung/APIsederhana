<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_listtukang extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	function index()
	{	
		$jenistukang = $this->input->GET('jenistukang');
		$jenistukangspasi = str_replace(" ", "%20", $jenistukang);
		$namakabupaten = $this->input->GET('namakabupaten');
			$urlsearch="http://localhost/APIsederhana/index.php/C_datatukang/caritukang";
		if ($jenistukang==''&&$namakabupaten=='') {
			$url="http://localhost/APIsederhana/index.php/C_datatukang/caritukang";
		}else{
			$url="http://localhost/APIsederhana/index.php/C_datatukang/caritukang?jenistukang=".$jenistukangspasi."&namakabupaten=".$namakabupaten;
		}
		$get_url = file_get_contents($url);
		$get_urlsearch = file_get_contents($urlsearch);
		$data = json_decode($get_url);
		$data2 = json_decode($get_urlsearch);

        $data_array = array(
			'datalist' => $data,
			'datalist2' => $data2
		);
		$this->load->view('V_listtukang',$data_array);
	}


}