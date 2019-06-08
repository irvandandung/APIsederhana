<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

/**
 * 
 */
class C_datatukang extends REST_Controller
{
	
	function __construct($config='rest')
	{
		parent::__construct($config);
		$this->load->model("M_datatukang");
	}

	function index_get()
	{
		$jenistukang = $this->get('jenistukang');
		$namakabupaten = $this->get('namakabupaten');

		 if ($jenistukang=='' &! $namakabupaten=='') {
        	$datane = $this->M_datatukang->datatukang();
            // $data = $this->db->get('datatukang')->result();
        }
        else {
        	$datane = $this->M_datatukang->searchdatatukang($jenistukang, $namakabupaten);
            // $data = $this->db->get('datatukang')->result();
        }
        $this->response($datane, 200);
	}

	function caritukang()
	{
		$jenistukang = $this->get('jenistukang');
		$namakabupaten = $this->get('namakabupaten');

		 if ($jenistukang=='' &! $namakabupaten=='') {
        	$datane = $this->M_datatukang->datatukang();
            // $data = $this->db->get('datatukang')->result();
        }
        else {
        	$datane = $this->M_datatukang->searchdatatukang($jenistukang, $namakabupaten);
            // $data = $this->db->get('datatukang')->result();
        }
        $this->response($datane, 200);
	}
}