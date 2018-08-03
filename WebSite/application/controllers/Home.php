<?php

if (!defined('BASEPATH'))
exit('No direct script access allowed');


class Home extends CI_Controller {

  function __construct() {
    parent::__construct();
    $this->load->model('crud_model');    //   $this->load->  => Include
    $this->load->database();
    $this->load->library('session');


    $this->output->set_header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');
    $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
    $this->output->set_header('Pragma: no-cache');
    $this->output->set_header("Expires: Mon, 26 Jul 2010 05:00:00 GMT");
  }
  //______________________________________________________________________________________________________
  //Default function, redirects to logged in user area
  public function index() {
    redirect(base_url() . 'index.php?home/access', 'refresh');
  }


  function about()
  {
    $this->load->view('backend/about');
  }

  function access()
  {
      $this->load->view('backend/home');
  }


  function contact()
  {
    $page_data['page_name']  = 'contact';
    $page_data['page_title'] =  '';
    $this->load->view('backend/index', $page_data);
  }
}
