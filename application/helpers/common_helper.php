<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	function getquestionbyid($id)
	{
	     $CI =& get_instance();
	     $CI->load->model('users/users_model');
		 $result= $CI->users_model->getQuestionById($id);
		 return $result;
	}
