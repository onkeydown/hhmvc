<?php /*%%SmartyHeaderCode:3354535062b38e70a0-99767683%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bb73ae57f864a6206122b1d83c5571b3a78b02d1' => 
    array (
      0 => 'S:\\xampp\\htdocs\\hhmvc\\public\\themes\\default\\cms\\efforts.tpl',
      1 => 1397012759,
      2 => 'file',
    ),
    '55c271a55139c18ce353a434356ac2bbdb1dd57f' => 
    array (
      0 => 'S:\\xampp\\htdocs\\hhmvc\\public\\themes\\default\\index.tpl',
      1 => 1397774988,
      2 => 'file',
    ),
    '09e46a491c65935b60719dbb38c9b7f20f259c91' => 
    array (
      0 => 'S:\\xampp\\htdocs\\hhmvc\\public\\themes\\default\\cms\\tpl\\cms_navi.tpl',
      1 => 1397016880,
      2 => 'file',
    ),
    '950b861992989b6a845f7fad05f8d982948f7648' => 
    array (
      0 => 'S:\\xampp\\htdocs\\hhmvc\\public\\themes\\default\\basic\\head.tpl',
      1 => 1396931251,
      2 => 'file',
    ),
    '159dc58c497ecaee04b7a662fd77777e382c70fe' => 
    array (
      0 => 'S:\\xampp\\htdocs\\hhmvc\\public\\themes\\default\\basic\\script.tpl',
      1 => 1396909498,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3354535062b38e70a0-99767683',
  'variables' => 
  array (
    'value' => 0,
    'key' => 0,
    'content' => 1,
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_535062b3ebb4f0_59484090',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_535062b3ebb4f0_59484090')) {function content_535062b3ebb4f0_59484090($_smarty_tpl) {?><!doctype html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="description" content="">
    <title></title>
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
        <!-- custom styles -->
    <link rel="stylesheet" href="/css/custom.css">



</head>

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
            <ul class="nav navbar-nav nav-pills" data-0="margin-top:20px;" data-300="margin-top:5px;">	                                        <li><a href="/member/profil">Profil</a></li>
                                    <li><a href="/users/logout">Logout</a></li>
                                    <li><a href="/cms/efforts">Efforts</a></li>
                                    <li><a href="/cms/blog">Blog</a></li>
                                    <li><a href="/cms/snippet">Snippet</a></li>
                                         </ul>
        </div><!--/.navbar-collapse -->
    </div>
</div>






<section class="featured cms">
<div class="container-fluid">
<div class="row">
<div class="col-md-4 col-md-offset-4">
<div class="align-center">
    <h4>
        CRUD for efforts
    </h4>
</div>
</div>
</div>
</div>
</section>




<section class="cms">
<div class="container-fluid">
<div class="row">
<div class="col-md-12">
        <div class="content">
        <div class="articles excerpt" id="new-article" data-id="new">

        <?php  $_smarty_tpl->tpl_vars['articles'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['articles']->_loop = false;
 $_smarty_tpl->tpl_vars['keys'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['content']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['articles']->key => $_smarty_tpl->tpl_vars['articles']->value) {
$_smarty_tpl->tpl_vars['articles']->_loop = true;
 $_smarty_tpl->tpl_vars['keys']->value = $_smarty_tpl->tpl_vars['articles']->key;
?>
                
                <div class="article excerpt">
                    <?php $_smarty = $_smarty_tpl->smarty; if (!is_callable('smarty_modifier_replace')) include 'S:\\xampp\\htdocs\\hhmvc\\plugins\\Smarty\\libs\\plugins\\modifier.replace.php';
?>    <ul id="crud-buttons active-link" 
        class="btnWrapper iconButtons"
        data-target="txtWrapper"
        data-id="<?php echo $_smarty_tpl->tpl_vars['articles']->value['id'];?>
">
        <?php  $_smarty_tpl->tpl_vars['controller'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['controller']->_loop = false;
 $_smarty_tpl->tpl_vars['href'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['session']->value['crud']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['controller']->key => $_smarty_tpl->tpl_vars['controller']->value) {
$_smarty_tpl->tpl_vars['controller']->_loop = true;
 $_smarty_tpl->tpl_vars['href']->value = $_smarty_tpl->tpl_vars['controller']->key;
?>
            <li>
                <a  href="<?php echo $_smarty_tpl->tpl_vars['articles']->value['link_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
"
                    id = "<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['articles']->value['artikel_id']," ",'');?>
_<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['controller']->value,'/','');?>
"
                    data-id="<?php echo $_smarty_tpl->tpl_vars['articles']->value['artikel_id'];?>
"
                    data-tid="tid_<?php echo $_smarty_tpl->tpl_vars['articles']->value['id'];?>
"
                    data-pid="pid_<?php echo $_smarty_tpl->tpl_vars['articles']->value['id'];?>
"
                    data-aid="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['controller']->value,'/','');?>
"
                    data-url="<?php echo $_smarty_tpl->tpl_vars['articles']->value['ajax_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
"
                    data-status="<?php echo $_smarty_tpl->tpl_vars['articles']->value['status'];?>
"
                    data-toggle="tooltip"
                    data-placement="bottom"
                    title="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
"
                    data-placement="left" 
                    data-original-title="[$href}"
                    class="ajaxReq fa
                        <?php if ($_smarty_tpl->tpl_vars['articles']->value['status']==0&&$_smarty_tpl->tpl_vars['href']->value=="online") {?>
                            fa-offline
                        <?php } elseif ($_smarty_tpl->tpl_vars['articles']->value['status']==1&&$_smarty_tpl->tpl_vars['href']->value=="online") {?>
                            fa-online
                        <?php } else { ?>
                            fa-<?php echo $_smarty_tpl->tpl_vars['href']->value;?>

                        <?php }?> hhmvc-tooltip btn btn-default btn-sm btn-small dropdown-toggle">
                        <span>
                            <?php echo $_smarty_tpl->tpl_vars['href']->value;?>

                        </span>
                    </a>
            </li>   
        <?php } ?>
        </ul>

<div class="articles excerpt" id="pid_<?php echo $_smarty_tpl->tpl_vars['articles']->value['id'];?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['articles']->value['id'];?>
"><div id="tid_<?php echo $_smarty_tpl->tpl_vars['articles']->value['id'];?>
_data" data-id="tid_<?php echo $_smarty_tpl->tpl_vars['articles']->value['id'];?>
" ><input type="hidden" class="codeArea" data-field="id" data-value="<?php echo $_smarty_tpl->tpl_vars['articles']->value['id'];?>
"><input type="hidden" class="codeArea" data-field="artikel_id" data-value="<?php echo $_smarty_tpl->tpl_vars['articles']->value['artikel_id'];?>
"><input type="hidden" class="codeArea" data-field="parent_id" data-value="<?php echo $_smarty_tpl->tpl_vars['articles']->value['parent_id'];?>
"><input type="hidden" class="codeArea" data-field="link_id" data-value="<?php echo $_smarty_tpl->tpl_vars['articles']->value['link_id'];?>
"><input type="hidden" class="codeArea" data-field="subnavi" data-value="<?php echo $_smarty_tpl->tpl_vars['articles']->value['subnavi'];?>
"><input type="hidden" class="codeArea" data-field="categories" data-value="<?php echo $_smarty_tpl->tpl_vars['articles']->value['categories'];?>
"><input type="hidden" class="codeArea" data-field="excerpt" data-value="<?php echo $_smarty_tpl->tpl_vars['articles']->value['excerpt'];?>
"><input type="hidden" class="codeArea" data-field="rating" data-value="<?php echo $_smarty_tpl->tpl_vars['articles']->value['rating'];?>
"><input type="hidden" class="codeArea" data-field="footer" data-value="<?php echo $_smarty_tpl->tpl_vars['articles']->value['footer'];?>
"><input type="hidden" class="codeArea" data-field="sidebar" data-value="<?php echo $_smarty_tpl->tpl_vars['articles']->value['sidebar'];?>
"><input type="hidden" class="codeArea" data-field="keywords" data-value="<?php echo $_smarty_tpl->tpl_vars['articles']->value['keywords'];?>
"><input type="hidden" class="codeArea" data-field="init_date" data-value="<?php echo $_smarty_tpl->tpl_vars['articles']->value['init_date'];?>
"><input type="hidden" class="codeArea" data-field="edit_date" data-value="<?php echo $_smarty_tpl->tpl_vars['articles']->value['edit_date'];?>
"><input type="hidden" class="codeArea" data-field="link_url" data-value="<?php echo $_smarty_tpl->tpl_vars['articles']->value['link_url'];?>
"><input type="hidden" class="codeArea" data-field="ajax_url" data-value="<?php echo $_smarty_tpl->tpl_vars['articles']->value['ajax_url'];?>
"><input type="hidden" class="codeArea" data-field="user_id" data-value="<?php echo $_smarty_tpl->tpl_vars['articles']->value['user_id'];?>
"><input type="hidden" class="codeArea" data-field="status" data-value="<?php echo $_smarty_tpl->tpl_vars['articles']->value['status'];?>
"></div><div id="tid_<?php echo $_smarty_tpl->tpl_vars['articles']->value['id'];?>
" data-id="tid_<?php echo $_smarty_tpl->tpl_vars['articles']->value['id'];?>
" ><?php echo html_entity_decode($_smarty_tpl->tpl_vars['articles']->value['html']);?>

        </div>
</div>
                </div>

        <?php } ?>
        </div>
        </div>
</div>
</div>
</div>        
</section>












<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<!--// wysiwyg Editor / summernote-->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script> 



</body>
</html><?php }} ?>
