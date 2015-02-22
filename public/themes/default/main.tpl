<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{$head['head']['description']}">
    <meta name="description" content="{$head['head']['keywords']}">
    <title>
    {if $content['head']['title']} 
        {$head['head']['title']} 
    {/else}
        Landing Page &ndash; HH-MVC &ndash; Robs
    {/if}
    </title>
    <link rel="stylesheet" href="/css/purecss.css">
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="/css/main-grid.css">
    <link rel="stylesheet" href="/css/layouts/marketing.css">

    <link rel="stylesheet" href="/css/custom.css">


</head>
<body>
 
{block name="header_001"}
<div class="header">
    <div class="home-menu pure-menu pure-menu-open pure-menu-horizontal pure-menu-fixed">
        <a class="pure-menu-heading" href="">HH-MVC <small>Robs</small></a>
        <ul>
            {foreach $content["content"]["GUEST_NAV"] AS $key => $value}
                <li><a href="{$value}">{$key}</a></li>
            {/foreach}
        </ul>
    </div>
</div>
{/block}

{block name="header_002"}
<div class="splash-container">
    <div class="splash">
        <h1 class="splash-head">{$content['content']['headline_h2']}</h1>
        <p class="splash-subhead">
            {$content['content']['splash_msg']}
        </p>
        <p>
            <a href="http://purecss.io" class="pure-button pure-button-primary">Get Started</a>
        </p>
    </div>
</div>
{/block}

{block name="content_001"}
<div class="content-wrapper">
    <div class="content">
        <h2 class="content-head is-center">{$content['content']['info_msg']}</h2>
            <div class="pure-g">
                <div class="l-box pure-u-1 pure-u-med-1-2 pure-u-lrg-1-4">
                    <h3 class="content-subhead">
                        <i class="fa fa-rocket"></i>
                        Get Started Quickly
                    </h3>
                    <p>
                        Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.
                    </p>
                </div>
                <div class="l-box pure-u-1 pure-u-med-1-2 pure-u-lrg-1-4">
                    <h3 class="content-subhead">
                        <i class="fa fa-mobile"></i>
                        Responsive Layouts
                    </h3>
                    <p>
                        Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.
                    </p>
                </div>
                <div class="l-box pure-u-1 pure-u-med-1-2 pure-u-lrg-1-4">
                    <h3 class="content-subhead">
                        <i class="fa fa-th-large"></i>
                        Modular
                    </h3>
                    <p>
                        Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.
                    </p>
                </div>
                <div class="l-box pure-u-1 pure-u-med-1-2 pure-u-lrg-1-4">
                    <h3 class="content-subhead">
                        <i class="fa fa-check-square-o"></i>
                        Plays Nice
                    </h3>
                    <p>
                        Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.
                    </p>
                </div>
            </div>
    </div>
</div>
{/block}

{block name="content_002"}
<div class="ribbon l-box-lrg pure-g">
    <div class="l-box-lrg is-center pure-u-1 pure-u-med-1-2 pure-u-lrg-2-5">
        <img class="pure-img-responsive" alt="File Icons" width="300" src="img/common/file-icons.png">
    </div>
    <div class="pure-u-1 pure-u-med-1-2 pure-u-lrg-3-5">

        <h2 class="content-head content-head-ribbon">Laboris nisi ut aliquip.</h2>

        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor.
        </p>
    </div>
</div>
{/block}

{block name="content_003"}
<div class="content">
    <h2 class="content-head is-center">Dolore magna aliqua. Uis aute irure.</h2>
    <div class="pure-g">
        <div class="l-box-lrg pure-u-1 pure-u-med-2-5">
            <form class="pure-form pure-form-stacked">
                <fieldset>

                    <label for="email">Your Name</label>
                    <input id="email" type="text" placeholder="Your Name">


                    <label for="email">Your Email</label>
                    <input id="email" type="email" placeholder="Your Email">

                    <label for="password">Your Password</label>
                    <input id="password" type="password" placeholder="Your Password">

                    <button type="submit" class="pure-button">Sign Up</button>
                </fieldset>
            </form>
        </div>

        <div class="l-box-lrg pure-u-1 pure-u-med-3-5">
            <h4>Contact Us</h4>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat.
            </p>

            <h4>More Information</h4>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua.
            </p>
        </div>
    </div>
</div>
{/block}

{block name="footer"}
    <div class="footer l-box is-center">
            {$content['footer']['nav']}
    </div>
{/block}

{include file="basic/script.tpl"}
</body>
</html>