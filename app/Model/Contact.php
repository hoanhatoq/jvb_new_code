<?php 
	App::uses('AppModel', 'Model');
	
	class Contact extends AppModel{
		
		/*Khai bao su dung bang*/
		public $useTable= "contact";
		
		/*Khai bao skhoa chinh cua bang*/
		public $primaryKey = "contact_id";
		
		public $validate = array(
				'name' => array(
						'rule1' => array(
								'rule' => 'notEmpty',
								'message' => 'Hãy nhập vào tên của thành viên.'
						),
						'rule2' => array(
								'rule' => array('maxLength',16),
								'message' => 'Username phải có độ dài không quá 16 ký tự.'
						)
				),
				'email' => array(
						'rule' => array('email'),
						'message' => 'Email không đúng'
				),
				'phone' => array(
						'rule' => 'alphaNumeric',
				),
				'subject' => array(
						'rule' => 'notEmpty',
				),
				'content' => array(
						'rule' => 'notEmpty',
				),
				'ip' => array(
						'rule' => 'notEmpty',
				),
		
		);
		
	}
