<?php
/* Smarty version 3.1.30, created on 2017-05-07 08:53:26
  from "D:\wamp\wamp\www\moving-master\template\index\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_590ec466ca7516_70559254',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c16f1c5314a5cba54c6cf5ab6830346d700d2a3d' => 
    array (
      0 => 'D:\\wamp\\wamp\\www\\moving-master\\template\\index\\index.html',
      1 => 1494072230,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index/footer.html' => 1,
  ),
),false)) {
function content_590ec466ca7516_70559254 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0,minimum-scale=1">    
    <title></title> 
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/base.css" />
	<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/index/index.css" />
	<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/swiper.min.css" />
	<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/zepto.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/iscroll-probe.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/touch.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/swiper.jquery.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/index/index.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript">
   		document.addEventListener('plusready', function(){
   			//console.log("所有plus api都应该在此事件发生后调用，否则会出现plus is undefined。"	
   		});	
    <?php echo '</script'; ?>
>
</head>
<?php echo '<script'; ?>
>	
	window.onload=function(){
		var myScroll = new IScroll('.zrl-index-wrap',{
				  mouseWheel: true,
    			  scrollbars: true,
    			  click:true,
    			  probeType: 3
			});
//	轮播
		var banswiper = new Swiper('.zrl-banner', {
	        pagination: '.zrl-banner-lunbo',
	         loop:true,
	        paginationClickable: true
    	});
    //精品活动
	   var swiper = new Swiper('.jxhd', {
	        pagination: '.jxhd-cc',
	        loop:true,
	        slidesPerView: 3,
	        paginationClickable: true,
	        spaceBetween: 30,
	        freeMode: true
	    });
//	达人推荐
		var mySwiper = new Swiper('.drtj',{
			effect : 'flip',
			pagination:'.drtj-cc',
			loop:true,
			flip: {
		            slideShadows : true,
		            limitRotation : true,
		       }
		})
		$(".swiper-slide").css("width","100%");
		}

<?php echo '</script'; ?>
>
<body>
	<div class="zrl-index-wrap">	
		<div class="zrl-index-scroll">
			<!--banner开始-->
			<div class="zrl-banner-box">
				<div class="swiper-container zrl-banner">
					<div class="zrl-banner-head">
						<div class="zrl-first"></div>
						<div class="zrl-first"></div>
						<div class="zrl-first"></div>
						<div class="zrl-banner-news">35</div>
						<a href="index.php?m=index&f=sousuo"class="zrl-banner-search"></a>
						<div class="zrl-banner-title"></div>
					</div>
			        <div class="swiper-wrapper">
			            <div class="swiper-slide zrl-banner-aa"><img src="<?php echo IMG_PATH;?>
/index/liimg/zrl-banner1.png"/></div>
			            <div class="swiper-slide zrl-banner-aa"><img src="<?php echo IMG_PATH;?>
/index/liimg/zrl-banner1.png"/></div>
			            <div class="swiper-slide zrl-banner-aa"><img src="<?php echo IMG_PATH;?>
/index/liimg/zrl-banner1.png"/></div>
			        </div>
			        <div class="swiper-pagination zrl-banner-lunbo"></div>
			    </div>
			    <div class="zrl-banner-con">
			    	<img src="<?php echo IMG_PATH;?>
/index/liimg/zrl-srdz9.png" alt="" />
			    	<span class="zrl-banner-w1">PLAYINGSPORTS<br>运动无止境</span>
			    </div>
			</div>
			<!--banner结束-->
			
			<!--功能区开始-->
			<div class="zrl-function">
				<a href="index.php?m=index&f=siren" class="zrl-dr">
					<div class="zrl-circle">
						<div class="zrl-circle1 zrl-cir-bc1">
							<div class="zrl-circle2"></div>		
						</div>
					</div>
					<div class="zrl-dr-text zrl-bc1">
					</div>
				</a>
				<a href="javascript:;" class="zrl-dr">
					<div class="zrl-circle">
						<div class="zrl-circle1 zrl-cir-bc2">
							<div class="zrl-circle2"></div>		
						</div>
					</div>
					<div class="zrl-dr-text zrl-bc2">
					</div>
				</a>
				<a href="javascript:;" class="zrl-dr">
					<div class="zrl-circle">
						<div class="zrl-circle1 zrl-cir-bc3">
							<div class="zrl-circle2"></div>		
						</div>
					</div>
					<div class="zrl-dr-text zrl-bc3">
					</div>
				</a>
				<a href="index.php?m=index&f=kecheng" class="zrl-dr">
					<div class="zrl-circle">
						<div class="zrl-circle1 zrl-cir-bc4">
							<div class="zrl-circle2"></div>		
						</div>
					</div>
					<div class="zrl-dr-text zrl-bc4">
					</div>
				</a>
			</div>
			<!--功能区结束-->
			
			<!--精选活动开始-->
			<div class="zrl-jxhd">
				<div class="zrl-jxhd-head"></div>	
				<div class="swiper-container jxhd">
			        <div class="swiper-wrapper jxhd-bb">
			            <div class="swiper-slide" id="jxhd-aa">
			            	<a href="" class="zrl-jxhd-more"></a>
			            	<div class="zrl-jxhd-w"></div>
			            	<div class="zrl-jxhd-zhezhao"></div>
			            	<img src="<?php echo IMG_PATH;?>
/index/liimg/zrl-jphd1.png" alt="" />
			            </div>
			            <div class="swiper-slide" id="jxhd-aa">
			            	<a href="" class="zrl-jxhd-more"></a>
			            	   	<div class="zrl-jxhd-w"></div>
			            		<div class="zrl-jxhd-zhezhao"></div>
			            	<img src="<?php echo IMG_PATH;?>
/index/liimg/zrl-jphd2.png" alt="" />
			            </div>
			            <div class="swiper-slide" id="jxhd-aa">
			            	<a href="" class="zrl-jxhd-more"></a>
			            	   	<div class="zrl-jxhd-w"></div>
			            		<div class="zrl-jxhd-zhezhao"></div>
			            	<img src="<?php echo IMG_PATH;?>
/index/liimg/zrl-jphd3.png" alt="" />
			            </div>
			             <div class="swiper-slide" id="jxhd-aa">
			             	<a href="" class="zrl-jxhd-more"></a>
			             	   	<div class="zrl-jxhd-w"></div>
			             		<div class="zrl-jxhd-zhezhao"></div>
			            	<img src="<?php echo IMG_PATH;?>
/index/liimg/zrl-jphd1.png" alt="" />
			            </div>
			            <!--<div class="swiper-slide" id="jxhd-aa">
			            	<a href="" class="zrl-jxhd-more"></a>
			            	   	<div class="zrl-jxhd-w"></div>
			            		<div class="zrl-jxhd-zhezhao"></div>
			            	<img src="<?php echo IMG_PATH;?>
/index/liimg/zrl-jphd2.png" alt="" />
			            </div>-->
			            <!--<div class="swiper-slide" id="jxhd-aa">
			            	<a href="" class="zrl-jxhd-more"></a>
			            	<a href="" class="zrl-jxhd-more"></a>
			            	   	<div class="zrl-jxhd-w"></div>
			            		<div class="zrl-jxhd-zhezhao"></div>
			            	<img src="<?php echo IMG_PATH;?>
/index/liimg/zrl-jphd3.png" alt="" />
			            </div>-->
			        </div>
			        <div class="swiper-pagination jxhd-cc"></div>
			   	</div>		
			</div>
			<!--竞选活动结束-->
			
			<!--私人订制开始-->
		 	<div class="zrl-srdz">
		 		<div class="zrl-srdz-head"></div>
		 		<div class="zrl-srdz-box">
		 			<div class="zrl-srdz-box1">
		 				<div class="zrl-srdz-box1-left">
		 					<div class="zrl-srdz-box1-imgbox">
		 						<img src="<?php echo IMG_PATH;?>
/index/liimg/zrl-srdz9.png" alt="" />
		 					</div>
		 				</div>
		 				<div class="zrl-srdz-box1-right">
		 					<div class="zrl-srdz-box1-right-pic">
		 						<img src="<?php echo IMG_PATH;?>
/index/liimg/toux.png" alt="" />
		 					</div>
		 					<div class="zrl-srdz-name">Parame Ticd</div>
		 					<div class="zrl-srdz-time">16:32  3.8</div>
		 					<div class="zrl-srdz-pragress">
		 						<canvas></canvas>
		 					</div>	
		 				</div>
		 			</div>
		 			<div class="zrl-srdz-box1 zrl-srdz-box2">
		 				<div class="zrl-srdz-box1-left">
		 					<div class="zrl-srdz-box1-imgbox ">
		 						<img src="<?php echo IMG_PATH;?>
/index/liimg/zrl-srdz11.jpg" alt="" />
		 					</div>
		 				</div>
		 				<div class="zrl-srdz-box1-right">
		 					<div class="zrl-srdz-box1-right-pic">
		 						<img src="<?php echo IMG_PATH;?>
/index/liimg/zrl-srdz12.png" alt="" />
		 					</div>
		 					<div class="zrl-srdz-name">Parame Ticd</div>
		 					<div class="zrl-srdz-time">16:32  3.8</div>
		 					<div class="zrl-srdz-pragress">
		 						<canvas></canvas>
		 					</div>	
		 				</div>
		 			</div>
		 		</div>
		 		
		 	</div>
			<!--私人订制结束-->
			
			<!--达人推荐开始-->
			<div class="zrl-drtj-box">
				<div class="hu_imgbox3"></div>
				<!--<div class="">-->
				<div class="swiperp-container drtj">
			        <div class="swiper-wrapper">
			            <div class="swiper-slide zrl-drtj-aa">
			            	<a href=""><img src="<?php echo IMG_PATH;?>
/index/liimg/touxiang1.png" alt="" /></a>
			            	<div class="hu_text">SGJLSDJGLSJG</div>
		            		<div class="hu_text">SGJLSDJG</div>
			            	<div class="hu_j5">
			            		<i class="iconfont">&#xe652;</i>
			            		<i class="iconfont">&#xe652;</i>
			            		<i class="iconfont">&#xe652;</i>
			            		<i class="iconfont">&#xe652;</i>
			            		<i class="iconfont" >&#xe652;</i>
			            	</div>
			            	<div class="hu_dibu">
			            		<div class="hu_tx">
			            			<img src="<?php echo IMG_PATH;?>
/index/liimg/toux.png" alt="" />
				            	</div>
				            	<span class="hu_mz">KKKKK</span>
				            	<a class="hu_more">MORE</a>
			            	</div>
			            </div>
			            <div class="swiper-slide zrl-drtj-aa">
		            		<a href=""><img src="<?php echo IMG_PATH;?>
/index/liimg/touxiang1.png" alt="" /></a>
		            		<div class="hu_text">SGJLSDJGLSJG</div>
		            		<div class="hu_text">SGJLSDJG</div>
		            		<div class="hu_j5">
			            		<i class="iconfont">&#xe652;</i>
			            		<i class="iconfont">&#xe652;</i>
			            		<i class="iconfont" >&#xe652;</i>
			            	</div>
			            	<div class="hu_dibu">
			            		<div class="hu_tx">
			            			<img src="<?php echo IMG_PATH;?>
/index/liimg/toux.png" alt="" />
				            	</div>
				            	<span class="hu_mz">KKKKK</span>
				            	<a class="hu_more">MORE</a>
			            	</div>
			            </div>
			            <div class="swiper-slide zrl-drtj-aa">
		            		<a href=""><img src="<?php echo IMG_PATH;?>
/index/liimg/touxiang1.png" alt="" /></a>
		            		<div class="hu_text">SGJLSDJGLSJG</div>
		            		<div class="hu_text">SGJLSDJG</div>
		            		<div class="hu_j5">
			            		<i class="iconfont">&#xe652;</i>
			            		<i class="iconfont">&#xe652;</i>
			            		<i class="iconfont">&#xe652;</i>
			            		<i class="iconfont">&#xe652;</i>
			            		<i class="iconfont" >&#xe652;</i>
			            	</div>
			            	<div class="hu_dibu">
			            		<div class="hu_tx">
			            			<img src="<?php echo IMG_PATH;?>
/index/liimg/toux.png" alt="" />
				            	</div>
				            	<span class="hu_mz">KKKKK</span>
				            	<a class="hu_more">MORE</a>
			            	</div>
			            </div>
			            <div class="swiper-slide zrl-drtj-aa">
		            		<a href=""><img src="<?php echo IMG_PATH;?>
/index/liimg/touxiang1.png" alt="" /></a>
		            		<div class="hu_text">SGJLSDJGLSJG</div>
		            		<div class="hu_text">SGJLSDJG</div>
		            		<div class="hu_j5">
			            		<i class="iconfont">&#xe652;</i>
			            		<i class="iconfont">&#xe652;</i>
			            		<i class="iconfont">&#xe652;</i>
			            	</div>
			            	<div class="hu_dibu">
			            		<div class="hu_tx">
			            			<img src="<?php echo IMG_PATH;?>
/index/liimg/toux.png" alt="" />
				            	</div>
				            	<span class="hu_mz">KKKKK</span>
				            	<a class="hu_more">MORE</a>
			            	</div>
			            </div>
		       		</div>
		 			<div class="swiper-pagination drtj-cc"></div>
		    	</div>
		    </div>
			<!--达人推荐结束-->
		
			<!--快捷区域开始-->
			<div class="zrl-kjqy">
				<div class="zrl-kjqy-head">
					<div class="zrl-kjqy-head-box"></div>
				</div>	
				<div class="zrl-kjqy-box">
					<a href="" class="zrl-kjqy-sbox">
						<img src="<?php echo IMG_PATH;?>
/index/liimg/zrl-tbtj2.png" alt="" />
					</a>
					
					<a href="" class="zrl-kjqy-sbox zrl-kjqy-sbox-w1">
						<span>&nbsp;&nbsp;瘦出小蛮腰</span>
					</a>
					
					<a href="" class="zrl-kjqy-sbox"> 
						<img src="<?php echo IMG_PATH;?>
/index/liimg/zrl-tbtj3.png" alt="" />
					</a>
					
					<a href="" class="zrl-kjqy-sbox zrl-kjqy-sbox-w2">
						<span>&nbsp;&nbsp;HIIT的唤醒</span>
					</a>
					
					<a href="" class="zrl-kjqy-sbox">
						<img src="<?php echo IMG_PATH;?>
/index/liimg/zrl-tbtj4.png" alt="" />
					</a>
					
					<a href="" class="zrl-kjqy-sbox zrl-kjqy-sbox-w3">
						<span>&nbsp;&nbsp;瑜伽X关节舒展</span>
					</a>
					
					<a href="" class="zrl-kjqy-bbox zrl-kjqy-sbox-w4">
						<span>&nbsp;&nbsp;做你喜欢的</span>
					</a>
					
					<a href="" class="zrl-kjqy-sbox zrl-kjqy-sbox-w5">
						<img src="<?php echo IMG_PATH;?>
/index/liimg/zrl-tbtj5.png" alt="" />
					</a>
				</div>
			</div>
			<!--快捷区域结束-->
		</div>
		<?php $_smarty_tpl->_subTemplateRender("file:index/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
