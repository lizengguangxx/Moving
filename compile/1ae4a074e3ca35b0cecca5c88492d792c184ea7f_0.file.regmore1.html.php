<?php
/* Smarty version 3.1.30, created on 2017-05-08 04:22:59
  from "G:\wamp\www\moving-master\template\index\regmore\regmore1.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_590fd683037839_38582669',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1ae4a074e3ca35b0cecca5c88492d792c184ea7f' => 
    array (
      0 => 'G:\\wamp\\www\\moving-master\\template\\index\\regmore\\regmore1.html',
      1 => 1494210108,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_590fd683037839_38582669 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    	<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/index/regmore/xingbie.css" />
	</head>
	<body>
		<!--01-->
		<p class="hu_xw">你的性别？</p>
		<p class="hu_nr">Moving 依据性别设计训练内容</p>
		<ul class="hu_xingbie">
			<li>男</li>
			<li>女</li>
		</ul>
		<!--01 end-->
		
		<!--02-->
		<p class="hu_ny">你的出生年月？</p>
		<p class="hu_nr">仅作用训练推荐的依据，Keep会帮你保密</p>
		<input type="date" class="hu_date"/>
		<!--02 end-->
		
		<!--03-->
		<div class="hu_jx">继续</div>

		
	</body>
	<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/zepto.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/touch.js"><?php echo '</script'; ?>
>
	
	<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/index/regmore/regmore1.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/index/regmore/ajax.js"><?php echo '</script'; ?>
>
</html>
<?php }
}
