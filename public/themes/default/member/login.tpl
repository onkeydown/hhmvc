{extends file="../index.tpl"}
{block name="header_002"}
<section class="featured login">
<div class="container-fluid">
<div class="row">
<div class="col-md-4 col-md-offset-4">
<div class="align-center">
    <h4>
        {$session['USER']['sys_msg']}
    </h4>
</div>
</div>
</div>
</div>
</section>
{/block}

{block name="content_001"}
<section class="login form">
<div class="container-fluid">
<div class="row">
<div class="col-md-4 col-md-offset-4 panel">
<div class="col-md-10 col-md-offset-1">
	<form action="/member/login" method="post" name="login" role="form">
                <input type="hidden" name="time" value="time">
                {literal}
        		<div class="form-group">
                    <label for="username">User</label>
            		<input 
                        type="text" 
                        name="username" 
                        id="username" 
                        type="text" 
                        required="" 
                        pattern="^[A-Za-z0-9_]{1,15}$" 
                        value="" 
                        name="names_pattern3"
                        id="names_pattern3"
                        class="form-control">
                </div>
                <div class="form-group">
                    <label for="pwd">Your secret password!</label>
            		<input 
                        id="pwd" 
                        name="pwd"
                        type="password" 
                        placeholder="Password (min. 6 characters)"
                        pattern="?=^.{6,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$"
                        value=""
                        required=""
                        class="form-control">
                    </div>
                {/literal}
        		
                <button class="btn btn-primary btn-block" type="submit" name="login now" value="login" >Login now</button>
	</form>
</div>
</div>
</div>
</div>    
</section>
{/block}

{block name="content_002"}{/block}

{block name="content_003"}{/block}