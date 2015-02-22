{extends file="../index.tpl"}

	{block name="content_001"}
		<form action="/member/reminder" method="POST" class="pure-form">
		    <fieldset>
		        <legend>A compact inline form</legend>

		        <input type="email" placeholder="Email">
		        <input type="password" placeholder="Password">

		        <label for="remember">
		            <input id="remember" type="checkbox"> Remember me
		        </label>

		        <button type="submit" class="pure-button pure-button-primary">Sign in</button>
		        <a href="/member/login">Login here!</a>
		    </fieldset>
		</form>
	{/block}
	
	{block name="content_002"}{/block}
	{block name="content_003"}{/block}