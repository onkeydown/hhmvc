<!doctype html>
<html lang="en">
    {include 'basic/head.tpl'}

<body>
{block name="header_001"}

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
            {if $smarty.session['USER']['role'] == 0 || !isset($smarty.session['USER']['role'])}
                {foreach $smarty.session['nav']['0'] AS $key => $value}
                    <li><a href="{$value}">{$key}</a></li>
                {/foreach}
             {else}
                {foreach $smarty.session['nav']['1'] AS $key => $value}
                    <li><a href="{$value}">{$key}</a></li>
                {/foreach}
             {/if}
            </ul>
        </div><!--/.navbar-collapse -->
    </div>
</div>
{/block}

{block name="header_0011"}
{/block}

{block name="header_002"}
<section class="featured start">
    <div class="container-fluid"> 
    <div class="row mar-bot40">
    <div class="col-md-6 col-md-offset-3">
    <div class="align-center">
        <div class="panel">
            <div class="spinner">
                <i class="fa fa-cog xxl resize"></i> 
            </div>
          
            {$content['content']['info_msg']}
          
            <div class="slogan wrapper">
                <a href="/member/subscribe" class="btn btn-primary btn-lg xxl"><i class="fa fa-beer"></i> Join now</a>
                <a href="/member/login" class="btn btn-default btn-lg xxl"><i class="fa fa-coffee"></i> Sign in</a>
                <a href="http://github.com/onkeydown" class="btn btn-default btn-lg xxl"><i class="fa fa-code"></i> github</a>
                <p class="subslogan">
                    {$content['content']['splash_msg']}
                </p>
                <h2 class="slogan">
                    {$content['content']['headline_h2']}
                </h2>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
</section>
{/block}

{block name="content_001"}
<section id="section-services" class="section pad-bot30 bg-white">
<div class="container-fluid"> 
<div class="row mar-bot40">
    <div class="col-lg-4" >
    <div class="align-center">
        <i class="fa fa-code fa-5x mar-bot20"></i>
        <h4 class="text-bold">{$content['content']['info_msg']}</h4>
        <p>Lorem ipsum dolor sit amet, mutat graeco volumus ad eam, singulis patrioque comprehensam nam no. 
        Mei cu dicat voluptaria volumus.
        </p>
    </div>
    </div>

    <div class="col-lg-4" >
    <div class="align-center">
        <i class="fa fa-terminal fa-5x mar-bot20"></i>
        <h4 class="text-bold">Responsive</h4>
        <p>Lorem ipsum dolor sit amet, mutat graeco volumus ad eam, singulis patrioque comprehensam nam no. 
        Mei cu dicat voluptaria volumus.
        </p>
    </div>
    </div>

    <div class="col-lg-4" >
    <div class="align-center">
        <i class="fa fa-bolt fa-5x mar-bot20"></i>
        <h4 class="text-bold">Customizable</h4>
        <p>Lorem ipsum dolor sit amet, mutat graeco volumus ad eam, singulis patrioque comprehensam nam no. 
        Mei cu dicat voluptaria volumus.
        </p>
    </div>
    </div>

</div>  
</div>
</section>
{/block}

{block name="content_002"}
<section id="testimonials" class="section bg-grey" data-stellar-background-ratio="0.5">
<div class="container-fluid">
<div class="row">               
<div class="col-lg-12">
<div class="align-center">
    <div class="testimonial pad-top40 pad-bot40 clearfix">
        <h5>
            Nunc velit risus, dapibus non interdum quis, suscipit nec dolor. Vivamus tempor tempus mauris vitae fermentum. In vitae nulla lacus. Sed sagittis tortor vel arcu sollicitudin nec tincidunt metus suscipit.Nunc velit risus, dapibus non interdum.
        </h5>
        <br/>
        <span class="author">&mdash; MIKE DOE <a href="#">www.siteurl.com</a></span>
    </div>

</div>
</div>
</div>  
</div>  
</section>
{/block}

