<!DOCTYPE html>  
 <html lang="en">  
 <head>  
 <meta http-equiv="content-type" content="text/html;charset=utf-8" />  
                <!-- page title block -->  
 <title>{% block name=title %}{% /block %}</title>  
                <!-- /end of page title block -->  
 <meta name="viewport" content="width=device-width, initial-scale=1.0">  
 <meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />  
                <!-- robots block -->  
      {% block name=robots %}{% /block %}  
                <!-- /end of robots block -->  
 <meta name="keywords" content="{% block name=meta %}{% /block %}">  
 <meta name="robots" content="all">  
 <meta name="revisit" content="1 day">  
                <!-- additional css block -->  
      {% block name=style %}  
 <style>  
 #player {  
  margin:0 auto;  
  float:none;  
 }  
 </style>  
      {% /block %}  
                <!-- end of additional css block -->  
                <!-- Optional javascript block -->  
      {% block name=jscript %}{% /block %}  
                <!-- /end of optional javascript block -->  
 <link href="http://{% $content.sitepath %}themes/default/css/bootstrap.css" rel="stylesheet">  
 <link href="http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">  
 <link href="http://{% $content.sitepath %}themes/default/css/bootstrap-responsive.css" rel="stylesheet">  
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->  
    <!--[if lt IE 9]>  
  <script src="../assets/js/html5shiv.js"></script>  
    <![endif]-->  
    <!-- Fav and touch icons -->  
   <link rel="apple-touch-icon-precomposed" sizes="144x144" href="http://{% $content.sitepath %}themes/default/ico/apple-touch-icon-144-precomposed.png">  
   <link rel="apple-touch-icon-precomposed" sizes="114x114" href="http://{% $content.sitepath %}themes/default/ico/apple-touch-icon-114-precomposed.png">  
   <link rel="apple-touch-icon-precomposed" sizes="72x72" href="http://{% $content.sitepath %}themes/default/ico/apple-touch-icon-72-precomposed.png">  
   <link rel="apple-touch-icon-precomposed" href="http://{% $content.sitepath %}themes/default/ico/apple-touch-icon-57-precomposed.png">  
   <link rel="shortcut icon" href="http://{% $content.sitepath %}themes/default/ico/favicon.png">  
    <!-- /end of Fav and touch icons -->  
    <!-- link to the theme style css file -->  
  <link href="http://{% $content.sitepath %}themes/default/css/green.css" rel="stylesheet">  
    <!-- /end of theme style css file -->  
    <!--[if gte IE 9]>  
  <style type="text/css">  
   .gradient {  
     filter: none;  
   }  
  </style>  
  <![endif]-->                 
 {% block name=style %}{% /block %}                 
                <!-- jquery code block -->   
 <script src="http://code.jquery.com/jquery-1.9.1.js"></script>  
 <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>  
                <!-- /end of jquery code block -->  
 <script>  
 $(function() {  
 $( "#videos" ).tabs();  
 });  
 </script>  
 <script>  
  function resizeCaller(){var a=new Array;for(i=0;i<iframeids.length;i++){if(document.getElementById)resizeIframe(iframeids[i]);if((document.all||document.getElementById)&&iframehide=="no"){var b=document.all?document.all[iframeids[i]]:document.getElementById(iframeids[i]);b.style.display="block"}}}function resizeIframe(a){var b=document.getElementById(a);if(b&&!window.opera){b.style.display="block";if(b.contentDocument&&b.contentDocument.body.offsetHeight)b.height=b.contentDocument.body.offsetHeight+FFextraHeight;else if(b.Document&&b.Document.body.scrollHeight)b.height=b.Document.body.scrollHeight;if(b.addEventListener)b.addEventListener("load",readjustIframe,false);else if(b.attachEvent){b.detachEvent("onload",readjustIframe);b.attachEvent("onload",readjustIframe)}}}function readjustIframe(a){var b=window.event?event:a;var c=b.currentTarget?b.currentTarget:b.srcElement;if(c)resizeIframe(c.id)}function loadThisVideo(a,b){if(document.getElementById)document.getElementById(a).src=b}var iframeids=["myframe"];var iframehide="yes";var getFFVersion=navigator.userAgent.substring(navigator.userAgent.indexOf("Firefox")).split("/")[1];var FFextraHeight=parseFloat(getFFVersion)>=.1?16:0;if(window.addEventListener)window.addEventListener("load",resizeCaller,false);else if(window.attachEvent)window.attachEvent("onload",resizeCaller);else window.onload=resizeCaller  
 </script>  
 </head>  
 <body>  
 <div class="navbar navbar-inverse navbar-fixed-top">  
    <div class="navbar-inner-green">  
     <div class="container">  
      <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">  
       <span class="icon-bar"></span>  
       <span class="icon-bar"></span>  
       <span class="icon-bar"></span>  
      </button>  
      <a class="brand" href="#">Lorenzo Alipio Demo Script</a>  
      <div class="nav-collapse collapse">  
       <ul class="nav">  
        <li class="active"><a href="index.php"><i class="icon-home icon-large" ></i> Main</a></li>  
        <li><a href="#about">About</a></li>  
        <li><a href="#contact">Contact</a></li>  
                 <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Media<b class="caret"></b></a>  
             <ul class="dropdown-menu">  
                               <li class="dropdown-submenu">  
                               <a tabindex="-1" href="#">Video</a>  
                               <ul class="dropdown-menu">  
              <li><a href="latest.php">Latest</a></li>  
              <li><a href="toprated.php">Top Rated</a></li>  
              <li><a href="mostviewed.php">Most Viewed</a></li>  
                                <li><a href="categories.php">Categories</a></li>  
                                </ul>  
                                </li>  
                               <li class="dropdown-submenu">  
                               <a tabindex="-1" href="#">Audio</a>  
                               <ul class="dropdown-menu">  
                               <li><a href="#">Latest</a></li>  
                               </ul>  
                               </li>  
                               <li class="dropdown-submenu">  
                               <a tabindex="-1" href="#">Photos</a>  
                               <ul class="dropdown-menu">  
                               <li><a href="#">Latest Photos</a></li>  
                               </ul>  
                               </li>  
                               <li class="dropdown-submenu">  
                               <a tabindex="-1" href="#">Blog</a>  
                               <ul class="dropdown-menu">  
                               <li><a href="#">Latest Entries</a></li>  
                               </ul>  
                               </li>  
             </ul>  
            </li>  
                 {% block name=accountmenu %}{% /block %}  
       </ul>  
                <form class="navbar-search pull-right" method="get" action="video.php">  
      <input type="text" name="q" class="search-query span2" placeholder="Search">  
     </form>  
      </div><!--/.nav-collapse -->  
     </div>  
    </div>  
   </div>  
  <div class="container">  
           {% block name=mtitle %}{% /block %}  
      <div class="row">  
      <div id="videos">    
       {% block name=page_tabmenu %}  
       <!-- page tab menu block -->  
       {% /block %}  
                <!-- featured begins -->  
 <div id="featured" class="span12 row-fluid">  
                {% block name=featured %}{% /block %}  
 </div>   
                <!-- latest begins -->  
 <div id="latest" class="span12 row-fluid">  
                {% block name=latest %}{% /block %}  
 </div>  
                <!-- mostviewed begins -->  
 <div id="mostviewed" class="span12 row-fluid">  
                {% block name=mostviewed %}{% /block %}  
 </div>  
 </div>  
 </div>  
                <!-- /end of tab content blocks -->  
                <!-- content blocks of all types -->  
 <div class="span12 row-fluid">  
                {% block name=thumb %}{% /block %}  
 </div>  
 <div class="span12 row-fluid">  
                {% block name=login %}{% /block %}  
 </div>  
 <div class="span12 row-fluid">  
                {% block name=general %}{% /block %}  
 </div>  
                <!-- show pagination here if needed -->  
 <div class="row">  
 <div class="span12 row-fluid">  
 <table width = "100%" ALIGN="center">  
 <tr>  
 <td align="center" ><div class='paginate'>  
                {% block name=paginate %}{% /block %}  
    </div>  
 </td></tr></table>  
 <!-- EOF pagination section -->  
 </div>  
 </div>  
  <div id="push"></div>  
 </div>  
 <div id="footer">  
    <div class="container">  
      <div class="row">  
        <div class="span12 row-fluid pagination-centered">  
          <div class="span6"><div class="bottombox text-left"><h1 class="footer">Lorenzo D. Alipio</h1> &copy; All rights reserved.  
 Powered by Lorenzo D. Alipio Framework. </div></div>  
          <div class="span3"><div class="bottombox"><h5 class="footer">Archives</h5></div></div>  
          <div class="span3"><div class="bottombox"><h5 class="footer">Social</h5>  
              <div class="social_icons">  
                <ul>  
                  <li><a href="#"><img src="http://{% $content.sitepath %}themes/default/social/blogger.png"></a></li>  
                  <li><a href="#"><img src="http://{% $content.sitepath %}themes/default/social/facebook.png"></a></li>  
                  <li><a href="#"><img src="http://{% $content.sitepath %}themes/default/social/youtube.png"></a></li>  
                  <li><a href="#"><img src="http://{% $content.sitepath %}themes/default/social/twitter.png"></a></li>  
                  <li><a href="#"><img src="http://{% $content.sitepath %}themes/default/social/digg.png"></a></li>  
                  <li><a href="#"><img src="http://{% $content.sitepath %}themes/default/social/stumbleupon.png"></a></li>  
                  <li><a href="#"><img src="http://{% $content.sitepath %}themes/default/social/vimeo.png"></a></li>  
                  <li><a href="#"><img src="http://{% $content.sitepath %}themes/default/social/rss.png"></a></li>  
                </ul></div>   
            </div></div>  
        <div class="spane12 row fluid">  
        <footer>  
                <!-- display copyright -->  
                {% block name=copyright %}{% /block %}   
 </footer>  
        </div>  
        </div>  
      </div>    
 </div>  
 </div>  
 </div>  
                <!-- can use this block for much needed javascript on page -->  
                {% block name=jscript1 %}{% /block %}  
   <script src="http://{% $content.sitepath %}themes/default/js/bootstrap-transition.js"></script>  
   <script src="http://{% $content.sitepath %}themes/default/js/bootstrap-alert.js"></script>  
   <script src="http://{% $content.sitepath %}themes/default/js/bootstrap-modal.js"></script>  
   <script src="http://{% $content.sitepath %}themes/default/js/bootstrap-dropdown.js"></script>  
   <script src="http://{% $content.sitepath %}themes/default/js/bootstrap-scrollspy.js"></script>  
   <script src="http://{% $content.sitepath %}themes/default/js/bootstrap-tab.js"></script>  
   <script src="http://{% $content.sitepath %}themes/default/js/bootstrap-tooltip.js"></script>  
   <script src="http://{% $content.sitepath %}themes/default/js/bootstrap-popover.js"></script>  
   <script src="http://{% $content.sitepath %}themes/default/js/bootstrap-button.js"></script>  
   <script src="http://{% $content.sitepath %}themes/default/js/bootstrap-collapse.js"></script>  
   <script src="http://{% $content.sitepath %}themes/default/js/bootstrap-carousel.js"></script>  
   <script src="http://{% $content.sitepath %}themes/default/js/bootstrap-typeahead.js"></script>  
                <!-- 2nd javascript block for javascript that needs to be written on the page -->  
                {% block name=jscript2 %}{% /block %}       
 </body>  
 </html>  