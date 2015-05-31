<?php
App::uses('AppModel', 'Model');

	class AboutUs extends AppModel{
		
		// Use table
		public $useTable= 'about_us_tbl';

		// primary key
		public $primaryKey ='about_id';

		public function getAll($lang_code){	
			$sql = ('
				select * from about_us_tbl as AboutUs
				INNER JOIN expresion_tbl as Expresion
				on AboutUs.title_about_id = Expresion.title_content_id or AboutUs.content_about_id = Expresion.title_content_id 
				WHERE lang_code = "'.$lang_code.'"');
			$coupons = $this->query($sql);

			$data = array();
		   	foreach ($coupons as $val) {
		    	$id = $val['AboutUs']['about_id'];
		    	$data[$id]['about_id'] = $val['AboutUs']['about_id'];
		    
		    	if($val['AboutUs']['title_about_id'] == $val['Expresion']['title_content_id']){
		     		$data[$id]['title'] = $val['Expresion']['value'];
		    	}
			    if($val['AboutUs']['content_about_id'] == $val['Expresion']['title_content_id']){
			     	$data[$id]['content'] = $val['Expresion']['value'];
			    }
		   	}
			return $data;

		}
		
		public function getDetail($about_id,$lang_code){
		   $sql = ('
		    SELECT *
		    FROM expresion_tbl AS Expresion 
		    INNER JOIN about_us_tbl AS AboutUs 
		    ON Expresion.title_content_id = AboutUs.title_about_id OR Expresion.title_content_id =AboutUs.content_about_id
		    WHERE Expresion.lang_code ="'.$lang_code.'" AND about_id ="'.$about_id.'"');
		   $coupons= $this->query($sql);
		   $data= array();
		   foreach ($coupons as $value) {
		    if($value['AboutUs']['title_about_id'] == $value['Expresion']['title_content_id']){
		     $data['title'] = $value['Expresion']['value'];
		    }
		    elseif ($value['AboutUs']['content_about_id'] == $value['Expresion']['title_content_id']) {
		      $data['content'] =$value['Expresion']['value'];
		    } 
		   }
		   return $data;
		}
	}
