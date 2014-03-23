<!DOCTYPE html>  
<html lang="en">  
<head>  
<meta http-equiv="content-type" content="text/html;charset=utf-8" />  
<title>test</title>  
<meta name="viewport" content="width=device-width, initial-scale=1.0">  
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" /> 
<meta name="robots" content="all">  
<meta name="revisit" content="1 day">   
</head>  
	<body> 

		{$content|print_r}

		<form action="/member/login" method="POST">

		<label for="usename">Username</label>
		<input type="text" id="username">

		<label for="password">Password</label>
		<input type="password" id="password">

		<button type="submit">Login now</button>

		</form>

		<a href="/member/pwd_reminder">Password reminder</a>

	
	</body>
</html>