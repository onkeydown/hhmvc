<?php /* Smarty version Smarty-3.1.17, created on 2014-04-18 11:41:34
         compiled from "S:\xampp\htdocs\hhmvc\public\themes\default\cms\efforts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:652153510b79e26b95-21633234%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bb73ae57f864a6206122b1d83c5571b3a78b02d1' => 
    array (
      0 => 'S:\\xampp\\htdocs\\hhmvc\\public\\themes\\default\\cms\\efforts.tpl',
      1 => 1397821291,
      2 => 'file',
    ),
    '55c271a55139c18ce353a434356ac2bbdb1dd57f' => 
    array (
      0 => 'S:\\xampp\\htdocs\\hhmvc\\public\\themes\\default\\index.tpl',
      1 => 1397819887,
      2 => 'file',
    ),
    '09e46a491c65935b60719dbb38c9b7f20f259c91' => 
    array (
      0 => 'S:\\xampp\\htdocs\\hhmvc\\public\\themes\\default\\cms\\tpl\\cms_navi.tpl',
      1 => 1397781514,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '652153510b79e26b95-21633234',
  'function' => 
  array (
  ),
  'cache_lifetime' => 3600,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_53510b7a0fba98_37461512',
  'variables' => 
  array (
    'value' => 0,
    'key' => 0,
    'content' => 1,
  ),
  'has_nocache_code' => true,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53510b7a0fba98_37461512')) {function content_53510b7a0fba98_37461512($_smarty_tpl) {?><!doctype html>
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






<section class="featured cms">
<div class="container-fluid">
<div class="row">
<div class="col-md-4 col-md-offset-4">
<div class="align-center">
    <h4 class="pTitle">
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
        <div class="articles excerpt" 
             id="new-article" 
             data-id="new"></div>
            <?php echo '/*%%SmartyNocache:652153510b79e26b95-21633234%%*/<?php  $_smarty_tpl->tpl_vars[\'articles\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'articles\']->_loop = false;
 $_smarty_tpl->tpl_vars[\'keys\'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars[\'content\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'articles\']->key => $_smarty_tpl->tpl_vars[\'articles\']->value) {
$_smarty_tpl->tpl_vars[\'articles\']->_loop = true;
 $_smarty_tpl->tpl_vars[\'keys\']->value = $_smarty_tpl->tpl_vars[\'articles\']->key;
?>/*/%%SmartyNocache:652153510b79e26b95-21633234%%*/';?>

                <div class="article excerpt">
                    <?php /*  Call merged included template "cms/tpl/cms_navi.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('cms/tpl/cms_navi.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0, '652153510b79e26b95-21633234');
content_53510f6e7350b2_53565142($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "cms/tpl/cms_navi.tpl" */?>
                </div>
            <?php echo '/*%%SmartyNocache:652153510b79e26b95-21633234%%*/<?php } ?>/*/%%SmartyNocache:652153510b79e26b95-21633234%%*/';?>

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





<?php echo $_smarty_tpl->getSubTemplate ("basic/script.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

</body>
</html><?php }} ?>
<?php /* Smarty version Smarty-3.1.17, created on 2014-04-18 11:41:34
         compiled from "S:\xampp\htdocs\hhmvc\public\themes\default\cms\tpl\cms_navi.tpl" */ ?>
<?php if ($_valid && !is_callable('content_53510f6e7350b2_53565142')) {function content_53510f6e7350b2_53565142($_smarty_tpl) {?><?php echo '/*%%SmartyNocache:652153510b79e26b95-21633234%%*/<?php $_smarty = $_smarty_tpl->smarty; if (!is_callable(\'smarty_modifier_replace\')) include \'S:\\\\xampp\\\\htdocs\\\\hhmvc\\\\plugins\\\\Smarty\\\\libs\\\\plugins\\\\modifier.replace.php\';
?>/*/%%SmartyNocache:652153510b79e26b95-21633234%%*/';?>
    <ul id="crud-buttons active-link" 
        class="btnWrapper iconButtons"
        data-target="txtWrapper"
        data-id="<?php echo '/*%%SmartyNocache:652153510b79e26b95-21633234%%*/<?php echo $_smarty_tpl->tpl_vars[\'articles\']->value[\'id\'];?>
/*/%%SmartyNocache:652153510b79e26b95-21633234%%*/';?>
">
        <?php echo '/*%%SmartyNocache:652153510b79e26b95-21633234%%*/<?php  $_smarty_tpl->tpl_vars[\'controller\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'controller\']->_loop = false;
 $_smarty_tpl->tpl_vars[\'href\'] = new Smarty_Variable;
 $_from = $_SESSION[\'crud\']; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'controller\']->key => $_smarty_tpl->tpl_vars[\'controller\']->value) {
$_smarty_tpl->tpl_vars[\'controller\']->_loop = true;
 $_smarty_tpl->tpl_vars[\'href\']->value = $_smarty_tpl->tpl_vars[\'controller\']->key;
?>/*/%%SmartyNocache:652153510b79e26b95-21633234%%*/';?>

            <li>
                <a  href="<?php echo '/*%%SmartyNocache:652153510b79e26b95-21633234%%*/<?php echo $_smarty_tpl->tpl_vars[\'articles\']->value[\'link_url\'];?>
/*/%%SmartyNocache:652153510b79e26b95-21633234%%*/';?>
/<?php echo '/*%%SmartyNocache:652153510b79e26b95-21633234%%*/<?php echo $_smarty_tpl->tpl_vars[\'href\']->value;?>
/*/%%SmartyNocache:652153510b79e26b95-21633234%%*/';?>
"
                    id = "<?php echo '/*%%SmartyNocache:652153510b79e26b95-21633234%%*/<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars[\'articles\']->value[\'artikel_id\']," ",\'\');?>
/*/%%SmartyNocache:652153510b79e26b95-21633234%%*/';?>
_<?php echo '/*%%SmartyNocache:652153510b79e26b95-21633234%%*/<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars[\'controller\']->value,\'/\',\'\');?>
/*/%%SmartyNocache:652153510b79e26b95-21633234%%*/';?>
"
                    data-id="<?php echo '/*%%SmartyNocache:652153510b79e26b95-21633234%%*/<?php echo $_smarty_tpl->tpl_vars[\'articles\']->value[\'artikel_id\'];?>
/*/%%SmartyNocache:652153510b79e26b95-21633234%%*/';?>
"
                    data-tid="tid_<?php echo '/*%%SmartyNocache:652153510b79e26b95-21633234%%*/<?php echo $_smarty_tpl->tpl_vars[\'articles\']->value[\'id\'];?>
/*/%%SmartyNocache:652153510b79e26b95-21633234%%*/';?>
"
                    data-pid="pid_<?php echo '/*%%SmartyNocache:652153510b79e26b95-21633234%%*/<?php echo $_smarty_tpl->tpl_vars[\'articles\']->value[\'id\'];?>
/*/%%SmartyNocache:652153510b79e26b95-21633234%%*/';?>
"
                    data-aid="<?php echo '/*%%SmartyNocache:652153510b79e26b95-21633234%%*/<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars[\'controller\']->value,\'/\',\'\');?>
/*/%%SmartyNocache:652153510b79e26b95-21633234%%*/';?>
"
                    data-url="<?php echo '/*%%SmartyNocache:652153510b79e26b95-21633234%%*/<?php echo $_smarty_tpl->tpl_vars[\'articles\']->value[\'ajax_url\'];?>
/*/%%SmartyNocache:652153510b79e26b95-21633234%%*/';?>
/<?php echo '/*%%SmartyNocache:652153510b79e26b95-21633234%%*/<?php echo $_smarty_tpl->tpl_vars[\'href\']->value;?>
/*/%%SmartyNocache:652153510b79e26b95-21633234%%*/';?>
"
                    data-status="<?php echo '/*%%SmartyNocache:652153510b79e26b95-21633234%%*/<?php echo $_smarty_tpl->tpl_vars[\'articles\']->value[\'status\'];?>
/*/%%SmartyNocache:652153510b79e26b95-21633234%%*/';?>
"
                    data-toggle="tooltip"
                    data-placement="bottom"
                    title="<?php echo '/*%%SmartyNocache:652153510b79e26b95-21633234%%*/<?php echo $_smarty_tpl->tpl_vars[\'href\']->value;?>
/*/%%SmartyNocache:652153510b79e26b95-21633234%%*/';?>
"
                    data-placement="left" 
                    data-original-title="[$href}"
                    class="ajaxReq fa
                        <?php echo '/*%%SmartyNocache:652153510b79e26b95-21633234%%*/<?php if ($_smarty_tpl->tpl_vars[\'articles\']->value[\'status\']==0&&$_smarty_tpl->tpl_vars[\'href\']->value=="online") {?>/*/%%SmartyNocache:652153510b79e26b95-21633234%%*/';?>

                            fa-offline
                        <?php echo '/*%%SmartyNocache:652153510b79e26b95-21633234%%*/<?php } elseif ($_smarty_tpl->tpl_vars[\'articles\']->value[\'status\']==1&&$_smarty_tpl->tpl_vars[\'href\']->value=="online") {?>/*/%%SmartyNocache:652153510b79e26b95-21633234%%*/';?>

                            fa-online
                        <?php echo '/*%%SmartyNocache:652153510b79e26b95-21633234%%*/<?php } else { ?>/*/%%SmartyNocache:652153510b79e26b95-21633234%%*/';?>

                            fa-<?php echo '/*%%SmartyNocache:652153510b79e26b95-21633234%%*/<?php echo $_smarty_tpl->tpl_vars[\'href\']->value;?>
/*/%%SmartyNocache:652153510b79e26b95-21633234%%*/';?>

                        <?php echo '/*%%SmartyNocache:652153510b79e26b95-21633234%%*/<?php }?>/*/%%SmartyNocache:652153510b79e26b95-21633234%%*/';?>
 hhmvc-tooltip btn btn-default btn-sm btn-small dropdown-toggle">
                        <span>
                            <?php echo '/*%%SmartyNocache:652153510b79e26b95-21633234%%*/<?php echo $_smarty_tpl->tpl_vars[\'href\']->value;?>
/*/%%SmartyNocache:652153510b79e26b95-21633234%%*/';?>

                        </span>
                    </a>
            </li>   
        <?php echo '/*%%SmartyNocache:652153510b79e26b95-21633234%%*/<?php } ?>/*/%%SmartyNocache:652153510b79e26b95-21633234%%*/';?>

        </ul>

<div class="articles excerpt" id="pid_<?php echo '/*%%SmartyNocache:652153510b79e26b95-21633234%%*/<?php echo $_smarty_tpl->tpl_vars[\'articles\']->value[\'id\'];?>
/*/%%SmartyNocache:652153510b79e26b95-21633234%%*/';?>
" data-id="<?php echo '/*%%SmartyNocache:652153510b79e26b95-21633234%%*/<?php echo $_smarty_tpl->tpl_vars[\'articles\']->value[\'id\'];?>
/*/%%SmartyNocache:652153510b79e26b95-21633234%%*/';?>
"><div id="tid_<?php echo '/*%%SmartyNocache:652153510b79e26b95-21633234%%*/<?php echo $_smarty_tpl->tpl_vars[\'articles\']->value[\'id\'];?>
/*/%%SmartyNocache:652153510b79e26b95-21633234%%*/';?>
_data" data-id="tid_<?php echo '/*%%SmartyNocache:652153510b79e26b95-21633234%%*/<?php echo $_smarty_tpl->tpl_vars[\'articles\']->value[\'id\'];?>
/*/%%SmartyNocache:652153510b79e26b95-21633234%%*/';?>
" ><input type="hidden" class="codeArea" data-field="id" data-value="<?php echo '/*%%SmartyNocache:652153510b79e26b95-21633234%%*/<?php echo $_smarty_tpl->tpl_vars[\'articles\']->value[\'id\'];?>
/*/%%SmartyNocache:652153510b79e26b95-21633234%%*/';?>
"><input type="hidden" class="codeArea" data-field="artikel_id" data-value="<?php echo '/*%%SmartyNocache:652153510b79e26b95-21633234%%*/<?php echo $_smarty_tpl->tpl_vars[\'articles\']->value[\'artikel_id\'];?>
/*/%%SmartyNocache:652153510b79e26b95-21633234%%*/';?>
"><input type="hidden" class="codeArea" data-field="parent_id" data-value="<?php echo '/*%%SmartyNocache:652153510b79e26b95-21633234%%*/<?php echo $_smarty_tpl->tpl_vars[\'articles\']->value[\'parent_id\'];?>
/*/%%SmartyNocache:652153510b79e26b95-21633234%%*/';?>
"><input type="hidden" class="codeArea" data-field="link_id" data-value="<?php echo '/*%%SmartyNocache:652153510b79e26b95-21633234%%*/<?php echo $_smarty_tpl->tpl_vars[\'articles\']->value[\'link_id\'];?>
/*/%%SmartyNocache:652153510b79e26b95-21633234%%*/';?>
"><input type="hidden" class="codeArea" data-field="subnavi" data-value="<?php echo '/*%%SmartyNocache:652153510b79e26b95-21633234%%*/<?php echo $_smarty_tpl->tpl_vars[\'articles\']->value[\'subnavi\'];?>
/*/%%SmartyNocache:652153510b79e26b95-21633234%%*/';?>
"><input type="hidden" class="codeArea" data-field="categories" data-value="<?php echo '/*%%SmartyNocache:652153510b79e26b95-21633234%%*/<?php echo $_smarty_tpl->tpl_vars[\'articles\']->value[\'categories\'];?>
/*/%%SmartyNocache:652153510b79e26b95-21633234%%*/';?>
"><input type="hidden" class="codeArea" data-field="excerpt" data-value="<?php echo '/*%%SmartyNocache:652153510b79e26b95-21633234%%*/<?php echo $_smarty_tpl->tpl_vars[\'articles\']->value[\'excerpt\'];?>
/*/%%SmartyNocache:652153510b79e26b95-21633234%%*/';?>
"><input type="hidden" class="codeArea" data-field="rating" data-value="<?php echo '/*%%SmartyNocache:652153510b79e26b95-21633234%%*/<?php echo $_smarty_tpl->tpl_vars[\'articles\']->value[\'rating\'];?>
/*/%%SmartyNocache:652153510b79e26b95-21633234%%*/';?>
"><input type="hidden" class="codeArea" data-field="footer" data-value="<?php echo '/*%%SmartyNocache:652153510b79e26b95-21633234%%*/<?php echo $_smarty_tpl->tpl_vars[\'articles\']->value[\'footer\'];?>
/*/%%SmartyNocache:652153510b79e26b95-21633234%%*/';?>
"><input type="hidden" class="codeArea" data-field="sidebar" data-value="<?php echo '/*%%SmartyNocache:652153510b79e26b95-21633234%%*/<?php echo $_smarty_tpl->tpl_vars[\'articles\']->value[\'sidebar\'];?>
/*/%%SmartyNocache:652153510b79e26b95-21633234%%*/';?>
"><input type="hidden" class="codeArea" data-field="keywords" data-value="<?php echo '/*%%SmartyNocache:652153510b79e26b95-21633234%%*/<?php echo $_smarty_tpl->tpl_vars[\'articles\']->value[\'keywords\'];?>
/*/%%SmartyNocache:652153510b79e26b95-21633234%%*/';?>
"><input type="hidden" class="codeArea" data-field="init_date" data-value="<?php echo '/*%%SmartyNocache:652153510b79e26b95-21633234%%*/<?php echo $_smarty_tpl->tpl_vars[\'articles\']->value[\'init_date\'];?>
/*/%%SmartyNocache:652153510b79e26b95-21633234%%*/';?>
"><input type="hidden" class="codeArea" data-field="edit_date" data-value="<?php echo '/*%%SmartyNocache:652153510b79e26b95-21633234%%*/<?php echo $_smarty_tpl->tpl_vars[\'articles\']->value[\'edit_date\'];?>
/*/%%SmartyNocache:652153510b79e26b95-21633234%%*/';?>
"><input type="hidden" class="codeArea" data-field="link_url" data-value="<?php echo '/*%%SmartyNocache:652153510b79e26b95-21633234%%*/<?php echo $_smarty_tpl->tpl_vars[\'articles\']->value[\'link_url\'];?>
/*/%%SmartyNocache:652153510b79e26b95-21633234%%*/';?>
"><input type="hidden" class="codeArea" data-field="ajax_url" data-value="<?php echo '/*%%SmartyNocache:652153510b79e26b95-21633234%%*/<?php echo $_smarty_tpl->tpl_vars[\'articles\']->value[\'ajax_url\'];?>
/*/%%SmartyNocache:652153510b79e26b95-21633234%%*/';?>
"><input type="hidden" class="codeArea" data-field="user_id" data-value="<?php echo '/*%%SmartyNocache:652153510b79e26b95-21633234%%*/<?php echo $_smarty_tpl->tpl_vars[\'articles\']->value[\'user_id\'];?>
/*/%%SmartyNocache:652153510b79e26b95-21633234%%*/';?>
"><input type="hidden" class="codeArea" data-field="status" data-value="<?php echo '/*%%SmartyNocache:652153510b79e26b95-21633234%%*/<?php echo $_smarty_tpl->tpl_vars[\'articles\']->value[\'status\'];?>
/*/%%SmartyNocache:652153510b79e26b95-21633234%%*/';?>
"></div><div id="tid_<?php echo '/*%%SmartyNocache:652153510b79e26b95-21633234%%*/<?php echo $_smarty_tpl->tpl_vars[\'articles\']->value[\'id\'];?>
/*/%%SmartyNocache:652153510b79e26b95-21633234%%*/';?>
" data-id="tid_<?php echo '/*%%SmartyNocache:652153510b79e26b95-21633234%%*/<?php echo $_smarty_tpl->tpl_vars[\'articles\']->value[\'id\'];?>
/*/%%SmartyNocache:652153510b79e26b95-21633234%%*/';?>
" ><?php echo '/*%%SmartyNocache:652153510b79e26b95-21633234%%*/<?php echo html_entity_decode($_smarty_tpl->tpl_vars[\'articles\']->value[\'html\']);?>
/*/%%SmartyNocache:652153510b79e26b95-21633234%%*/';?>

        </div>
</div>
<?php }} ?>
