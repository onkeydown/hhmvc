{extends file="../index.tpl"}

{block name="header_002"}
<section class="featured postview">
<div class="container-fluid">
<div class="row">
<div class="col-md-4 col-md-offset-4">
<div class="align-center">
    <h4>
        Efforts - posts on current project
    </h4>
</div>
</div>
</div>
</div>
</section>
{/block}


{block name="content_001"}
	<section class="postview wrapper">
		{foreach $content AS $keys => $articles}

		<article class="efforts-post"> 

			<div class="container-fluid">
			<div class="row">
			<div class="col-md-12">          
			    {$articles['html']|html_entity_decode}
			</div>
			</div>
			</div>

		</article>

		{/foreach}
	</section>
{/block}

{block name="content_002"}    
{/block}

{block name="content_003"}
{/block}

{block name="footer"}
{/block}