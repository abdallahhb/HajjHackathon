<?php

if (!defined('BASEPATH'))
exit('No direct script access allowed');

class Registration extends CI_Controller {

  function __construct() {
    parent::__construct();
    $this->load->model('crud_model');
    $this->load->database();
    $this->load->library('session');
  }

  function signin()
  {
    $this->load->view('backend/signin');
  }

  function signup()
  {
    $this->load->view('backend/signup');
  }

  function contact()
  {
    $page_data['page_name']  = 'contact';
    $page_data['page_title'] =  'contact';
    $this->load->view('backend/index', $page_data);
  }

  function signup_hajjaj()
  {
    $page_data['page_name']  = 'home/forms/signup_hajjaj';
    $page_data['page_title'] =  '';
    $this->load->view('backend/index', $page_data);
  }

}
