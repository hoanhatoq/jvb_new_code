<?php
App::uses('AppModel', 'Model');
	class News extends AppModel{
		/*Khai bao su dung bang*/
		public $useTable= "news_tbl";

		/*truong khoa trinh cua bang*/
		public $primaryKey = "news_id";

		
		public function getAll($lang_code){		
			$sql = ('
				select * from news_tbl as News 
				INNER JOIN expresion_tbl as Expresion 
				on News.title_news_id = Expresion.title_content_id or News.content_news_id =Expresion.title_content_id 
				WHERE lang_code = "'.$lang_code.'"');
			
			$coupons = $this->query($sql);
			$news= array();
			foreach ($coupons as $value){		
				$news_id = $value['News']['news_id'];
				$news[$news_id]['title_id']=$value['News']['news_id'];
				if($value['News']['title_news_id'] == $value['Expresion']['title_content_id']){
					$news[$news_id]['title'] = $value['Expresion']['value'];							
				}
				elseif ($value['News']['content_news_id'] == $value['Expresion']['title_content_id']) {
					$news[$news_id]['content'] = $value['Expresion']['value'];					
				}
			}
			return $news;
		}

		public function getNews($news_id,$lang_code){
			$sql = ('
				SELECT *
				FROM expresion_tbl AS Expresion 
				INNER JOIN news_tbl AS News 
				ON Expresion.title_content_id = News.title_news_id OR Expresion.title_content_id =News.content_news_id
				WHERE Expresion.lang_code ="'.$lang_code.'" AND news_id ="'.$news_id.'"');
			$coupons1= $this->query($sql);
			$infoNews= array();
			foreach ($coupons1 as $value) {
				if($value['News']['title_news_id'] == $value['Expresion']['title_content_id']){
					$infoNews['title'] = $value['Expresion']['value'];
				}
				elseif ($value['News']['content_news_id'] == $value['Expresion']['title_content_id']) {
						$infoNews['content'] =$value['Expresion']['value'];
				}	
			}
			return $infoNews;


		} 
	}