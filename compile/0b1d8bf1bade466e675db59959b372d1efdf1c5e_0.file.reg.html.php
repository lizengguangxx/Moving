<?php
/* Smarty version 3.1.30, created on 2017-05-08 04:22:47
  from "G:\wamp\www\moving-master\template\index\reg.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_590fd677cfc3f2_91683001',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0b1d8bf1bade466e675db59959b372d1efdf1c5e' => 
    array (
      0 => 'G:\\wamp\\www\\moving-master\\template\\index\\reg.html',
      1 => 1494210108,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_590fd677cfc3f2_91683001 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
		<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/index/reg.css" />
		<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery.min.js"><?php echo '</script'; ?>
>
	    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery.validate.js"><?php echo '</script'; ?>
>
	    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery.metadata.js"><?php echo '</script'; ?>
>
	    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/index/reg.js"><?php echo '</script'; ?>
>
	</head>
	<body>
		<div class="hu_cir">
			<div class="hu_xcir">
				<div class="hu_xxcir">
				</div>
			</div>
		</div>
		<form action="index.php?m=index&f=login&a=addReg" id="myform" method="post"> 
			<div class="hu_ding"></div>
			<div class="hu_tishi">
				<label id="uname-error" class="error" for="uname"></label>
		        <label id="upass-error" class="error" for="upass"></label>
		        <label id="upass2-error" class="error" for="upass2"></label>
			</div>
			<div class="hu_box">
				<div class="hu_left">
					<div></div>
					<div></div>
				</div>
				<div class="hu_right">
					<span>用户名</span>
					<span>Username</span>
				</div>
				<!--<div class="hu_quan">
					<div class="hu_xquan"></div>
				</div>-->
				<input type="text" name="uname" autocomplete="off" class="hu_text">
			</div>
			
			<div class="hu_box">
				<div class="hu_left">
					<div></div>
					<div></div>
				</div>
				<div class="hu_right">
					<span>密码</span>
					<span>Password</span>
				</div>
				<!--<div class="hu_quan">
					<div class="hu_xquan"></div>
				</div>-->
				<input type="text" name="upass" autocomplete="off" class="hu_text" id="upass">
			</div>
			
			<div class="hu_box">
				<div class="hu_left">
					<div></div>
					<div></div>
				</div>
				<div class="hu_right">
					<span>再次输入密码</span>
					<span>Password</span>
				</div>
				<!--<div class="hu_quan">
					<div class="hu_xquan"></div>
				</div>-->
				<input type="text" name="upass2" autocomplete="off" class="hu_text">
			</div>
			
			
			<input type="submit" value="注册" class="hu_dl">
		</form>
		<div class="hu_dibu"><span>已有帐号？</span><a href="index.php?m=index&f=login&a=init">登录moving帐号</a></div>
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
