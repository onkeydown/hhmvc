<?php /* Smarty version Smarty-3.1.17, created on 2014-04-17 23:24:05
         compiled from "S:\xampp\htdocs\hhmvc\public\themes\default\users\welcome.tpl" */ ?>
<?php /*%%SmartyHeaderCode:23561535062950ba472-12689768%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '13ea86ecb766e083ef7170dbce20867d7e6ebb5e' => 
    array (
      0 => 'S:\\xampp\\htdocs\\hhmvc\\public\\themes\\default\\users\\welcome.tpl',
      1 => 1397774972,
      2 => 'file',
    ),
    '55c271a55139c18ce353a434356ac2bbdb1dd57f' => 
    array (
      0 => 'S:\\xampp\\htdocs\\hhmvc\\public\\themes\\default\\index.tpl',
      1 => 1397774988,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23561535062950ba472-12689768',
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
  'unifunc' => 'content_535062952120c3_40447456',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_535062952120c3_40447456')) {function content_535062952120c3_40447456($_smarty_tpl) {?><!doctype html>
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






<section class="featured cms">
<div class="container-fluid">
<div class="row">
<div class="col-md-6 col-md-offset-3">
<div class="align-center">
    <h2><?php echo '/*%%SmartyNocache:23561535062950ba472-12689768%%*/<?php echo $_smarty_tpl->tpl_vars[\'content\']->value[\'content\'][\'headline_h2\'];?>
/*/%%SmartyNocache:23561535062950ba472-12689768%%*/';?>
</h2>
</div>
</div>
</div>
</div>
</section>



<section class="cms welcomeMember">
<div class="container-fluid">
<div class="row">
<div class="col-md-6 col-md-offset-3 panel">
<div class="align-center">
    <h4>
    <i class="fa fa-quote-left"></i> <?php echo '/*%%SmartyNocache:23561535062950ba472-12689768%%*/<?php echo $_smarty_tpl->tpl_vars[\'content\']->value[\'content\'][\'info_msg\'];?>
/*/%%SmartyNocache:23561535062950ba472-12689768%%*/';?>

    </h4>
    <p>
    	<?php echo $_SESSION['USER']['headline_h2'];?>
 |
		user: <?php echo $_SESSION['USER']['user_name'];?>
 (role: <?php echo $_SESSION['USER']['role'];?>
)<br/>
		last visit: <?php echo $_SESSION['USER']['lastseen'];?>
 |
		e-mail: <?php echo $_SESSION['USER']['user_email'];?>
 - 
		
		<a href="/user/profile">edit Profile</a>

	</p>
    <div class="subslogan">
        <h5><?php echo '/*%%SmartyNocache:23561535062950ba472-12689768%%*/<?php echo $_smarty_tpl->tpl_vars[\'content\']->value[\'content\'][\'splash_msg\'];?>
/*/%%SmartyNocache:23561535062950ba472-12689768%%*/';?>
</h5>
	    <a href="#" class="btn btn-primary hhmvc-Button">
	  		<i class="fa fa-thumbs-up"></i> Submit
	    </a>
    </div>
</div>
</div>
</div>
</div>
</section>











    <div class="footer l-box is-center">
            <?php echo '/*%%SmartyNocache:23561535062950ba472-12689768%%*/<?php echo $_smarty_tpl->tpl_vars[\'content\']->value[\'footer\'][\'nav\'];?>
/*/%%SmartyNocache:23561535062950ba472-12689768%%*/';?>

    </div>


<?php echo $_smarty_tpl->getSubTemplate ("basic/script.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

</body>
</html><?php }} ?>
