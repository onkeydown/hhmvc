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
            Please Subscribe to access member Area!
        </p>
    </div>
</div>
{/block}

{block name=content_001}
<div class="content-wrapper pure-g-r" style="top:30%; width:50%; left:25%">
    <div class="content">
        <h2 class="content-head is-center">{$content['content']['headline_h2']}</h2>

			<form action="/member/subscribe" method="post" name="subscribe" class="pure-form pure-form-stacked">
			    
			    <fieldset>
			        <legend>Please fullfill all boxes! This is mandatory!</legend>


			        <label class="pure-input" for="username">Username</label>
			        <input name="username" class="pure-input" id="username" type="text" placeholder="username">

			        <label class="pure-input" for="email">Email</label>
			        <input name="email" class="pure-input" id="email" type="email" placeholder="Email">

			        <label class="pure-input" for="password">Password</label>
			        <input name="password" class="pure-input" id="password" type="password" placeholder="Password">
	    		
	    		</fieldset>
			    <fieldset>
			        <label class="pure-input" for="state">Role:
				        <select name="role" id="state">
				            <option value="0">User</option>
				            <option value="3">Editor</option>
				            <option value="7">Admin</option>
				        </select>
			        </label>

			        <label class="pure-input"for="remember" class="pure-checkbox">Remember me</label>
			        <input name="remember" class="pure-input" id="remember" type="checkbox"> 
				</fieldset>
			    
			    <button type="submit" class="pure-button pure-button-primary">Sign in</button>
		
			</form>
		</div>
			<a href="/member/login">Login here.</a>

	</div>

{/block}

{block name=content_002}{/block}

{block name=content_003}{/block}

{block name=footer}{/block}