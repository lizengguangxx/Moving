<?php
/* Smarty version 3.1.30, created on 2017-05-17 16:35:24
  from "G:\wamp666\www\moving-master\template\index\regmore\regmore2.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_591c5facc08057_04763187',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1a635b8ade7e39bd01ba76f81d82c8dc141df0c5' => 
    array (
      0 => 'G:\\wamp666\\www\\moving-master\\template\\index\\regmore\\regmore2.html',
      1 => 1494210108,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_591c5facc08057_04763187 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    	<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/index/regmore/shengao.css"/>
	</head>
	<body>
		<!--01-->
		<p class="hu_xw1">你的身高？</p>
		<p class="hu_nr">Moving 依据身高设计训练内容</p>
		<input type="text" class="hu_input one" value="单位必须为CM"/>
		<!--01 end-->
		
		<!--02-->
		<p class="hu_xw">你的体重？</p>
		<p class="hu_nr">Moving 依据体重设计训练内容</p>
		<input type="text" class="hu_input two" value="单位必须为KG"/>
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
/index/regmore/regmore2.js"><?php echo '</script'; ?>
>
</html>

<?php }
}
