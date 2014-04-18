<?php /* Smarty version Smarty-3.1.17, created on 2014-04-18 11:24:42
         compiled from "S:\xampp\htdocs\hhmvc\public\themes\default\basic\script.tpl" */ ?>
<?php /*%%SmartyHeaderCode:399053510b7a3ed9c2-21375038%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '159dc58c497ecaee04b7a662fd77777e382c70fe' => 
    array (
      0 => 'S:\\xampp\\htdocs\\hhmvc\\public\\themes\\default\\basic\\script.tpl',
      1 => 1397819748,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '399053510b7a3ed9c2-21375038',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_53510b7a3f9540_52465708',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53510b7a3f9540_52465708')) {function content_53510b7a3f9540_52465708($_smarty_tpl) {?><script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<!--// wysiwyg Editor / summernote-->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script> 

<?php if ($_SESSION['USER']['role']>0) {?>

	<!--// Hightlight Code / CodeMirror-->
	<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/codemirror/3.20.0/codemirror.min.js"></script>
	<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/codemirror/3.20.0/mode/xml/xml.min.js"></script>
	<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/codemirror/2.36.0/formatting.min.js"></script>
	<script src="/js/summernote.min.js"></script>
	<script src="/js/custom.js"></script>
	<script src="/js/custom_admin.js"></script>

<?php }?>

<?php }} ?>
