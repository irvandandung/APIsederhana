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
		$url="http://localhost/rest_tukang/index.php/C_datatukang/caritukang";
		$get_url = file_get_contents($url);
        $data = json_decode($get_url);

        $data_array = array(
        	'datalist' => $data
		);
		$this->load->view('V_listtukang',$data_array);
	}
}