{extends file="../index.tpl"}
{block name=header}
<div class="header">
    <div class="home-menu pure-menu pure-menu-open pure-menu-horizontal pure-menu-fixed">
        <a class="pure-menu-heading" href="">HH-MVC <i>Robs</i></a>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/tour">Tour</a></li>
            <li class="pure-menu-selected" ><a href="#">Sign Up</a></li>
            <li><a href="/private/efforts">Efforts</a></li>
        </ul>
    </div>
</div>
{/block}
{block name=header_splash}
<div class="splash-container" style="height:35%">
    <div class="splash">
        <p class="splash-subhead">
            Please Subscribe to access member Area!
        </p>
    </div>
</div>
{/block}

{block name=content}
<div class="content-wrapper" style="top:30%; width:50%; left:25%">
    <div class="content">
        <h2 class="content-head is-center">Excepteur sint occaecat cupidatat.</h2>

			{*$content|print_r*} 

			<form action="/member/subscribe" method="post" name="subscribe" class="pure-form pure-form-stacked">
			    <fieldset>
			        <legend>Please fullfill all boxes! This is mandatory!</legend>


			        <label class="pure-input-2-3" for="username">Username</label>
			        <input class="pure-input-2-3" id="username" type="text" placeholder="username">

			        <label class="pure-input-2-3" for="email">Email</label>
			        <input class="pure-input-2-3" id="email" type="email" placeholder="Email">

			        <label class="pure-input-2-3" for="password">Password</label>
			        <input class="pure-input-2-3" id="password" type="password" placeholder="Password">

					<label class="pure-input-2-3" for="password2">Password2</label>
			        <input class="pure-input-2-3" id="password2" type="password" placeholder="Password again">


			        <label class="pure-input-2-3" for="state">Role:</label>
			        <select name="role" id="state">
			            <option value="0">User</option>
			            <option value="3">Editor</option>
			            <option value="7">Admin</option>
			        </select>

			        <label class="pure-input-2-3"for="remember" class="pure-checkbox">
			            <input class="pure-input-2-3" id="remember" type="checkbox"> Remember me
			        </label>

			        <button type="submit" class="pure-button pure-button-primary">Sign in</button>
			    </fieldset>
			</form>
		</div>
			<a href="/member/login">Login here.</a>

	</div>

{/block}