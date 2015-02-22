{extends file="../index.tpl"}

{block name="header_002"}
<section class="featured login">
<div class="container-fluid">
<div class="row">
<div class="col-md-4 col-md-offset-4">
<div class="align-center">
    <h4>
    	{$session['USER']['sys_msg']}
    	{$content['content']['headline_h2']}
    </h4>
</div>
</div>
</div>
</div>
</section>
{/block}

{block name="content_001"}
<section class="login subscribe">
<div class="container-fluid">
<div class="row">
<div class="col-md-4 col-md-offset-4 panel">
<div class="col-md-10 col-md-offset-1">
<h2>{$content['content']['headline_h2']}</h2>
	<form action="/member/subscribe" method="post" name="subscribe" role="form">
	    
	    <fieldset>
	        <legend>* following Fields are mandatory</legend>


	        <div class="form-group">
				<label for="username">Username</label>
	        <input name="username" class="form-control" id="username" type="text" placeholder="username" required>
	        </div>
	        <div class="form-group">
				<label for="email">Email</label>
	        <input name="email" class="form-control" id="email" type="email" placeholder="Email" required>
	        </div>
	  		 <div class="form-group">
				<label for="password">Password</label>
	        <input name="pwd" class="form-control" id="password" type="password" placeholder="Password" required>
	        </div>
		
		</fieldset>

	    <fieldset>
	    <div class="form-group">
			<label class="pure-input" for="state">Role:
		    <select name="role" class="form-control" id="state">
	            <option value="0">User</option>
	            <option value="3">Editor</option>
	            <option value="9">Admin</option>
	        </select>
	        </label>
	    </div>
		</fieldset>
	    <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-unlock-alt"></i> Sign in</button>
	</form>

</div>
</div>
</div>
</div>
</section>
{/block}

{block name="content_002"}	{/block}

{block name="content_003"}	{/block}
