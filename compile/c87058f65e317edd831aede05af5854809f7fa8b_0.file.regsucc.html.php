<?php
/* Smarty version 3.1.30, created on 2017-05-08 04:22:56
  from "G:\wamp\www\moving-master\template\index\regsucc.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_590fd680b13408_91739857',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c87058f65e317edd831aede05af5854809f7fa8b' => 
    array (
      0 => 'G:\\wamp\\www\\moving-master\\template\\index\\regsucc.html',
      1 => 1494210108,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_590fd680b13408_91739857 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/index/regsucc.css" />
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	</head>
	<style>
		.go{
			text-decoration: none;
		}
	</style>
	<body>
		<i class="iconfont" id="hu_cir">&#xe637;</i>
		<p class="hu_p1">完成注册</p>
		<p class="hu_p2">欢迎成为Moving一员</p>
		<p class="hu_p3" >接下来，希望通过几个问题，了解你更多</p>
		<p class="hu_p4">越了解你，越能为你找到合适的训练，祝你实现健身目标</p>
		<div class="hu_jx"><a href="index.php?m=index&f=regmore&a=xingbie" class="go">GO!</a></div>
	</body>
	<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/zepto.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
>
	window.onload=function(){
		function size(originwidth){
			var width=document.documentElement.clientHeight;
			var bili=width/originwidth*100+"px";
			$("html").css("font-size",bili);
		}
		size(1334);
	}
	<?php echo '</script'; ?>
>
</html>
<?php }
}
