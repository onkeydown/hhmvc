<?php /* Smarty version Smarty-3.1.17, created on 2014-04-17 23:23:48
         compiled from "S:\xampp\htdocs\hhmvc\public\themes\default\member\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3231053506284e8da77-10767334%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3919a84842262916bd1e88275ee2c1eef627f586' => 
    array (
      0 => 'S:\\xampp\\htdocs\\hhmvc\\public\\themes\\default\\member\\login.tpl',
      1 => 1396991019,
      2 => 'file',
    ),
    '55c271a55139c18ce353a434356ac2bbdb1dd57f' => 
    array (
      0 => 'S:\\xampp\\htdocs\\hhmvc\\public\\themes\\default\\index.tpl',
      1 => 1397774988,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3231053506284e8da77-10767334',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'value' => 0,
    'key' => 0,
    'content' => 1,
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_5350628575ded2_04520798',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5350628575ded2_04520798')) {function content_5350628575ded2_04520798($_smarty_tpl) {?><!doctype html>
<html lang="en">
    <?php echo $_smarty_tpl->getSubTemplate ('basic/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<body>


<section id="header" class="appear"></section>
<div class="navbar navbar-fixed-top" role="navigation" data-0="line-height:100px; height:100px; background-color:rgba(0,0,0,0.3);" data-300="line-height:60px; height:60px; background-color:rgba(0,0,0,1);">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="fa fa-bars color-white"></span>
            </button>
            <h1><a class="navbar-brand" href="/" data-0="line-height:90px;" data-300="line-height:50px;">HH-MVC Robs</a></h1>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav nav-pills" data-0="margin-top:20px;" data-300="margin-top:5px;">	    <?php if ($_SESSION['USER']['role']<1) {?>
                <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_SESSION['nav']['0']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</a></li>
                <?php } ?>
             <?php } else { ?>
                <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_SESSION['nav']['1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</a></li>
                <?php } ?>
             <?php }?>
            </ul>
        </div><!--/.navbar-collapse -->
    </div>
</div>






<section class="featured login">
<div class="container-fluid">
<div class="row">
<div class="col-md-4 col-md-offset-4">
<div class="align-center">
    <h4>
        <?php echo $_smarty_tpl->tpl_vars['session']->value['USER']['sys_msg'];?>

    </h4>
</div>
</div>
</div>
</div>
</section>



<section class="login form">
<div class="container-fluid">
<div class="row">
<div class="col-md-4 col-md-offset-4 panel">
<div class="col-md-10 col-md-offset-1">
	<form action="/member/login" method="post" name="login" role="form">
                <input type="hidden" name="time" value="time">
                
        		<div class="form-group">
                    <label for="username">User</label>
            		<input 
                        type="text" 
                        name="username" 
                        id="username" 
                        type="text" 
                        required="" 
                        pattern="^[A-Za-z0-9_]{1,15}$" 
                        value="" 
                        name="names_pattern3"
                        id="names_pattern3"
                        class="form-control">
                </div>
                <div class="form-group">
                    <label for="pwd">Your secret password!</label>
            		<input 
                        id="pwd" 
                        name="pwd"
                        type="password" 
                        placeholder="Password (min. 6 characters)"
                        pattern="?=^.{6,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$"
                        value=""
                        required=""
                        class="form-control">
                    </div>
                
        		
                <button class="btn btn-primary btn-block" type="submit" name="login now" value="login" >Login now</button>
	</form>
</div>
</div>
</div>
</div>    
</section>







    <div class="footer l-box is-center">
            <?php echo '/*%%SmartyNocache:3231053506284e8da77-10767334%%*/<?php echo $_smarty_tpl->tpl_vars[\'content\']->value[\'footer\'][\'nav\'];?>
/*/%%SmartyNocache:3231053506284e8da77-10767334%%*/';?>

    </div>


<?php echo $_smarty_tpl->getSubTemplate ("basic/script.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

</body>
</html><?php }} ?>
