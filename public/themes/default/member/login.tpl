{extends file="../index.tpl"}
{block name=header_001}
<div class="header">
    <div class="home-menu pure-menu pure-menu-open pure-menu-horizontal pure-menu-fixed">
        <a class="pure-menu-heading" href="">HH-MVC <i>Robs</i></a>
        <ul>
            {foreach $main_nav AS $key => $value}
                <li><a href="{$value}">{$key}</a></li>
            {/foreach}
        </ul>
    </div>
</div>
{/block}
{block name=header_002}
<div class="splash-container" style="height:35%">
    <div class="splash">
        <p class="splash-subhead">
                {$session['USER']['sys_msg']}
        </p>
    </div>
</div>
{/block}

{block name=content_001}
<div class="content-wrapper" style="top:30%; width:50%; left:25%">
    <div class="content">
        <h2 class="content-head is-center">Enter your Userdata here!</h2>

		<form action="/member/login" method="POST" name="loginuser" class="pure-form pure-form-stacked">

		<label class="pure-input-*-*" for="username">Username</label>
		<input class="pure-input-*-*" type="text" name="username" id="username" placeholder="Username">

		<label class="pure-input-*-*" for="password">Password</label>
		<input class="pure-input-*-*" type="password" name="password" id="password" placeholder="Password">

		<button class="pure-button pure-button-primary  button-xlarge"  type="submit" name="login now" value="login" >Login now</button>

		</form>

		<a href="/member/pwd_reminder">Password reminder</a>
    </div>
</div>    
{/block}

{block name=content_002}{/block}

{block name=content_003}{/block}