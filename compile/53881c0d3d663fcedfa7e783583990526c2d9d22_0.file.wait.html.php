<?php
/* Smarty version 3.1.30, created on 2017-05-08 04:25:17
  from "G:\wamp\www\moving-master\template\admin\wait.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_590fd70d035767_30026244',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '53881c0d3d663fcedfa7e783583990526c2d9d22' => 
    array (
      0 => 'G:\\wamp\\www\\moving-master\\template\\admin\\wait.html',
      1 => 1494210108,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_590fd70d035767_30026244 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/admin/wait.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/admin/wait.css">
</head>
<body>
  <div class="box">
      <div class="title">
      	提示信息：请耐心等待!
      </div>
      <div class="con">
      		<?php echo $_smarty_tpl->tpl_vars['message']->value;?>

          <span>3</span>秒后跳转<br>
          没有跳转，请 <a href=<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
>点击</a>
      </div>
  </div>
</body>
</html><?php }
}
