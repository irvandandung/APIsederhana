<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class M_datatukang extends CI_Model{
	public function __construct()
    {
        $this->load->database();
    }

    function datatukang()
    {
    	$this->db->from('datatukang');
        $this->db->join('kabupaten', 'datatukang.id_kabupaten = kabupaten.id');
        $datane = $this->db->get()->result();
        return $datane;
    }

    function searchdatatukang($jenistukang, $namakabupaten)
    {
    	$this->db->from('datatukang');
        $this->db->join('kabupaten', 'datatukang.id_kabupaten = kabupaten.id');
        $this->db->where('datatukang.jenistukang', $jenistukang);
        $this->db->where('kabupaten.namakabupaten', $namakabupaten);
        $datane = $this->db->get()->result();
        return $datane;
    }
}