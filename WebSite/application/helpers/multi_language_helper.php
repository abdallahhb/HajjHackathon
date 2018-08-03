<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


if ( ! function_exists('get_phrase'))
{
	function get_phrase($phrase = '') {
		$CI	=&	get_instance();
		$CI->load->database();

		$current_language = $CI->session->userdata('language');
		$current_language = 'french';
		if ($current_language == ''){
			$current_language = 'french';
			$CI->session->set_userdata('language', 'frensh');
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

if ( ! function_exists('phrase'))
{
	function phrase($lang = '', $phrase = '') {
		$CI	=&	get_instance();
		$CI->load->database();

		if ($lang == 'ar' || $lang == 'arabic'){
			$lang = 'arabic';
		}else if ($lang == 'fr' || $lang == 'french'){
			$lang = 'french';
		}else if ($lang == 'eng' || $lang == 'english'){
			$lang = 'english';
		}else {
			$lang = $CI->session->userdata('language');
		}

		$langs           = 'arabic,english,french';
		$langs_array = explode(',', $langs);
		if (in_array($lang, $langs_array)) {
			$query	=	$CI->db->get_where('language' , array('phrase' => $phrase));
			$row   	=	$query->row();
			// return the current sessioned language field of according phrase, else return uppercase spaced word
			if (isset($row->$lang) && $row->$lang !=""){
				return $row->$lang;
			}	else {
				return ucwords(str_replace('_',' ',$phrase));
			}
		}
	}
}
