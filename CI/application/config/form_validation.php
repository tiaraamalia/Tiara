<?php if(! defined('BASEPATH')) exit ('No direct script access allowed');

$config = array(
	'users_put' => array(
		array('field'=>'user','label'=>'user','rules'=>'trim|required|min_length[3]|max_length[15]'),
		array('field'=>'password','label'=>'password','rules'=>'trim|required|min_length[8]|max_length[15]'),
		array('field'=>'email', 'label'=>'email', 'rules'=>'trim|required|valid_email'),
	),

	'users_post'=>array(
		array('field'=>'user', 'label'=>'user', 'rules'=>'trim|min_length[3]|max_length[15]'),
		array('field'=>'email', 'label'=>'email', 'rules'=>'trim|valid_email'),
	),
);
?>