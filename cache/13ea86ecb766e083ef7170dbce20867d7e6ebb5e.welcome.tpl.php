<?php /*%%SmartyHeaderCode:722853510c0c108c06-31007106%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '13ea86ecb766e083ef7170dbce20867d7e6ebb5e' => 
    array (
      0 => 'S:\\xampp\\htdocs\\hhmvc\\public\\themes\\default\\users\\welcome.tpl',
      1 => 1397815889,
      2 => 'file',
    ),
    '55c271a55139c18ce353a434356ac2bbdb1dd57f' => 
    array (
      0 => 'S:\\xampp\\htdocs\\hhmvc\\public\\themes\\default\\index.tpl',
      1 => 1397819887,
      2 => 'file',
    ),
    '950b861992989b6a845f7fad05f8d982948f7648' => 
    array (
      0 => 'S:\\xampp\\htdocs\\hhmvc\\public\\themes\\default\\basic\\head.tpl',
      1 => 1397819699,
      2 => 'file',
    ),
    '159dc58c497ecaee04b7a662fd77777e382c70fe' => 
    array (
      0 => 'S:\\xampp\\htdocs\\hhmvc\\public\\themes\\default\\basic\\script.tpl',
      1 => 1397819748,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '722853510c0c108c06-31007106',
  'variables' => 
  array (
    'value' => 0,
    'key' => 0,
    'content' => 1,
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_53510c0c391395_12081491',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53510c0c391395_12081491')) {function content_53510c0c391395_12081491($_smarty_tpl) {?><!doctype html>
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
    
        <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/codemirror/3.20.0/codemirror.min.css" />
        <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/codemirror/3.20.0/theme/monokai.min.css" />

        <link rel="stylesheet" href="/css/summernote.css">
        
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
            <ul class="nav navbar-nav nav-pills" data-0="margin-top:20px;" data-300="margin-top:5px;">
                                                <li><a href="/member/profil">Profil</a></li>
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
<div class="col-md-6 col-md-offset-3">
<div class="align-center">
    <h2><?php echo $_smarty_tpl->tpl_vars['content']->value['content']['headline_h2'];?>
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
    <h2>
    <i class="fa fa-quote-left"></i> <?php echo $_smarty_tpl->tpl_vars['content']->value['content']['info_msg'];?>

    </h2>
    <div class="avatar img-circle"><i class="fa fa-user"></i></div>
    <p>
    	You are logged in |
		user: sadmin (role: 2)<br/>
		last visit: 2014-04-06 16:57:22 |
		e-mail: sadmin@ewrwer.de - 
		
		<a href="/user/profile">edit Profile</a>

	</p>
    <div class="subslogan">
        <h5><?php echo $_smarty_tpl->tpl_vars['content']->value['content']['splash_msg'];?>
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
            <?php echo $_smarty_tpl->tpl_vars['content']->value['footer']['nav'];?>

    </div>


<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<!--// wysiwyg Editor / summernote-->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script> 


	<!--// Hightlight Code / CodeMirror-->
	<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/codemirror/3.20.0/codemirror.min.js"></script>
	<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/codemirror/3.20.0/mode/xml/xml.min.js"></script>
	<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/codemirror/2.36.0/formatting.min.js"></script>
	<script src="/js/summernote.min.js"></script>
	<script src="/js/custom.js"></script>
	<script src="/js/custom_admin.js"></script>



</body>
</html><?php }} ?>
