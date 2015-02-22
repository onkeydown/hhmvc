<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{$head['head']['description']}">
    <meta name="description" content="{$head['head']['keywords']}">
    <title>{$head['head']['title']}</title>
    <link rel="stylesheet" href="/css/purecss.css">
    <link rel="stylesheet" href="/css/main-grid.css">
    <link rel="stylesheet" href="/css/layouts/marketing.css">
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">

    <link rel="stylesheet" href="/css/custom.css">

</head>
<body>

{block name="header_001"}
<div class="header">
    <div class="home-menu pure-menu pure-menu-open pure-menu-horizontal pure-menu-fixed">
        <a class="pure-menu-heading" href=""><small>HH-MVC Robs</small></a>
	    <ul class="nav nav-pills">
	    {if $smarty.session['USER']['role'] < '1'}
            {foreach $smarty.session['nav']['0'] AS $key => $value}
                <li><a href="{$value}">{$key}</a></li>
            {/foreach}
         {else}
            {foreach $smarty.session['nav']['1'] AS $key => $value}
                <li><a href="{$value}">{$key}</a></li>
            {/foreach}
         {/if}
        </ul>
    </div>
</div>
{/block}

{block name="navigation_sub"}

{/block}

{block name="header_002"}

{/block}

{block name="header_002"}

{/block}


{block name="content_001"}

{/block}

{block name="footer"}
    <div class="footer l-box is-center">
            {$content['footer']['nav']}
    </div>
{/block}

{include file="../basic/script.tpl"}
{$debug}
</body>
</html>