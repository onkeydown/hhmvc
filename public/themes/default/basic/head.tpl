<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{$head['head']['description']}">
    <meta name="description" content="{$head['head']['keywords']}">
    <title>{$head['head']['title']}</title>
    <!-- Source Sans Pro -->
    <!-- Libre Baskerville copy font -->
   <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,900|Libre+Baskerville:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
<!-- 
    <link rel="stylesheet" href="/css/purecss.css">
    <link rel="stylesheet" href="/css/main-grid.css">
    <link rel="stylesheet" href="/css/layouts/marketing.css"> -->
    {if $session['USER']['role'] > 0}

        <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/codemirror/3.20.0/codemirror.min.css" />
        <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/codemirror/3.20.0/theme/monokai.min.css" />

        <link rel="stylesheet" href="/css/summernote.css">
        
    {/if}
    <!-- custom styles -->
    <link rel="stylesheet" href="/css/custom.css">



</head>