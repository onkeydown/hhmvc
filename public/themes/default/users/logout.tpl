{extends file="../index.tpl"}
{block name="header_001"}
<div class="header">
    <div class="home-menu pure-menu pure-menu-open pure-menu-horizontal pure-menu-fixed">
        <a class="pure-menu-heading" href="">HH-MVC <i>Robs</i></a>
        <ul class="nav nav-pills">
        {if $smarty.session['USER']['role'] < '1'}
            {foreach $smarty.session['USER']['nav']['0'] AS $key => $value}
                <li><a href="{$value}">{$key}</a></li>
            {/foreach}
         {else}
            {foreach $smarty.session['USER']['nav']['1'] AS $key => $value}
                <li><a href="{$value}">{$key}</a></li>
            {/foreach}
         {/if}
        </ul>
    </div>
</div>
{/block}

{block name="header_002"}
<div class="splash-container" style="height:35%">
    <div class="splash">
        <p class="splash-subhead">
            Feierabend!
        </p>
    </div>
</div>
{/block}

{block name="content_001"}
<div class="content-wrapper" style="top:30%; width:50%; left:25%">
    <div class="content">
        <h2 class="content-head is-center">Login here!</h2>

		<form action="/member/login" method="POST" name="loginuser">

		<label for="username">Username</label>
		<input type="text" name="username" id="username">

		<label for="password">Password</label>
		<input type="password" name="password" id="password">

		<button type="submit" name="login now" value="login" >Login now</button>

		</form>

		<a href="/member/pwd_reminder">Password reminder</a>
{/block}