{extends file="../index.tpl"}

{block name="header_002"}
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
{/block}

{block name="header_0011"}
{/block}

{block name="content_001"}

<section class="cms">
<div class="container-fluid">
<div class="row">
<div class="col-md-12">
        <div class="content">
        <div class="articles excerpt" id="new-article" data-id="new">

        {foreach $content AS $keys => $articles}
                
                <div class="article excerpt">
                    {include 'cms/tpl/cms_navi.tpl'}
                </div>

        {/foreach}
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

{block name="footer"}
{/block}