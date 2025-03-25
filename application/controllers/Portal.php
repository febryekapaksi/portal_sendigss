<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Portal extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Website_model');
    }

    public function index()
    {
        $data = $this->Website_model->GetData();
        $this->load->view('portal/index', compact('data'));
    }
}
