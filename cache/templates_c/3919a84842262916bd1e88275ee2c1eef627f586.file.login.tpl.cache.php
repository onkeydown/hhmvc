<?php /* Smarty version Smarty-3.1.17, created on 2014-04-20 00:27:20
         compiled from "S:\xampp\htdocs\hhmvc\public\themes\default\member\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3090453515def29ef89-43153145%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3919a84842262916bd1e88275ee2c1eef627f586' => 
    array (
      0 => 'S:\\xampp\\htdocs\\hhmvc\\public\\themes\\default\\member\\login.tpl',
      1 => 1397788774,
      2 => 'file',
    ),
    '55c271a55139c18ce353a434356ac2bbdb1dd57f' => 
    array (
      0 => 'S:\\xampp\\htdocs\\hhmvc\\public\\themes\\default\\index.tpl',
      1 => 1397946424,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3090453515def29ef89-43153145',
  'function' => 
  array (
  ),
  'cache_lifetime' => 3600,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_53515def41dcd4_57576416',
  'variables' => 
  array (
    'value' => 0,
    'key' => 0,
    'content' => 1,
  ),
  'has_nocache_code' => true,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53515def41dcd4_57576416')) {function content_53515def41dcd4_57576416($_smarty_tpl) {?><!doctype html>
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
            <h1><a class="navbar-brand rotate45" href="/" data-0="line-height:90px;" data-300="line-height:50px;"><i class="fa fa-wrench"></i></a></h1>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav nav-pills" data-0="margin-top:20px;" data-300="margin-top:5px;">
            <?php if ($_SESSION['USER']['role']==0||!isset($_SESSION['USER']['role'])) {?>
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
                        placeholder="Username or Email ..."
                        id="username" 
                        type="text" 
                        required
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
                        required
                        class="form-control">
                    </div>
                
        		
                <button class="btn btn-primary btn-block" type="submit" name="login now" value="login" >Login now</button>
	</form>
</div>
</div>
</div>
</div>    
</section>







    <div id="modal" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="Confirm action" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Modal title</h4>
                </div>
                <div class="modal-body">
                    <p>Please confirm content remove</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close/Decline</button>
                    <button type="button" class="btn btn-primary">Apply delete</button>

                        <a href="/cms/efforts/deletec" data-aid="deletec" data-url="/json/deletec" data-status="1" title="" data-original-title="deletec" class="ajaxReq fa fa-delete hhmvc-tooltip btn btn-default btn-sm btn-small dropdown-toggle">
                            <span>
                                delete
                            </span>
                        </a>
                </div>       
            </div>
        </div>
    </div>



    <div class="footer l-box is-center">
            <?php echo '/*%%SmartyNocache:3090453515def29ef89-43153145%%*/<?php echo $_smarty_tpl->tpl_vars[\'content\']->value[\'footer\'][\'nav\'];?>
/*/%%SmartyNocache:3090453515def29ef89-43153145%%*/';?>

    </div>


<?php echo $_smarty_tpl->getSubTemplate ("basic/script.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

</body>
</html><?php }} ?>
