<?php /* Smarty version Smarty-3.1.17, created on 2014-04-18 16:44:47
         compiled from "S:\xampp\htdocs\hhmvc\public\themes\default\basic\head.tpl" */ ?>
<?php /*%%SmartyHeaderCode:175325351567fbdac43-12567882%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '950b861992989b6a845f7fad05f8d982948f7648' => 
    array (
      0 => 'S:\\xampp\\htdocs\\hhmvc\\public\\themes\\default\\basic\\head.tpl',
      1 => 1397819699,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '175325351567fbdac43-12567882',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'head' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_5351567fbfa047_44701516',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5351567fbfa047_44701516')) {function content_5351567fbfa047_44701516($_smarty_tpl) {?><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['head']->value['head']['description'];?>
">
    <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['head']->value['head']['keywords'];?>
">
    <title><?php echo $_smarty_tpl->tpl_vars['head']->value['head']['title'];?>
</title>
    <!-- Source Sans Pro -->
    <!-- Libre Baskerville copy font -->
   <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,900|Libre+Baskerville:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
<!-- 
    <link rel="stylesheet" href="/css/purecss.css">
    <link rel="stylesheet" href="/css/main-grid.css">
    <link rel="stylesheet" href="/css/layouts/marketing.css"> -->
    <?php if ($_SESSION['USER']['role']>0) {?>

        <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/codemirror/3.20.0/codemirror.min.css" />
        <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/codemirror/3.20.0/theme/monokai.min.css" />

        <link rel="stylesheet" href="/css/summernote.css">
        
    <?php }?>
    <!-- custom styles -->
    <link rel="stylesheet" href="/css/custom.css">



</head><?php }} ?>
