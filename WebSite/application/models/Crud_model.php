<?php

if (!defined('BASEPATH'))
exit('No direct script access allowed'); // Affiche un message et termine le script courant

class Crud_model extends CI_Model {

  function __construct() {
    parent::__construct();  // no functions
  }

  function clear_cache() {
    $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
    $this->output->set_header('Pragma: no-cache');
  }

}