{block name="content_003"}
<section id="section-about" class="section appear clearfix bg-grey">
<div class="container-fluid">

    <div class="row mar-bot40">
    <div class="col-md-offset-3 col-md-6">
    <div class="section-header">
        <h2 class="section-heading animated" data-animation="bounceInUp">Our Team</h2>
        <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet consectetur, adipisci velit, sed quia non numquam.</p>
    </div>
    </div>
    </div>

	
	<div class="row align-center mar-bot40">
	    <div class="col-md-3">
	    <div class="team-member">
	        <figure class="member-photo"><img src="img/team/member1.jpg" alt="" /></figure>
	        <div class="team-detail">
	            <h4>Jason Doe</h4>
	            <span>User experiences</span>
	        </div>
	    </div>
	    </div>
	    <div class="col-md-3">
	    <div class="team-member">
	        <figure class="member-photo"><img src="img/team/member2.jpg" alt="" /></figure>
	        <div class="team-detail">
	            <h4>Timothy Clark</h4>
	            <span>Web developer</span>
	        </div>
	    </div>
	    </div>
	    <div class="col-md-3">
	    <div class="team-member">
	        <figure class="member-photo"><img src="img/team/member3.jpg" alt="" /></figure>
	        <div class="team-detail">
	        <h4>Vicky Tan</h4>
	            <span>Web designer</span>
	        </div>
	    </div>
	    </div>
	    <div class="col-md-3">
	    <div class="team-member">
	        <figure class="member-photo"><img src="img/team/member4.jpg" alt="" /></figure>
	        <div class="team-detail">
	        <h4>Kevin Peterson</h4>
	            <span>UI designer</span>
	        </div>
	    </div>
	    </div>
	</div>
</div>
</section>
<!-- /about -->

<!-- spacer section:stats -->
<section id="parallax1" class=" section pad-top40 pad-bot40 bg-blue" data-stellar-background-ratio="0.5">
<div class="container-fluid">
<div class="align-center pad-top40 pad-bot40">
<blockquote class="bigquote color-white">Indoctum accusamus comprehensam</blockquote>
<p class="color-white">Bootstraptaste</p>
</div>
</div>  
</section>

<!-- section works -->
<section id="section-works" class="section appear clearfix bg-grey2">
<div class="container-fluid">

<div class="row mar-bot40">
<div class="col-md-offset-3 col-md-6">
<div class="section-header">
<h2 class="section-heading animated" data-animation="bounceInUp">Portfolio</h2>
<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet consectetur, adipisci velit, sed quia non numquam.</p>
</div>
</div>
</div>

<div class="row">
<nav id="filter" class="col-md-12 text-center">
<ul>
<li><a href="#" class="current btn-theme btn-small" data-filter="*">All</a></li>
<li><a href="#"  class="btn-theme btn-small" data-filter=".webdesign" >Web Design</a></li>
<li><a href="#"  class="btn-theme btn-small" data-filter=".photography">Photography</a></li>
<li ><a href="#" class="btn-theme btn-small" data-filter=".print">Print</a></li>
</ul>
</nav>
<div class="col-md-12">
<div class="row">
<div class="portfolio-items isotopeWrapper clearfix" id="3">

<article class="col-md-4 isotopeItem webdesign">
    <div class="portfolio-item">
        <img src="img/portfolio/img1.jpg" alt="" />
         <div class="portfolio-desc align-center">
            <div class="folio-info">
                <h5><a href="#">Portfolio name</a></h5>
                <a href="img/portfolio/img1.jpg" class="fancybox"><i class="fa fa-plus fa-2x"></i></a>
             </div>                                        
         </div>
    </div>
</article>

<article class="col-md-4 isotopeItem photography">
    <div class="portfolio-item">
        <img src="img/portfolio/img2.jpg" alt="" />
         <div class="portfolio-desc align-center">
            <div class="folio-info">
                <h5><a href="#">Portfolio name</a></h5>
                <a href="img/portfolio/img2.jpg" class="fancybox"><i class="fa fa-plus fa-2x"></i></a>
             </div>                                        
         </div>
    </div>
