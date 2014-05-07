{extends file="index.tpl"}

{block name="header_002"}
<section class="featured cms">
<div class="container-fluid">
<div class="row">
<div class="col-md-6 col-md-offset-3">
<div class="align-center">
    <h5>{$content['content']['headline_h2']}</h5>
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
    <h2>
    	{$content['content']['welcome_msg']}
    </h2>
    <h5>
       <span class="userName">
       		<i class="fa fa-desktop">&nbsp;</i>{$content['content']['user_name']}
       		<em>logged in as: <span>editor</span> / e-mail: <span>{$smarty.session.USER.user_email}</span> &ndash;</em>
       </span>
     <!--    <a href="/user/profile" class="btn btn-primary"><i class="fa fa-edit" style="font-size:14px"></i> Profile</a> -->
    </h5>
    <div class="avatar img-circle" data-toggle="tooltip" data-placement="top" title="click to upload Avator or drop avatar here"><i class="fa fa-user"></i></div>
    <p>
       <time class="timeTag" itemprop="dateCreated" datetime="{$smarty.session.USER.lastseen}"> last login: {$smarty.session.USER.lastseen}</time>
	</p>
    <div class="subslogan btn-group">
        <h6>{$content['content']['splash_msg']}</h6>
	    <a href="#" class="btn btn-default hhmvc-Button">
	  		<i class="fa fa-thumbs-up"></i> Add Content
	    </a>
	    <a href="/user/profile" class="btn btn-default hhmvc-Button"><i class="fa fa-edit" style="font-size:14px"></i> Adjust Profile</a>
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