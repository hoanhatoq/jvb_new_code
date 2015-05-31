
<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'JBV Viet Nam');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
    <?php echo $this->Html->charset(); ?>
    <title>
        <?php echo $cakeDescription ?> |
        <?php echo $this->fetch('title'); ?>
    </title>
    <?php
        echo $this->Html->css('style');
        echo $this->Html->css('jquery.bxslider');
        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');
        echo $this->Html->script('jquery-1.7.1.js');
        echo $this->Html->script('jquery.nivo.slider.js');
        echo $this->Html->script('slideios.js');
        echo $this->Html->script('jquery.lazy.js');
        echo $this->Html->script('jquery.bxslider.js');
        echo $this->Html->script('imenu.js');
        echo $this->Html->script('script.js');
        echo $this->Html->script('jquery.cycle.all.min.js');
        echo $this->Html->script('jquery.validate.js');
    ?>
</head>
<body>
    <div id="container">
        <div id="header">
          <div class="wrapper_header">
	        <div class="logo"><a href="#"><?php echo $this->Html->image(__('logo_jvb.png'), array('style'=> 'width:95px'));?></a>
	            <?php echo $this->Html->image(__('img_slogan.png'), array('class'=> 'i_slogan'));?>
	        </div>
		    <form id="from_search" action="#" class="button_ss form_search">
		        <input value="" name="keyword" class="key-word" type="text">
		        <input type="button" value="Search">
		    </form>
		    <script>
		        $(document).ready(function(){
			        $('.button_ss').click(function(){
				        var keyword=$('.key-word').val();
				        if(keyword == ''){
					        $('.key-word').css({'border':'1px solid red'});
					        	return false;
				        }
				        if(keyword.length <= 3){
					        $('.key-word').css({'border':'1px solid red'});
					        	return false;
				        }
				        $('#from_search').submit();
			        });
		        })
		    </script>
            <div class="lang">
                    <a href="<?php echo Router::url('/', true);?>">
                        <?php echo $this->Html->image(__('fl_jp.jpg'), array('class'=> 'flag_jp', 'style'=>'width:40px'));?></a>
                    <a href="<?php echo Router::url('/vi', true);?>"><?php echo $this->Html->image(__('fl_vi.jpg'), array('style'=>'width:40px'));?>
                        </a>                    
                    <a href="<?php echo Router::url('/en', true);?>"><?php echo $this->Html->image(__('fl_en.jpg'), array('style'=>'width:40px'));?></a>
            </div>
            <div class="clear"></div>
        </div>
        <div class="clear"></div>
        <div class="menu_top">
            <ul>
                <?php $controller = $this->params['controller']; ?> 

                <li class="<?php if($controller =='index') echo 'active'; ?>" ><a href="<?php echo $this->Html->url(array('controller' => 'index', 'action' => 'index')) ?>"><?php echo __('Trang chủ');?></a></li>
                    
                <li class="<?php if($controller =='about_us') echo 'active'; ?>" ><a href="<?php echo $this->Html->url(array('controller' => 'about_us', 'action' => 'index')) ?>"><?php echo __('Giới thiệu');?></a></li>
                
                <li class="<?php if($controller =='service') echo 'active'; ?>" ><a href="<?php echo $this->Html->url(array('controller' => 'service', 'action' => 'index')) ?>"><?php echo __('Dịch vụ');?></a></li>
                    
                <li class="<?php if($controller =='news') echo 'active'; ?>" ><a href="<?php echo $this->Html->url(array('controller' => 'news', 'action' => 'index')) ?>"><?php echo __('Tin tức');?></a></li>
                    
                <li class="<?php if($controller =='recruitment') echo 'active'; ?>" ><a href="<?php echo $this->Html->url(array('controller' => 'recruitment', 'action' => 'index')) ?>"><?php echo __('Tuyển dụng');?></a></li>
                
                <li class="<?php if($controller =='casestudy') echo 'active'; ?>" ><a href="<?php echo $this->Html->url(array('controller' => 'casestudy', 'action' => 'index')) ?>"><?php echo __('Case Study');?></a></li>
                            
                <li class="<?php if($controller =='contact') echo 'active'; ?>" ><a href="<?php echo $this->Html->url(array('controller' => 'contact', 'action' => 'index')) ?>"><?php echo __('Liên hệ');?></a></li>
                    
                <div class="clear"></div>
            </ul>
        </div>
        
    	<?php echo $this->fetch('content'); ?>
    	<div class= "clear"></div>
        <div class="footer">
            <div class="wrapper_footer">
            	<div class= "logo_footer">
            		<?php echo $this->Html->image(__('logo_footer.png'), array('style' => 'width: 225px;height: 60px;'));?>
            		
            	</div>
                <div class="company_name"><?php echo __('Công ty cổ phần JVB Việt Nam');?></div>
                <div class="company_address">
	                <?php echo __('Số 32-34, Đường Đặng Văn Ngữ, Phường Phương Liên');
	                	echo '<br>';
	                	echo __('Quận Đống Đa, Thành phố Hà Nội, Việt Nam');
	                ?>
                </div>
                <div class="social">
                    <a href=""><?php echo $this->Html->image('facebook.png');?></a>
                    <a href=""><?php echo $this->Html->image('icon_twitter.png');?></a>
             		<a href=""><?php echo $this->Html->image('icon_1.png');?></a>
                </div>
                <div class="design_by"><?php echo __('Copyright©2015 JVB Vietnam. All rights reserved.');?></div>
            </div>       
        </div>
    </div>
</body>
</html>
