<!DOCTYPE html>  
<html lang="en">  
<head>  
{include file="../basic/head.tpl"}
</head>  
	<body> 

		{$content|print_r}

		<form action="/member/reminder" method="POST" class="pure-form">
		    <fieldset>
		        <legend>A compact inline form</legend>

		        <input type="email" placeholder="Email">
		        <input type="password" placeholder="Password">

		        <label for="remember">
		            <input id="remember" type="checkbox"> Remember me
		        </label>

		        <button type="submit" class="pure-button pure-button-primary">Sign in</button>
		    </fieldset>
		</form>

		<a href="/member/login">Login here!</a>

	{include file="../basic/FOOTER.tpl"}
	</body>
</html>