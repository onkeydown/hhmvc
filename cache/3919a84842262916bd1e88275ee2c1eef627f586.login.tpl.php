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
  'nocache_hash' => '3231053506284e8da77-10767334',
  'variables' => 
  array (
    'value' => 0,
    'key' => 0,
    'content' => 1,
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_53506285c4f9f3_22714971',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53506285c4f9f3_22714971')) {function content_53506285c4f9f3_22714971($_smarty_tpl) {?><!doctype html>
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
            <ul class="nav navbar-nav nav-pills" data-0="margin-top:20px;" data-300="margin-top:5px;">	                                        <li><a href="/blog">Blog</a></li>
                                    <li><a href="/efforts">Efforts</a></li>
                                    <li><a href="/member/subscribe">Join</a></li>
                                    <li><a href="/member/login">Login</a></li>
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
            <?php echo $_smarty_tpl->tpl_vars['content']->value['footer']['nav'];?>

    </div>


<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<!--// wysiwyg Editor / summernote-->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script> 



</body>
</html><?php }} ?>
