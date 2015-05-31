<?php
App::uses('AppModel', 'Model');

	class Service extends AppModel{
		
		/*Khai bao su dung bang*/

		public $useTable= 'service_tbl';

		/*truong khoa trinh cua bang*/

		public $primaryKey ='service_id';

		public function get($lang_code){
			
			$sql = ('
				select * from service_tbl as t1 
				INNER JOIN expresion_tbl as t2 
				on t1.title_services_id = t2.title_content_id or t1.content_services_id =t2.title_content_id 
				WHERE lang_code = "'.$lang_code.'"');
			$coupons = $this->query($sql);

			// return $coupons;



			$data = array();
		   	foreach ($coupons as $val) {
		    	$id = $val['t1']['services_id'];
		    	// $data[$id]['title_alias'] = $val['t1']['title_alias'];
		    	$data[$id]['services_id'] = $val['t1']['services_id'];
		    
		    	if($val['t1']['title_services_id'] == $val['t2']['title_content_id']){
		     		$data[$id]['title'] = $val['t2']['value'];
		    	}
			    if($val['t1']['content_services_id'] == $val['t2']['title_content_id']){
			     	$data[$id]['content'] = $val['t2']['value'];
			    }
		   	}
			return $data;

		}
		
		public function getDetail($services_id,$lang_code){
		   $sql = ('
		    SELECT *
		    FROM expresion_tbl AS Expresion 
		    INNER JOIN service_tbl AS News 
		    ON Expresion.title_content_id = News.title_services_id OR Expresion.title_content_id =News.content_services_id
		    WHERE Expresion.lang_code ="'.$lang_code.'" AND services_id ="'.$services_id.'"');
		   $coupons= $this->query($sql);
		   $data= array();
		   foreach ($coupons as $value) {
		    if($value['News']['title_services_id'] == $value['Expresion']['title_content_id']){
		     $data['title'] = $value['Expresion']['value'];
		    }
		    elseif ($value['News']['content_services_id'] == $value['Expresion']['title_content_id']) {
		      $data['content'] =$value['Expresion']['value'];
		    } 
		   }
		   return $data;
		  }
	}
