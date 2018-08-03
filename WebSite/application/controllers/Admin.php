<?php
if (!defined('BASEPATH'))
exit('No direct script access allowed');

class Admin extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->database();
    $this->load->library('session');

    /*cache control*/
    $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
    $this->output->set_header('Pragma: no-cache');
  }

  /***default functin, redirects to login page if no admin logged in yet***/
  public function index()
  {
  }



  public function hajj_hackaton()
  {

    $id = "147258";
    // $id = $_POST['hajj_id'];
    $hajj_data 	= array();
    $dbhajj_datas       =   $this->db->get_where('hajjs',array('hajj_id' =>$id))->result_array();
    foreach ($dbhajj_datas as $hajj_datas ) {

      $hajj_data['phone']         = $hajj_datas['phone'] ;
      $hajj_data['name']          = $hajj_datas['fname'].' '.$hajj_datas['lname'];
      $hajj_data['nationality']   = "algeria" ;
    }

    // $user_profile['fname'] = "ilyas";
    // $this->db->where('id', 2);
    // $this->db->update('hajjs', $user_profile);
    echo json_encode($hajj_data, JSON_UNESCAPED_UNICODE);
  }



}
