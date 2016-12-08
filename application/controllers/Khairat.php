<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Khairat extends CI_Controller {


   public function __construct() {
        parent::__construct();

    }

    public function index()
    {

 
 		$this->load->view('_layouts/header');
        $this->load->view('khairat/main'); //load views vbarang
        $this->load->view('_layouts/footer');
 
    }

}
