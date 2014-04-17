{extends file="index.tpl"}

{block name="header_002"}
<section class="featured cms">
<div class="container-fluid">
<div class="row">
<div class="col-md-6 col-md-offset-3">
<div class="align-center">
    <h2>{$content['content']['headline_h2']}</h2>
</div>
</div>
</div>
</div>
</section>
{/block}

{block name="content_001"}
<section class="cms welcomeMember">
<div class="container-fluid">
<div class="row">
<div class="col-md-6 col-md-offset-3 panel">
<div class="align-center">
    <h4>
    <i class="fa fa-quote-left"></i> {$content['content']['info_msg']}
    </h4>
    <p>
    	{$smarty.session.USER.headline_h2} |
		user: {$smarty.session.USER.user_name} (role: {$smarty.session.USER.role})<br/>
		last visit: {$smarty.session.USER.lastseen} |
		e-mail: {$smarty.session.USER.user_email} - 
		
		<a href="/user/profile">edit Profile</a>

	</p>
    <div class="subslogan">
        <h5>{$content['content']['splash_msg']}</h5>
	    <a href="#" class="btn btn-primary hhmvc-Button">
	  		<i class="fa fa-thumbs-up"></i> Submit
	    </a>
    </div>
</div>
</div>
</div>
</div>
</section>
{/block}

{block name="content_002"}

{/block}

{block name="content_003"}

{/block}