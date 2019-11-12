<!DOCTYPE html>
<html lang="<?php echo substr($feedattr['language'],0,2); ?>" dir="ltr">
<head>
    <!-- head meta -->
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- page title -->
    <?php if (!$showpage): ?>
        
            <?php if ($singlepage==false): ?>
                <title><?php echo $feedattr['title']; ?></title>
            <?php endif; ?>
            <?php if ($singlepage==true): ?>
                <title><?php foreach (($items?:[]) as $item): ?><?php echo $feedattr['title']; ?> | <?php echo $item['title']; ?><?php endforeach; ?> | <?php echo $feedattr['title']; ?></title>
            <?php endif; ?>
        
        <?php else: ?>
            <title><?php echo $feedattr['title']; ?> | <?php echo $pagename; ?></title>
        
    <?php endif; ?>
    <!-- page meta -->
    <meta name="description" content="<?php echo $feedattr['description']; ?>"/>
    <meta name="author" content="<?php echo $this->raw($feedattr['author']); ?>"/>
    <?php foreach (($feedattr['audioformats']?:[]) as $format): ?>
        <link rel="alternate" type="application/rss+xml" title="<?php echo $feedattr['title']; ?> (<?php echo $format; ?> Audio)" href="<?php echo $feedattr['baserel']; ?><?php echo $format; ?><?php echo $extxml; ?>" />
    <?php endforeach; ?>
    <?php if ($feedattr['image']): ?>
        <meta property="og:image" content="<?php echo $feedattr['image']; ?>"/>
    <?php endif; ?>
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?php if (!$showpage): ?><?php echo $og['title']; ?><?php else: ?><?php echo basename($showpage,'.html'); ?><?php endif; ?>"/>
    <meta property="og:url" content="<?php if (!$showpage): ?><?php echo $og['url']; ?><?php else: ?><?php echo $BASEURL; ?><?php echo $feedattr['slug']; ?>/show/page/<?php echo basename($showpage); ?><?php endif; ?>"/>
    <meta property="og:site_name" content="<?php echo $feedattr['title']; ?>"/>
    <!-- audio meta -->
    <?php if ($og['audio']): ?>
        <meta property="og:<?php echo $og['audio']['typename']; ?>" content="<?php echo $og['audio']['url']; ?>"/>
        <meta propertyp="og:<?php echo $og['audio']['typename']; ?>:type" content="<?php echo $og['audio']['type']; ?>"/>
    <?php endif; ?>
    <!-- icons meta -->
    <?php if ($feedattr['image']): ?>
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo $favicon_apple; ?>">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo $favicon_apple; ?>">
        <link rel="apple-touch-icon-precomposed" href="<?php echo $favicon_apple; ?>">
        <link rel="shortcut icon" href="<?php echo $BASEURL; ?><?php echo $favicon; ?>">
    <?php endif; ?>
    <!-- feed meta -->
    <?php foreach (($feedattr['audioformats']?:[]) as $format): ?>
        <link rel="alternate" type="application/rss+xml" title="Podcast Feed: <?php echo $feedattr['title']; ?> <?php echo $format; ?>" href="<?php echo $feedattr['baserel']; ?><?php echo $format; ?><?php echo $extxml; ?>" />
    <?php endforeach; ?>
    <!-- css -->
    <?php foreach ((explode(',',$UI)?:[]) as $tpath): ?>
        <?php foreach ((glob($tpath.'qx3/*.css')?:[]) as $template): ?>
            <style id="<?php echo basename($template); ?>"><?php echo $this->render('qx3/'.basename($template),$this->mime,get_defined_vars(),0); ?></style>
        <?php endforeach; ?>
    <?php endforeach; ?>
    <?php foreach ((explode(',',$UI)?:[]) as $tpath): ?>
        <?php foreach ((glob($tpath.'css/*.css')?:[]) as $template): ?>
            <link href="<?php echo $BASEURL; ?><?php echo 'templates/default/css/'.basename($template); ?>" rel="stylesheet" media="screen" type="text/css" />
        <?php endforeach; ?>
    <?php endforeach; ?>
    <style>
        @font-face {
            font-family: Fira Sans;
            src: url(<?php echo $BASEURL; ?>ext/webplayer/fonts/FiraSans-Light.eot?fa487cca520cc7f78a271cb182a29c03) format("eot"),
            url(<?php echo $BASEURL; ?>ext/webplayer/fonts/FiraSans-Light.woff?620af15165ec011b7982f308eb48c34e) format("woff"),
            url(<?php echo $BASEURL; ?>ext/webplayer/fonts/FiraSans-Light.woff2?315ad98e0cb4208b2a002dad0f5b92e8) format("woff2");
            font-weight: 300;
        }
        @font-face {
            font-family: Fira Sans;
            src: url(<?php echo $BASEURL; ?>ext/webplayer/fonts/FiraSans-Regular.eot?bfcf38c3c6170588e22046f671c26fc9) format("eot"),
            url(<?php echo $BASEURL; ?>ext/webplayer/fonts/FiraSans-Regular.woff?abbc4d42c352d94dd0a00856769ebc5a) format("woff"),
            url(<?php echo $BASEURL; ?>ext/webplayer/fonts/FiraSans-Regular.woff2?26f9ff8eb3877040b5f2f0e36759192f) format("woff2");
            font-weight: 500;
        }
        @font-face {
            font-family: Fira Mono;
            src: url(<?php echo $BASEURL; ?>ext/webplayer/fonts/FiraMono-Regular.eot?8d876c180eb01a79be6d1d8bc121919f) format("eot"),
            url(<?php echo $BASEURL; ?>ext/webplayer/fonts/FiraMono-Regular.woff?f25e0dfc5b508f34f63724d7ff607384) format("woff"),
            url(<?php echo $BASEURL; ?>ext/webplayer/fonts/FiraMono-Regular.woff2?fe92bd266274aa44e22e48ca0317ff98) format("woff2");
            font-weight: 500;
        }
    </style>

    <!-- js -->
    <script src="<?php echo $BASEURL; ?>templates/default/qx3/jquery.js"></script>
    <script src="<?php echo $BASEURL; ?>templates/default/qx3/qx3.js"></script>
    <script src="<?php echo $BASEURL; ?>templates/default/qx3/qx3-icons.js"></script>
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <?php foreach ((explode(',',$UI)?:[]) as $tpath): ?>
        <?php foreach ((glob($tpath.'/head/*.html')?:[]) as $template): ?>
            <!-- hook: <?php echo 'head/'.basename($template); ?> -->
            <?php echo $this->render('head/'.basename($template),$this->mime,get_defined_vars(),0); ?>
        <?php endforeach; ?>
    <?php endforeach; ?>
</head>
<body>