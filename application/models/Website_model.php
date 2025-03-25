<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Website_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database(); // Pastikan database di-load
    }

    public function GetData()
    {
        $this->db->order_by('order', 'ASC');
        return $this->db->get('website')->result();
    }
}
