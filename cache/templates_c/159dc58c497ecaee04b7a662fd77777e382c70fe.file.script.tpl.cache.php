<?php /* Smarty version Smarty-3.1.17, created on 2014-04-17 23:23:49
         compiled from "S:\xampp\htdocs\hhmvc\public\themes\default\basic\script.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1460853506285b7cac6-35827671%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '159dc58c497ecaee04b7a662fd77777e382c70fe' => 
    array (
      0 => 'S:\\xampp\\htdocs\\hhmvc\\public\\themes\\default\\basic\\script.tpl',
      1 => 1396909498,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1460853506285b7cac6-35827671',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'session' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_53506285bcacd1_66693105',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53506285bcacd1_66693105')) {function content_53506285bcacd1_66693105($_smarty_tpl) {?><script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<!--// wysiwyg Editor / summernote-->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script> 

<?php if ($_smarty_tpl->tpl_vars['session']->value['USER']['role']>0) {?>

	<!--// Hightlight Code / CodeMirror-->
	<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/codemirror/3.20.0/codemirror.min.js"></script>
	<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/codemirror/3.20.0/mode/xml/xml.min.js"></script>
	<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/codemirror/2.36.0/formatting.min.js"></script>
	<script src="/js/summernote.min.js"></script>
	<script src="/js/custom.js"></script>
	<script src="/js/custom_admin.js"></script>

<?php }?>

<?php }} ?>