</article>


<article class="col-md-4 isotopeItem photography">
    <div class="portfolio-item">
        <img src="img/portfolio/img3.jpg" alt="" />
         <div class="portfolio-desc align-center">
            <div class="folio-info">
                <h5><a href="#">Portfolio name</a></h5>
                <a href="img/portfolio/img3.jpg" class="fancybox"><i class="fa fa-plus fa-2x"></i></a>
             </div>                                        
         </div>
    </div>
</article>

<article class="col-md-4 isotopeItem print">
    <div class="portfolio-item">
        <img src="img/portfolio/img4.jpg" alt="" />
         <div class="portfolio-desc align-center">
            <div class="folio-info">
                <h5><a href="#">Portfolio name</a></h5>
                <a href="img/portfolio/img4.jpg" class="fancybox"><i class="fa fa-plus fa-2x"></i></a>
             </div>                                        
         </div>
    </div>
</article>

<article class="col-md-4 isotopeItem photography">
    <div class="portfolio-item">
        <img src="img/portfolio/img5.jpg" alt="" />
         <div class="portfolio-desc align-center">
            <div class="folio-info">
                <h5><a href="#">Portfolio name</a></h5>
                <a href="img/portfolio/img5.jpg" class="fancybox"><i class="fa fa-plus fa-2x"></i></a>
             </div>                                        
         </div>
    </div>
</article>

<article class="col-md-4 isotopeItem webdesign">
    <div class="portfolio-item">
        <img src="img/portfolio/img6.jpg" alt="" />
         <div class="portfolio-desc align-center">
            <div class="folio-info">
                <h5><a href="#">Portfolio name</a></h5>
                <a href="img/portfolio/img6.jpg" class="fancybox"><i class="fa fa-plus fa-2x"></i></a>
             </div>                                        
         </div>
    </div>
</article>

<article class="col-md-4 isotopeItem print">
    <div class="portfolio-item">
        <img src="img/portfolio/img7.jpg" alt="" />
         <div class="portfolio-desc align-center">
            <div class="folio-info">
                <h5><a href="#">Portfolio name</a></h5>
                <a href="img/portfolio/img7.jpg" class="fancybox"><i class="fa fa-plus fa-2x"></i></a>
             </div>                                        
         </div>
    </div>
</article>

<article class="col-md-4 isotopeItem photography">
    <div class="portfolio-item">
        <img src="img/portfolio/img8.jpg" alt="" />
         <div class="portfolio-desc align-center">
            <div class="folio-info">
                <h5><a href="#">Portfolio name</a></h5>
                <a href="img/portfolio/img8.jpg" class="fancybox"><i class="fa fa-plus fa-2x"></i></a>
             </div>                                        
         </div>
    </div>
</article>

<article class="col-md-4 isotopeItem print">
    <div class="portfolio-item">
        <img src="img/portfolio/img9.jpg" alt="" />
         <div class="portfolio-desc align-center">
            <div class="folio-info">
                <h5><a href="#">Portfolio name</a></h5>
                <a href="img/portfolio/img9.jpg" class="fancybox"><i class="fa fa-plus fa-2x"></i></a>
             </div>                                        
         </div>
    </div>
</article>
</div>
        
</div>
     

</div>
</div>

</div>
</section>
<section id="parallax2" class="section parallax bg-grey" data-stellar-background-ratio="0.5">   
<div class="align-center pad-top40 pad-bot40">
<blockquote class="bigquote color-white">Indoctum accusamus comprehensam</blockquote>
<p class="color-white">Bootstraptaste</p>
</div>
</section>
{/block}

{block name="modal"}
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
{/block}

{block name="footer"}
    <div class="footer l-box is-center">
            {$content['footer']['nav']}
    </div>
{/block}

{include file="basic/script.tpl"}
</body>
</html>