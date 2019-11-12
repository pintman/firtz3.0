<meta property="name" content="<?php echo $pagename; ?>">
<meta property="author" typeof="Person" content="<?php echo $feedattr['author']; ?>">

<!--breadcrumb-->
<div id="navline-white">
    <div class="uk-container uk-text-white">
        <a class="bc-link" href="<?php echo $BASEURL; ?>"><?php echo $feedattr['title']; ?></a> > <?php echo $dict_navi_page; ?>: <a
            class="bc-link" href="<?php echo $BASEURL; ?><?php echo $feedattr['slug']; ?>/show/page/<?php echo $pagename; ?>"><?php echo $pagename; ?></a>
    </div>
</div>

<!--pages-->
<div id="tm-main" class="tm-main uk-section uk-section-default" uk-height-viewport="expand: true"
     style="box-sizing: border-box;">
    <div class="uk-container">
        <div class="uk-grid" uk-grid="">
            <div class="uk-width-expand@m uk-first-column">
                <div class="uk-child-width-1-1@m uk-grid uk-grid-stack" uk-grid="">
                    <div class="uk-first-column">
                        <article class="uk-article uk-page status-publish format-standard" typeof="Article">
                            <?php echo $this->render($showpage,$this->mime,get_defined_vars(),0); ?>

                            <?php foreach ((explode(',',$UI)?:[]) as $tpath): ?>
                                <?php foreach ((glob($tpath.'/article-end/*.html')?:[]) as $template): ?>
                                    <!-- hook: <?php echo 'episode-end/'.basename($template); ?> -->
                                    <?php echo $this->render('article-end/'.basename($template),$this->mime,get_defined_vars(),0); ?>
                                <?php endforeach; ?>
                            <?php endforeach; ?>
                        </article>
                    </div>
                </div>
            </div>
            <?php echo $this->render('set/sidebar.html',$this->mime,get_defined_vars(),0); ?>
        </div>
    </div>
</div>