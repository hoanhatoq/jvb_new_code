<?php 
App::uses('AppModel', 'Model');
class Admin extends AppModel{
	
	/**
	 * Tên bảng trong cơ sở dữ liệu
	 */
	public $useTable = 'user_tbl';

	/**
	 * Tên khóa chính của bảng
	 */
	public $primaryKey = 'user_id';
}