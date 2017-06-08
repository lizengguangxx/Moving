<?php
/* Smarty version 3.1.30, created on 2017-05-17 16:36:02
  from "G:\wamp666\www\moving-master\template\index\siren\siIndex.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_591c5fd23805b1_25260247',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a3e1f18bdbff765ebc2d0dd7cec0f8fdc0b5a6e5' => 
    array (
      0 => 'G:\\wamp666\\www\\moving-master\\template\\index\\siren\\siIndex.html',
      1 => 1494210108,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index/footer.html' => 1,
  ),
),false)) {
function content_591c5fd23805b1_25260247 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>moving</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/base.css" />
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/index/siren/siIndex.css" /> 
    
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/touch.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/iscroll-probe.js"><?php echo '</script'; ?>
>
    
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/index/siren/resize.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/index/siren/search9.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/cir.js"><?php echo '</script'; ?>
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
			
		}
<?php echo '</script'; ?>
>
<body>
	<!--banner开始-->
	<div class="zrl-index-wrap">	
		<div class="zrl-index-scroll">
		<div class="hyx-banner">
			<div class="hyx-n">INDIVIDUAL</div>
			<div class="hyx-i">IMAGE.TIME</div>
			<img src="<?php echo IMG_PATH;?>
/index/siren/hyxd_06.png" alt="" class="hyximg"/>
			<div class="hyx-s">私人订制</div>
			<div class="hyx-vip">
				<ul class="hyx-left">
					<!--<li><a href="javascript:;">VIP</a></li>-->
					<li><a href="index.php?m=index&f=siren&a=jiaolian">教练选择</a></li>
					<li><a href="index.php?m=index&f=siren&a=xunlian">训练计划</a></li>
				</ul>
				<div class="hyx-right">
					<a href=""><img src="<?php echo IMG_PATH;?>
/index/siren/hyxyj.png" alt="" /></a>
				</div>
			</div>
		</div>
	<!--banner结束-->
	<!--教练选择开始-->
	<div class="con">
		<div 
			class="hyx-jiaolian">
			<a href="index.php?m=index&f=siren&a=jiaolian"><img src="<?php echo IMG_PATH;?>
/index/siren/hyxj_09.png" alt="" /></a>
			<!--<ul>
				<li></li>
				<li></li>
				<li></li>
			</ul>-->
		</div>
		<ul  class="hyxImg">
			<li>
				<a href="" class="imgimg">
					<div class="hyx-mv">
						<div class="mv-img">
							<img src="<?php echo IMG_PATH;?>
/index/siren/hyx1_05.png" alt="" />
						</div>
						<h3 class="hyx-h3">HOT&THIN</h3>
						<div class="hyx-wu">
								<img src="<?php echo IMG_PATH;?>
/index/siren/daren14_11.png" alt="" />
								<img src="<?php echo IMG_PATH;?>
/index/siren/daren14_11.png" alt="" />
								<img src="<?php echo IMG_PATH;?>
/index/siren/daren14_11.png" alt="" />
								<img src="<?php echo IMG_PATH;?>
/index/siren/daren14_11.png" alt="" />
								<img src="<?php echo IMG_PATH;?>
/index/siren/daren14_11.png" alt="" />
						</div>
						<div class="hyxDashed">
							<img src="<?php echo IMG_PATH;?>
/index/siren/hyxDashed.png" alt="" />
						</div>
						<div class="hyx-l">
							<div class="hyx-love">
								<span></span>
								<span>35895</span>
							</div>
							<div class="hyx-xinxi hyx-love">
								<span></span>
								<span>37648</span>
							</div>
						</div>
						<div class="hyx-btn">
							<div class="btn-left">
								<div class="left-img">
									<img src="<?php echo IMG_PATH;?>
/index/siren/hyx-mv.jpg" alt="" />
								</div>
							</div>
							<div class="btn-right">
								<span><?php echo $_smarty_tpl->tpl_vars['result']->value['sjiaolian'];?>
</span>
								<img src="<?php echo IMG_PATH;?>
/index/siren/hyxhot-5.png" alt="" />
							</div>
						</div>
					</div>
				</a>
			</li>
			<li>
				<a href="" class="imgimg">
					<div class="hyx-mv">
						<div class="mv-img">
							<img src="<?php echo UPLOAD_PATH;?>
/timg.jpg" alt="" />
						</div>
						<h3 class="hyx-h3">HOT&THIN</h3>
						<div class="hyx-wu">
								<img src="<?php echo IMG_PATH;?>
/index/siren/daren14_11.png" alt="" />
								<img src="<?php echo IMG_PATH;?>
/index/siren/daren14_11.png" alt="" />
								<img src="<?php echo IMG_PATH;?>
/index/siren/daren14_11.png" alt="" />
								<img src="<?php echo IMG_PATH;?>
/index/siren/daren14_11.png" alt="" />
								<img src="<?php echo IMG_PATH;?>
/index/siren/daren14_11.png" alt="" />
						</div>
						<div class="hyxDashed">
							<img src="<?php echo IMG_PATH;?>
/index/siren/hyxDashed.png" alt="" />
						</div>
						<div class="hyx-l">
							<div class="hyx-love">
								<span></span>
								<span>35895</span>
							</div>
							<div class="hyx-xinxi hyx-love">
								<span></span>
								<span>37648</span>
							</div>
						</div>
						<div class="hyx-btn">
							<div class="btn-left">
								<div class="left-img">
									<img src="<?php echo IMG_PATH;?>
/index/siren/hyx-mv.jpg" alt="" />
								</div>
							</div>
							<div class="btn-right">
								<span><?php echo $_smarty_tpl->tpl_vars['result1']->value['sjiaolian'];?>
</span>
								<img src="<?php echo IMG_PATH;?>
/index/siren/hyxhot-5.png" alt="" />
							</div>
						</div>
					</div>
				</a>
			<li>
				<a href="" class="imgimg">
					<div class="hyx-mv">
						<div class="mv-img">
							<img src="<?php echo UPLOAD_PATH;?>
/timg (1).jpg" alt="" />
						</div>
						<h3 class="hyx-h3">HOT&THIN</h3>
						<div class="hyx-wu">
								<img src="<?php echo IMG_PATH;?>
/index/siren/daren14_11.png" alt="" />
								<img src="<?php echo IMG_PATH;?>
/index/siren/daren14_11.png" alt="" />
								<img src="<?php echo IMG_PATH;?>
/index/siren/daren14_11.png" alt="" />
								<img src="<?php echo IMG_PATH;?>
/index/siren/daren14_11.png" alt="" />
								<img src="<?php echo IMG_PATH;?>
/index/siren/daren14_11.png" alt="" />
						</div>
						<div class="hyxDashed">
							<img src="<?php echo IMG_PATH;?>
/index/siren/hyxDashed.png" alt="" />
						</div>
						<div class="hyx-l">
							<div class="hyx-love">
								<span></span>
								<span>35895</span>
							</div>
							<div class="hyx-xinxi hyx-love">
								<span></span>
								<span>37648</span>
							</div>
						</div>
						<div class="hyx-btn">
							<div class="btn-left">
								<div class="left-img">
									<img src="<?php echo IMG_PATH;?>
/index/siren/hyx-mv.jpg" alt="" />
								</div>
							</div>
							<div class="btn-right">
								<span><?php echo $_smarty_tpl->tpl_vars['result2']->value['sjiaolian'];?>
</span>
								<img src="<?php echo IMG_PATH;?>
/index/siren/hyxhot-5.png" alt="" />
							</div>
						</div>
					</div>
				</a>
			</li>
			<li>
				<a href="" class="imgimg">
					<div class="hyx-mv">
						<div class="mv-img">
							<img src="<?php echo UPLOAD_PATH;?>
/timg (2).jpg" alt="" />
						</div>
						<h3 class="hyx-h3">HOT&THIN</h3>
						<div class="hyx-wu">
								<img src="<?php echo IMG_PATH;?>
/index/siren/daren14_11.png" alt="" />
								<img src="<?php echo IMG_PATH;?>
/index/siren/daren14_11.png" alt="" />
								<img src="<?php echo IMG_PATH;?>
/index/siren/daren14_11.png" alt="" />
								<img src="<?php echo IMG_PATH;?>
/index/siren/daren14_11.png" alt="" />
								<img src="<?php echo IMG_PATH;?>
/index/siren/daren14_11.png" alt="" />
						</div>
						<div class="hyxDashed">
							<img src="<?php echo IMG_PATH;?>
/index/siren/hyxDashed.png" alt="" />
						</div>
						<div class="hyx-l">
							<div class="hyx-love">
								<span></span>
								<span>35895</span>
							</div>
							<div class="hyx-xinxi hyx-love">
								<span></span>
								<span>37648</span>
							</div>
						</div>
						<div class="hyx-btn">
							<div class="btn-left">
								<div class="left-img">
									<img src="<?php echo IMG_PATH;?>
/index/siren/hyx-mv.jpg" alt="" />
								</div>
							</div>
							<div class="btn-right">
								<span><?php echo $_smarty_tpl->tpl_vars['result3']->value['sjiaolian'];?>
</span>
								<img src="<?php echo IMG_PATH;?>
/index/siren/hyxhot-5.png" alt="" />
							</div>
						</div>
					</div>
				</a>
			</li>
		</ul>
		<img src="<?php echo IMG_PATH;?>
/index/siren/hyxl_03.png" alt="" class="h-xunlian"/>
	</div>
	<!--教练选择结束-->
	<!--训练计划开始、-->
		<div class="hyx-xunlian">
			<div class="hyx-nei">
				<div class="hyx-tr">TRAIN</div>
				<div class="hyx-cu">CURRICULUM SCHEDULE</div>
				<img src="<?php echo IMG_PATH;?>
/index/siren/hyxd_06.png" alt="" class="hyximg hyx-im"/>
				<div class="hyx-xlkcb">训练课程表</div>
				<div class="box-hyx">
					<div class="box-left">
						<div class="hyx-wc">完成<span>70</span>%</div>
						<div class="hyx-pre">
							<div class="hyx-pregress"></div>
						</div>
					</div>
					<div class="box-right"><a href="index.php?m=index&f=siren&a=xunlian">MORE</a></div>
				</div>
			</div>	
		</div>
	<!--训练计划结束-->
	<!--完成任务开始-->
	<div class="hyx-con1">
		<div class="box-con">
			<img src="<?php echo IMG_PATH;?>
/index/siren/hyxb_03.png" alt="" class="h-xunlian"/>
			<!--04-->
			<!--<div class="hu_imgbox4"></div>-->
	    	<div class="hu_food">
	
				<div class="hu_food_con">
					
					<div class="hu_person_box">
						<div>
							<p></p>
						</div>
						<div class="hu_touxiang">
							<img src="<?php echo IMG_PATH;?>
/index/siren/touxiang.png" alt="" />
						</div>
						<div class="hu_name">
							<p>艾米•格林</p>
							<p>Amy Green</p>
						</div>
					</div>
					
					<div class="hu_text_box">
						<h2>健康身体从吃开始</h2>
						<p>Diet health</p>
						<h3>• 吃出你的魔鬼身材呦</h3>
						<!--<img src="<?php echo IMG_PATH;?>
/index/siren/111.png" alt="" />							
						<span>EX.</span>
						<span>118</span>-->
					</div>
					
					<div class="hu_shuju_box">
						<div class="hu_cir">
							<canvas width="57" height="57"></canvas>
						</div>
						<br>
						<h3>• 2017.03.19</h3>
						<!--<div class="hu_join">
							<a href="">JOIN</a>
						</div>-->
					</div>
				</div>
			</div>
		
			<div class="hu_food">
	
				<div class="hu_food_con">
					
					<div class="hu_person_box">
						<div>
							<p></p>
						</div>
						<div class="hu_touxiang">
							<img src="<?php echo IMG_PATH;?>
/index/siren/touxiang.png" alt="" />
						</div>
						<div class="hu_name">
							<p>艾米•格林</p>
							<p>Amy Green</p>
						</div>
					</div>
					
					<div class="hu_text_box">
						<h2>健康身体从吃开始</h2>
						<p>Diet health</p>
						<h3>• 吃出你的魔鬼身材呦</h3>
						<!--<img src="<?php echo IMG_PATH;?>
/index/siren/111.png" alt="" />							
						<span>EX.</span>
						<span>118</span>-->
					</div>
					
					<div class="hu_shuju_box">
						<div class="hu_cir">
							<canvas width="57" height="57"></canvas>
						</div>
						<br>
						<h3>• 2017.03.19</h3>
						<!--<div class="hu_join">
							<a href="">JOIN</a>
						</div>-->
					</div>
				</div>
			</div>
		<!--04 end-->
		</div>
	
	</div>
	</div>
	<!--完成任务结束-->
<?php $_smarty_tpl->_subTemplateRender("file:index/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
