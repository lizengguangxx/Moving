<?php
/* Smarty version 3.1.30, created on 2017-05-17 16:34:48
  from "G:\wamp666\www\moving-master\template\index\login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_591c5f8897b7b0_12538600',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '073a5e2fe64795bd61d12aff3fdc91446de39e86' => 
    array (
      0 => 'G:\\wamp666\\www\\moving-master\\template\\index\\login.html',
      1 => 1494210108,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_591c5f8897b7b0_12538600 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
		<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/index/login.css" />
		<link rel="stylesheet" href="<?php echo JS_PATH;?>
/zepto.js" />
		<link rel="stylesheet" href="<?php echo JS_PATH;?>
/touch.js" />
	</head>
	<body>
		<div class="hu_cir">
			<div class="hu_xcir">
				<div class="hu_xxcir">
				</div>
			</div>
		</div>
		<p></p>
		<form action="index.php?m=index&f=login&a=check" id="myform" method="post">
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
				<div class="hu_quan yongquan">
					<div class="hu_xquan"></div>
				</div>
				<input type="text" name="uname" autocomplete="off" class="hu_text yonghu">
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
				<div class="hu_quan miquan">
					<div class="hu_xquan"></div>
				</div>
				<input type="text" name="upass" autocomplete="off" class="hu_text mima">
			</div>
			
			<input type="submit" value="登录" class="hu_dl" >
		</form>
		<div class="hu_dibu"><span>没有帐号？</span>
		<a href="index.php?m=index&f=login&a=reg">注册moving帐号</a></div>
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
		
		$(".yonghu").blur(function(){
			var val=$(".yonghu").val();
			$.ajax({
				type:"post",
				url:"index.php?m=index&f=login&a=checkuse",
				data:"uname="+val,
				success:function(e){
					if(e=="ok"){
						$(".yongquan").css("background","#1dde61");
						
					}else{
						$(".yongquan").css("background","rgb(245,14,9)");
					}
				}
			})
		})
		$(".mima").blur(function(){
			var val1=$(".yonghu").val();
			var val2=$(".mima").val();
			
			$.ajax({
				type:"post",
				url:"index.php?m=index&f=login&a=checkmima",
				data:{
					uname:val1,
					upass:val2
				},
				success:function(e){
					if(e=="ok"){
						$(".miquan").css("background","#1dde61");
						
					}else {
						$(".miquan").css("background","rgb(245,14,9)");
					}
				}
			})	
		})
		
		
		
		
		
	}
	<?php echo '</script'; ?>
>
</html>
<?php }
}
