<?php
/* Smarty version 3.1.30, created on 2017-05-17 16:35:48
  from "G:\wamp666\www\moving-master\template\index\footer.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_591c5fc439c5d7_14485181',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '10ef7c7e0daa744662c0b0b50c4993221244d992' => 
    array (
      0 => 'G:\\wamp666\\www\\moving-master\\template\\index\\footer.html',
      1 => 1494210108,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_591c5fc439c5d7_14485181 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!--底部开始-->	
		<div class="zrl-footer">
			<a href="index.php?m=index&f=index" class="zrl-foot zrl-foot-tab1 zrl-foot-show indexfoot">
			</a>
			<a href="index.php?m=index&f=siren" class="zrl-foot zrl-foot-tab2 zrl-foot-show sirenfoot">
			</a>
			<a href="index.php?m=index&f=ping" class="zrl-foot zrl-foot-tab3">
			</a>
			<a href="index.php?m=index&f=quan" class="zrl-foot zrl-foot-tab4 zrl-foot-show quanfoot">
			</a>
			<a href="index.php?m=index&f=wode" class="zrl-foot zrl-foot-tab5 zrl-foot-show wodefoot">
			</a>
			<div style="display: none;" class="hidfoot"><?php echo $_smarty_tpl->tpl_vars['yemian']->value;?>
</div>
		</div>
		<!--底部结束-->
	</div>	
</body>

	
<?php echo '<script'; ?>
> 
	//底部touch事件
   	var footchoose= $(".hidfoot").html(); 
   	$(".zrl-foot").css("box-shadow","none");
   	$("."+footchoose).eq(0).css("box-shadow","0 0 0.3rem #bbbaba");	
<?php echo '</script'; ?>
>  
	
</html><?php }
}
