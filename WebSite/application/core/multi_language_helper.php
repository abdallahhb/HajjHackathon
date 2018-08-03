<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


if ( ! function_exists('get_phrase'))
{
	function get_phrase($phrase = '') {
		$CI	=&	get_instance();
		$CI->load->database();

		$current_language = $CI->session->userdata('language');
		if ($current_language == ''){
			$current_language = 'arabic';
			$CI->session->set_userdata('language', 'arabic');
		}
		$query	=	$CI->db->get_where('language' , array('phrase' => $phrase));
		$row   	=	$query->row();

		// return the current sessioned language field of according phrase, else return uppercase spaced word
		if (isset($row->$current_language) && $row->$current_language !="")
			return $row->$current_language;
		else
			return ucwords(str_replace('_',' ',$phrase));
	}
}
