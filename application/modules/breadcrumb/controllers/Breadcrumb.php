<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Breadcrumb extends MX_Controller{

  public function __construct(){
    parent::__construct();
    $this->load->helper('url');
  }

  public function get(){

    $data['segments'] = $this->uri->segment_array();

    $data['count'] = count($this->uri->segment_array());

    $this->load->view('breadcrumb_view', $data);

  }
}
